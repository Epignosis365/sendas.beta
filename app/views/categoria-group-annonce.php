<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    //$id = $_GET['?id']; articles_annonces, 
    include_once'db/ps-config.php';
    /*
    if ($TSD == '98722articles_annoncesGSKT') {
          $title = "Touts les annonce |  Senda.ca";
          include_once'app/controler/getListData.php';

     }elseif ($TSD == '98722articles_annonces_autoGSK') {
          $title = "Annonces  Auto et véhicule |  Senda.ca";
          include_once'app/controler/getListDataAuto.php';

     }elseif ($TSD == '98722articles_annonces_immobilierGSKT') {
          $title = "Annonces Immobilier |  Senda.ca";
          include_once'app/controler/getListDataImmobilier.php';
     }else {

     }
     */

      $categorie = base64_decode($_GET['?catgory']);
      $TSD = base64_decode($_GET['?tsd']);
      $SBT = base64_decode($_GET['?sbt']);
      $CTY = base64_decode($_GET['?cty']);
      $LCT = base64_decode($_GET['?lct']);
      $minPrix = $_GET['min'];
      $maxPrix = $_GET['max'];
      //echo ":::".$LCT;
      //echo ":::".$CTY.'<br>';
      //echo "::".$categorie;
      $dataBase_table  = "";
      $condition_table = "";
      $prixGeneral_table = "";
      // echo ":::".$categorie;
      if ($categorie == "Autos et véhicules") {
           # code...
           $dataBase_table = 'articles_annonces_autos';
           $prixGeneral_table = "prix_marchandise";
      }
      elseif (($categorie == "Immobilier")) {
           # code...
           $dataBase_table = 'articles_annonces_immobilier'; 
           $prixGeneral_table = "prix_apartement";
      }elseif (($categorie == "Services")) {
           # code...
           $dataBase_table = 'articles_annonce_services';
           $prixGeneral_table = "prix_marchandise";
      }
      elseif (($categorie == "Acheter et vendre")) {
           # code...
           $dataBase_table = 'articles_annonces';
           $prixGeneral_table = "prix_marchandise";
      }
      else {
           //$dataBase_table = ''; 
      }
      $condition_table = $categorie.' &gt; '.$TSD.$SBT;
      $title = $condition_table.' - le site d\'annonces Canadien et international |  Sendas.ca';
      //echo "categories::".$condition_table.'<br>';
      $array_index = array_search ($CTY, $canadian_states_original);
      $city_articles = $canadian_states_original[$CTY];
      //echo ":::".$city_articles;
      //echo $prixGeneral_table;

      /*-----------------------------------
        PAGINACAO Python MySQL
      -----------------------------------*/
      $pagina_atual = filter_input(INPUT_GET, '?pagina', FILTER_SANITIZE_NUMBER_INT);
      //echo "atual:::".$pagina_atual;
      $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; // If atual page is empty we give value 1
      //echo "<br>pagina:::".$pagina.'<br>';
      // Numéro de itens por pagina
      $qnt_result_pg = 8;
      $itens_por_pagina = $qnt_result_pg;
      // Pegar a pagina
      //$paginaURL = intval($_GET['?pagina']);
      $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;


      if (!empty($CTY)) {
        $dataVille_SQL = "SELECT * FROM cities_canada WHERE state = ?";
        $dataVille_SQLstm = $bdd->prepare($dataVille_SQL);
        $dataVille_SQLstm->execute(
            array($CTY)) or die(print_r($dataVille_SQLstm->errorInfo()));
        $result_dataVille = $dataVille_SQLstm->fetchAll();
        $count_dataVille  = $dataVille_SQLstm->rowCount();
        if (!empty($minPrix) && !empty($maxPrix)) {
          # code... MIN and MAX
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories and $prixGeneral_table BETWEEN $minPrix and $maxPrix ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories and $prixGeneral_table BETWEEN $minPrix and $maxPrix";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }elseif (!empty($minPrix)) {
          # code... MIN
          $dataAll_SQL = "SELECT * FROM $dataBase_table  WHERE categories = ? and $prixGeneral_table >= ? ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array($condition_table, $minPrix)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table  WHERE categories = ? and $prixGeneral_table >= ?";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array($condition_table, $minPrix)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }elseif (!empty($maxPrix)) {
          # code... MAX
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = ? and $prixGeneral_table <= ? ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array($condition_table, $maxPrix)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = ? and $prixGeneral_table <= ?";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array($condition_table, $maxPrix)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }else {
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories and province = :province ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array('categories' => $condition_table, 'province' => str_to_noaccent($CTY))) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }        
      }else {
        if (!empty($minPrix) && !empty($maxPrix)) {
          # code... MIN and MAX
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories and $prixGeneral_table BETWEEN $minPrix and $maxPrix ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories and $prixGeneral_table BETWEEN $minPrix and $maxPrix";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }elseif (!empty($minPrix)) {
          # code... MIN
          $dataAll_SQL = "SELECT * FROM $dataBase_table  WHERE categories = ? and $prixGeneral_table >= ? LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array($condition_table, $minPrix)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table  WHERE categories = ? and $prixGeneral_table >= ?";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array($condition_table, $minPrix)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }elseif (!empty($maxPrix)) {
          # code... MAX
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = ? and $prixGeneral_table <= ? ORDER BY id DESC LIMIT $inicio, $itens_por_pagina";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array($condition_table, $maxPrix)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = ? and $prixGeneral_table <= ?";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array($condition_table, $maxPrix)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }else {
          $dataAll_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories ORDER BY id DESC LIMIT $inicio, $itens_por_pagina ";
          $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
          $dataAll_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataAll_SQLstm->errorInfo()));

          $dataFiltred_SQL = "SELECT * FROM $dataBase_table WHERE categories = :categories ORDER BY id DESC";
          $dataFiltred_SQLstm = $bdd->prepare($dataFiltred_SQL);
          $dataFiltred_SQLstm->execute(
               array('categories' => $condition_table)) or die(print_r($dataFiltred_SQLstm->errorInfo()));
        }
      }      
      $result_dataFiltred = $dataFiltred_SQLstm->fetchAll();
      $count_dataFiltred  = $dataFiltred_SQLstm->rowCount();
      // Filtré avec conditions
      $result_dataAll = $dataAll_SQLstm->fetchAll();
      $count_dataAll  = $dataAll_SQLstm->rowCount();

      // Paginiaçao parte 2
      $num_de_paginas = ceil($count_dataFiltred/$itens_por_pagina);
      //echo ":::".$num_de_paginas;
