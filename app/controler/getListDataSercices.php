<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    //$id = $_GET['?id']; articles_annonces, 
    include_once'db/ps-config.php';

    function pdoStatementExecuteAndFetchObjWithTableNames(PDOStatement $statement)
    {
      $statement->setFetchMode(PDO::FETCH_NUM);
      $statement->execute();

      //build our associative array keys
      $qualifiedColumnNames = array();
      for ($i = 0; $i < $statement->columnCount(); $i++) {
          $columnMeta = $statement->getColumnMeta($i);
          $qualifiedColumnNames[] = "$columnMeta[table].$columnMeta[name]";
      }

      //fetch results and combine with keys
      while ($row = $statement->fetch()) {
          $qualifiedRow = array_combine($qualifiedColumnNames, $row);
          yield (object) $qualifiedRow;
      }  
    }

     $dataAll_SQL = 'SELECT * FROM articles_annonce_services ORDER BY id DESC';
     $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
     $dataAll_SQLstm->execute() or die(print_r($dataAll_SQLstm->errorInfo()));
     $result_dataAll = $dataAll_SQLstm->fetchAll();
     $count_dataAll  = $dataAll_SQLstm->rowCount();
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

          $prix_marchandise  = $valueData['prix_marchandise'];
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
                                    <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="titre-annonce"><?= truncate($titleAnnonce, 70) ?></a>
                               </h3>
                               <p><?= truncate($description, 100) ?></p>
                               <!--<a class="btn btn-primary" href="#">View Project</a>-->
                          </div>
                     </div>
                     <div class="col-md-12">
                          <div class="head-annonce row">
                               <div class="col-md-8 col-sm-12"><h4 class="text-lelt"><small>Publié il y a <?= time_elapsed_string(timestampToDate($time_stamp)); ?> | Ville de Montréal</small></h4></div>
                               <div class="col-md-4 col-sm-12"><h4 class="price text-right"><?= $prix_marchandise // number_format($prix_marchandise,2,","," "); ?>$</h4></div>
                          </div>
                     </div>                       
                </div>
                <!-- /.row -->
          </div> <?php
          }
          
     }else { 
        echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';    
     }
     
?>