?>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css_" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/lister-produit.css">
<script type="text/javascript">
  function addURL(element) {
    var prixMin = $("#prixMin").val();
    var prixMax = $("#prixMax").val();
    var data=window.location+"&min="+prixMin+"&max="+prixMax;
    window.location.href=data;
  }
</script>
<!-- LIST PRODUCT -->
<!--<iframe src="https://rcm-eu.amazon-adsystem.com/e/cm?o=8&p=13&l=ur1&category=gift_certificates&banner=1G4918G396JFD3V859R2&f=ifr&linkID=468f929e823e66a2d8cac1cae497e2c7&t=successsendas-21&tracking_id=successsendas-21" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>-->
<div class="body-artificiel">
<br>
<div class="container-fluid">          
     <div class="row">
          <div class="list-filtre col-md-3 col-sm-12" style="padding: 0px;">
              <?php include_once'app/views/box_publicite.php'; ?>
          </div>

          <div class="list-produits col-md-9 col-sm-12"> 
               <div class="col-sm-12 pull-right" style="padding: ;">
                    
                    <div class="head-produits col-md-12 col-sm-12" style="padding: 10px;">
                      <div class="col-md-4" style="padding: 0px;background-color: #FFF;">
                        <label style="font-size: .9em;">Prix:</label>
                        <div class="input-group" style="">                            
                            <input type="text" class="form-control" id="prixMin" value="<?= $minPrix ?>" placeholder="Min"/>
                            <span class="input-group-addon">-</span>
                            <input type="text" class="form-control" id="prixMax" value="<?= $maxPrix ?>" placeholder="Max"/>
                            <span class="input-group-addon" style="padding: 0px;"></span>
                            <button type="button" onclick="addURL(this);" class="btn btn-success form-control"  placeholder=""> Ok! </button>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="col-md-12" style="padding: 0px;background-color: #FFF;">
                          <label style="font-size: .9em;">Province ou état:</label>
                          <div class="input-group" style="">
                            <div class="dropdown_" style="width: 250px;">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin: 0px;padding: 10px 5px;width: 98%;color: #;height: 37px;">
                                <?php 
                                  if (!empty($city_articles)) {echo $city_articles;}
                                  else {
                                    if (!empty($CTY)) {
                                      echo $CTY;
                                    }else {echo "--Tout le Canada--";}
                                  } 
                                 ?>
                                <i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 20px;"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 10px;width: 98%;border: 1px solid #e5e5e5;">
                                <?php 
                                  foreach ($canadian_states_original as $key => $provinceName) { ?>
                                    <a class="dropdown-item" href="<?= $url ?>&?cty=<?= base64_encode($key) ?>"><?= $provinceName ?></a><br> <?php
                                  }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="col-md-12" style="padding: 0px;background-color: #FFF;">
                          <label style="font-size: .9em;">Ville ou Région:</label>
                          <div class="input-group" style="">
                            <div class="dropdown_" style="width: 250px;">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin: 0px;padding: 10px 5px;width: 98%;color: #;height: 37px;">
                                <?php                                   
                                  if (!empty($LCT)) {
                                      echo $LCT;
                                  }else {echo "-- Tout la province --";}
                                 ?>
                                <i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 20px;"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 10px;width: 98%;border: 1px solid #e5e5e5;max-height: 250px;overflow: auto;">
                                <?php 
                                  foreach ($result_dataVille as $key => $villes) { $locationVille = $villes['city']; ?>
                                    <a class="dropdown-item" href="<?= $url ?>&?lct=<?= base64_encode($locationVille) ?>"><?= $locationVille; ?></a><br> <?php
                                  }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php if ($count_dataFiltred > 0) { ?>
                    <div class="head-produits col-md-12 col-sm-12" style="padding: ;">
                         <h4 class="pull-left">  Affichage 1 - <?= $itens_por_pagina; ?> sur <?= $count_dataFiltred ?> annonces </h4>
                         <h4 class="pull-right">  <small>Affichage 1 - <?= $itens_por_pagina; ?> sur <?= $count_dataFiltred ?></small> </h4>
                    </div> <?php } ?>
                    <div class="col-md-12" style="padding: 0px;">
                         <!-- Get ListData -->
                         <?php                              
                              if ($count_dataAll > 0) {
                                 foreach ($result_dataAll as $valueData) {
                                     $id_annonceur      = $valueData['id_annonceur'];
                                   $id_annonce      = $valueData['id_annonce'];
                                   $id_crypt          = $valueData['id_crypt'];
                                   $titleAnnonce      = $valueData['titre_annonce'];
                                   $categories        = $valueData['categories'];
                                   $adresse_annonceur = $valueData['adresse_annonceur'];
                                   $description       = $valueData['description'];
                                   $type_annonce      = $valueData['type_annonce'];

                                   $taille        = $valueData['taille'];
                                   $couleur       = $valueData['couleur'];
                                   $unite_piece   = $valueData['unite_piece'];
                                   $ville         = $valueData['ville'];
                                   $villeImmo     = $valueData['villeAppartement'];

                                   $$prixGeneral_table  = $valueData['$prixGeneral_table'];
                                   $type_annonceur    = $valueData['type_annonceur'];
                                   $marque            = $valueData['marque'];
                                   $modele            = $valueData['modele'];
                                   $chambres          = $valueData['chambres'];
                                   $sallons           = $valueData['sallons'];
                                   $salleDeBains      = $valueData['salleDeBains'];
                                   $codePostal        = $valueData['codePostal'];
                                   $adress_marchanise = $valueData['adress_marchanise'];
                                   $numero_telephone  = $valueData['numero_telephone'];
                                   $photos_array      = $valueData['photos_array'];
                                   $date_annoncee     = $valueData['date_annoncee'];
                                   $time_stamp        = $valueData['time_stamp'];

                                   $array_PHOTOS = explode(',', $photos_array);
                                   $photo_cover = array_shift(array_slice($array_PHOTOS, 0, 1)); 
                                   $prix_produit1     = $valueData['prix_marchandise'];
                                   $prix_produit2     = $valueData['prix_apartement'];
                                   

                                   $array_PHOTOS = explode(',', $photos_array);
                                   $photo_cover = array_shift(array_slice($array_PHOTOS, 0, 1)); 
                                   $prix = 0;
                                   if (number_format($prix_produit1,2,","," ") == '0,00') {
                                        $prix = number_format($prix_produit2,2,","," ");
                                   }else { $prix = number_format($prix_produit1,2,","," ");}
                                   ?>
                                   <div class="annonce-complete col-md-6">
                                         <!-- Project One -->
                                         <div class="box-annonce row">
                                              <div class="col-md-12" style="padding: 0px;">
                                                   <div class="col-md-4" style="padding: 0px;">
                                                        <div class="content-img">
                                                             <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                                                 <img class="img-fluid rounded mb-3 mb-md-0" src="produitsImages/<?= $photo_cover; ?>" alt="">
                                                            </a>
                                                        </div>                                             
                                                   </div>
                                                   <div class="content-info col-md-8" style="padding: ;">
                                                        <h3>
                                                             <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="titre-annonce"><?= truncate($titleAnnonce, 60) ?></a>
                                                        </h3>
                                                        <p><?= truncate($description, 110) ?></p>
                                                        <!--<a class="btn btn-primary" href="#">View Project</a>-->
                                                   </div>
                                              </div>
                                              <div class="col-md-12">
                                                   <div class="head-annonce row">
                                                        <div class="col-md-8 col-sm-12"><h4 class="text-lelt"><small>Publié il y a <?= time_elapsed_string(timestampToDate($time_stamp)); ?> | <?= $villeImmo.$ville; ?></small></h4></div>
                                                        <div class="col-md-4 col-sm-12"><h4 class="price text-right"><?= $prix // number_format($$prixGeneral_table,2,","," "); ?>$</h4></div>
                                                   </div>
                                              </div>                       
                                         </div>
                                         <!-- /.row -->
                                   </div> <?php
                                   }
                                   
                              }else { 
                                 echo '<br><center><label class="erro-message-empty"> Désolé, nous avons pas encore trouvé d\'articles pour cette categorie.</label></center><br />';    
                              }
                              $max_link = ceil($num_de_paginas / 2);
                         ?>
                          <div class="col-md-12" style="padding: 0px;">
                            <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li>
                                  <a href="<?= $url; ?>&?pagina=1" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php
                                $estilo = "class=\"active\"";                              
                                for ($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1 ; $pag_ant++) { 
                                  if ($pag_ant >= 1) { ?>
                                    <li><a href="<?= $url; ?>&?pagina=<?= $pag_ant ?>" aria-label="Previous"><?= $pag_ant ?></li></a> <?php
                                  }
                                }
                                echo '<li '.$estilo.'><a>'.$pagina.'</li></a>';
                                for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_link ; $pag_dep++) {                                   
                                  if ($pag_dep <= $num_de_paginas) {
                                    ?>
                                    <li><a href="<?= $url; ?>&?pagina=<?= $pag_dep ?>" aria-label="Next"><?= $pag_dep ?></li></a> <?php
                                  }
                                }
                                  /*
                                  for ($i=0; $i <= $num_de_paginas; $i++) {
                                    $estilo = "";
                                    if ($pagina == $i) {
                                      $estilo = "class=\"active\"";
                                    }
                                  ?>
                                    <li <?= $estilo; ?>><a href="<?= $url; ?>&?pagina=<?= $i; ?>"><?= $i+1; ?></a></li> <?php
                                  } */
                                  ?>
                                <li>
                                  <a href="<?= $url; ?>&?pagina=<?= $num_de_paginas-1; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                          <div class="col-md-12" style="padding: 0px;">
                            <?php include_once'app/views/ebay-pub.php'; ?>
                          </div>
                    </div>                    
               </div>
          </div>
     </div>
</div>
<br>
</div>