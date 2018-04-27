<?php
  $talbe_name = '';
  $variable=$senha_crypted;
  $newval = $senha_crypted;
  $table_hash = $_GET['id'];
  $dEL = base64_decode($_GET['dEL']);
  if ($table_hash == 1) {
    # code...
    $talbe_name = 'articles_annonces';
  }elseif ($table_hash == 2) {
    # code...
    $talbe_name = 'articles_annonces_autos';
  }elseif ($table_hash == 3) {
    # code...
    $talbe_name = 'articles_annonces_immobilier';
  }elseif ($table_hash == 4) {
    # code...
    $talbe_name = 'articles_annonce_services';
  }else { //nothing to do 
  }

  $adr_annonce=base64_decode($_GET['?adr_annonce']);
    //echo "<br> TS VALUE::".$ts.'<br>';
  if (!empty($adr_annonce)) {
    # code...
    if ($adr_annonce == "Autos et véhicules &gt; Autos et camions" || $adr_annonce == "Autos et véhicules &gt; Voitures d'époque") {        // echo "Details AUTO";
        include_once'app/user/update-auto-annonce.php';
        echo '<style type="text/css">.corpus { display: none; }</style>';
    }
    elseif (strpos($adr_annonce, 'Immobilier &gt;') !== false) {
        include_once'app/user/update-immobilier-annonce.php';
        echo '<style type="text/css">.corpus { display: none; }</style>';
    }
    elseif (strpos($adr_annonce, 'Services &gt;') !== false) {
        include_once'app/user/update-services-annonce.php';
        echo '<style type="text/css">.corpus { display: none; }</style>';
    }
    else {
        include_once'app/user/update-objects-annonce.php';
        echo '<style type="text/css">.corpus { display: none; }</style>';
    }
  }

  if (!empty($dEL)) {
    # code...
    //echo ":::".$dEL.':::'.$talbe_name;
    //deleteDataList($talbe_name, $dEL);    
    $deleteList = $bdd->prepare('DELETE FROM '.$talbe_name.' WHERE id_crypt= :id_crypt');
    $deleteList->execute(array('id_crypt' => $dEL)) or die(print_r($deleteList->errorInfo()));    
    $_SERVER['REQUEST_URI'] .= '&'.$variable.'='.$newval;
  }
  //echo "<br>:::".$talbe_name;
    
    $dataAll_SQL = 'SELECT * FROM `articles_annonces` WHERE `id_annonceur` = ? ORDER BY id DESC';
    $dataAll_SQLstm = $bdd->prepare($dataAll_SQL);
    $dataAll_SQLstm->execute(array($_SESSION['G47R-CRY'])) or die(print_r($dataAll_SQLstm->errorInfo()));
    $result_dataAll = $dataAll_SQLstm->fetchAll();
    $count_dataAll  = $dataAll_SQLstm->rowCount();

    $dataAll_SQL_1 = 'SELECT * FROM `articles_annonces_autos` WHERE `id_annonceur` = ?';
    $dataAll_SQLstm_1 = $bdd->prepare($dataAll_SQL_1);
    $dataAll_SQLstm_1->execute(array($_SESSION['G47R-CRY'])) or die(print_r($dataAll_SQLstm_1->errorInfo()));
    $result_dataAll_1 = $dataAll_SQLstm_1->fetchAll();
    $count_dataAll_1  = $dataAll_SQLstm_1->rowCount();

    $dataAll_SQL_2 = 'SELECT * FROM `articles_annonces_immobilier` WHERE `id_annonceur` = ?';
    $dataAll_SQLstm_2 = $bdd->prepare($dataAll_SQL_2);
    $dataAll_SQLstm_2->execute(array($_SESSION['G47R-CRY'])) or die(print_r($dataAll_SQLstm_2->errorInfo()));
    $result_dataAll_2 = $dataAll_SQLstm_2->fetchAll();
    $count_dataAll_2  = $dataAll_SQLstm_2->rowCount();

    $dataAll_SQL_3 = 'SELECT * FROM `articles_annonce_services` WHERE `id_annonceur` = ?';
    $dataAll_SQLstm_3 = $bdd->prepare($dataAll_SQL_3);
    $dataAll_SQLstm_3->execute(array($_SESSION['G47R-CRY'])) or die(print_r($dataAll_SQLstm_3->errorInfo()));
    $result_dataAll_3 = $dataAll_SQLstm_3->fetchAll();
    $count_dataAll_3  = $dataAll_SQLstm_3->rowCount();
?>

<script type="text/javascript">
    function SubmitFormDataModifier() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var youremail = $("#youremail").val();
        var yourephone = $("#yourephone").val();
        var youraddress = $("#youraddress").val();

        $.post("app/model/str-update-profil.php", { firstname: firstname, lastname: lastname, youremail: youremail, yourephone: yourephone, youraddress: youraddress },
        function(data) {
        $('#results_inscription').html(data);
        //$('#in-Sysform')[0].reset();
        });
    }
</script>

<!-- Custom styles for this template -->
<link href="css/profil-usr.css" rel="stylesheet">

<div class="container-fluid corpus" style="margin-top: 10px;">
  <div class="col-md-9">

    <div class="container">
        <div class="row_">
        <div class="col-md-10">
          
          <div class="col-md-12" style="padding: 0px;padding-top: 15px;margin-bottom: 15px;">
            <div class="col-md-1" style="background-color: #">
              <div class="content-favicon">
                <img class="img-responsive" src="images/HTB1Tad1pcjI8KJjSspp760byVXaF.png">
              </div>
            </div>
            <div class="col-md-11" style="padding: 0px;">
              <h2 class="usr-nom-profil"><?= $_SESSION['G47R-FST'].' '.$_SESSION['G47R-LST'] ?> <small><br><a href="#tab_default_5" data-toggle="tab">Modifier mon profil</a></small>
                <a href="?/p=public-annonce" class="btn btn-default pull-right" style="font-size: .6em;padding: 5px 15px;margin-top: -10px;margin-right: 20px;">Publier annonce</a>
              </h2>
              
            </div>
          </div>

          <div class="tabbable-panel" style="background-color: #FFF;">
            <div class="tabbable-line">
              <ul class="nav nav-tabs ">
                <li class="active">
                  <a href="#tab_default_1" data-toggle="tab">
                  Mes annonces </a>
                </li>
                <li>
                  <a href="#tab_default_5" data-toggle="tab">
                    Mon profil </a>
                </li>
                <!--
                <li>
                  <a href="#tab_default_2" data-toggle="tab">
                  Historique de visites </a>
                </li>
                <li>
                  <a href="#tab_default_3" data-toggle="tab">
                  Mes messages </a>
                </li>
                <li>
                  <a href="#tab_default_4" data-toggle="tab">
                  Mes favoris </a>
                </li>
                -->
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_default_1">
                  <div class="col-md-12">
                    <?php
                      if ($count_dataAll > 0) {
                        foreach ($result_dataAll as $key => $valueData) {
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
                        <div class="col-md-3" style="padding: 2px;font-family: ubuntu;font-weight: 300;">
                          <div class="content-img-prod-user">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><img class="img-responsive" src="produitsImages/<?= $photo_cover ?>"></a>
                          </div>
                          <h2 class="title-annonce-private">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><?= $titleAnnonce ?></a>
                          </h2>
                          <div class="col-md-12" style="padding: 5px; border: 1px dashed #ed290b;background-color: #;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="price-private-usr" href="#"><?= $prix_marchandise ?> $CA</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="rice-private-usr pull-right" href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" target='_blank' >Visualiser</a>
                            </div>
                          </div>
                          <div class="col-md-12" style="padding: 0px;padding-top: 5px;border: 0px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-danger" href="?/p=usr&Tl=<?= $senha_crypted ?>&dEL=<?= base64_encode($id_crypt) ?>&id=1">Supprimer</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-success pull-right" href="?/p=usr&?adr_annonce=<?= base64_encode($categories); ?>&?VTr=<?= base64_encode($id_annonce); ?>">Modifier</a>
                            </div>
                          </div>
                        </div> <?php
                      } 
                    }else {
                      echo "Aucun article trouvé.";
                    }
                    ?>
                    <?php
                      if ($count_dataAll_1 > 0) {
                        foreach ($result_dataAll_1 as $key => $valueData_1) {
                            $id_annonceur      = $valueData_1['id_annonceur'];
                          $id_annonce      = $valueData_1['id_annonce'];
                          $id_crypt          = $valueData_1['id_crypt'];
                          $titleAnnonce      = $valueData_1['titre_annonce'];
                          $categories        = $valueData_1['categories'];
                          $adresse_annonceur = $valueData_1['adresse_annonceur'];
                          $description       = $valueData_1['description'];
                          $type_annonce      = $valueData_1['type_annonce'];

                          $taille        = $valueData_1['taille'];
                          $couleur       = $valueData_1['couleur'];
                          $unite_piece   = $valueData_1['unite_piece'];

                          $prix_marchandise  = $valueData_1['prix_marchandise'];
                          $type_annonceur    = $valueData_1['type_annonceur'];
                          $marque            = $valueData_1['marque'];
                          $modele            = $valueData_1['modele'];
                          $chambres          = $valueData_1['chambres'];
                          $sallons           = $valueData_1['sallons'];
                          $salleDeBains      = $valueData_1['salleDeBains'];
                          $codePostal        = $valueData_1['codePostal'];
                          $adress_marchanise = $valueData_1['adress_marchanise'];
                          $numero_telephone  = $valueData_1['numero_telephone'];
                          $photos_array      = $valueData_1['photos_array'];
                          $date_annoncee     = $valueData_1['date_annoncee'];
                          $time_stamp        = $valueData_1['time_stamp'];

                          $array_PHOTOS = explode(',', $photos_array);
                          $photo_cover = array_shift(array_slice($array_PHOTOS, 0, 1));

                        ?>                        
                        <div class="col-md-3" style="padding: 2px;">
                          <div class="content-img-prod-user">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><img class="img-responsive" src="produitsImages/<?= $photo_cover ?>"></a>
                          </div>
                          <h2 class="title-annonce-private">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><?= $titleAnnonce ?></a>
                          </h2>
                          <div class="col-md-12" style="padding: 5px;border: 1px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="price-private-usr" href="#"><?= $prix_marchandise ?> $CA</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="rice-private-usr pull-right" href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" target='_blank' >Visualiser</a>
                            </div>
                          </div>
                          <div class="col-md-12" style="padding: 0px;padding-top: 5px;border: 0px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-danger" href="?/p=usr&Tl=<?= $senha_crypted ?>&dEL=<?= base64_encode($id_crypt) ?>&id=2">Supprimer</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-success pull-right" href="?/p=usr&?adr_annonce=<?= base64_encode($categories); ?>&?VTr=<?= base64_encode($id_annonce); ?>">Modifier</a>
                            </div>
                          </div>
                        </div> <?php
                      } 
                    }else {
                      echo "Aucun article trouvé.";
                    }
                    ?>
                    <?php
                      if ($count_dataAll_2 > 0) {
                        foreach ($result_dataAll_2 as $key => $valueData) {
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

                          $prix_marchandise  = $valueData['prix_apartement'];
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
                        <div class="col-md-3" style="padding: 2px;">
                          <div class="content-img-prod-user">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><img class="img-responsive" src="produitsImages/<?= $photo_cover ?>"></a>
                          </div>
                          <h2 class="title-annonce-private">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><?= $titleAnnonce ?></a>
                          </h2>
                          <div class="col-md-12" style="padding: 5px;border: 1px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="price-private-usr" href="#"><?= $prix_marchandise ?> $CA</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="rice-private-usr pull-right" href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" target='_blank' >Visualiser</a>
                            </div>
                          </div>
                          <div class="col-md-12" style="padding: 0px;padding-top: 5px;border: 0px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-danger" href="?/p=usr&Tl=<?= $senha_crypted ?>&dEL=<?= base64_encode($id_crypt) ?>&id=3">Supprimer</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-success pull-right" href="?/p=usr&?adr_annonce=<?= base64_encode($categories); ?>&?VTr=<?= base64_encode($id_annonce); ?>">Modifier</a>
                            </div>
                          </div>
                        </div> <?php
                      } 
                    }else {
                      echo "Aucun article trouvé.";
                    }
                    ?>
                    <?php
                      if ($count_dataAll_3 > 0) {
                        foreach ($result_dataAll_3 as $key => $valueData) {
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
                        <div class="col-md-3" style="padding: 2px;">
                          <div class="content-img-prod-user">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><img class="img-responsive" src="produitsImages/<?= $photo_cover ?>"></a>                            
                          </div>
                          <h2 class="title-annonce-private">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>"><?= $titleAnnonce ?></a>
                          </h2>
                          <div class="col-md-12" style="padding: 5px;border: 1px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="price-private-usr" href="#"><?= $prix_marchandise ?> $CA</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="rice-private-usr pull-right" href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" target='_blank' >Visualiser</a>
                            </div>
                          </div>
                          <div class="col-md-12" style="padding: 0px;padding-top: 5px;border: 0px dashed #ed290b;">
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-danger" href="?/p=usr&Tl=<?= $senha_crypted ?>&dEL=<?= base64_encode($id_crypt) ?>&id=4">Supprimer</a>
                            </div>
                            <div class="col-md-6" style="padding: 0px;">
                              <a class="btn btn-success pull-right" href="?/p=usr&?adr_annonce=<?= base64_encode($categories); ?>&?VTr=<?= base64_encode($id_annonce); ?>">Modifier</a>
                            </div>
                          </div>
                        </div> <?php
                      } 
                    }else {
                      echo "Aucun article trouvé.";
                    }
                    ?>
                  </div>
                  <p>
                    <a class="" href="" target="_blank">
                      .
                    </a>
                  </p>
                </div>
                <div class="tab-pane" id="tab_default_2">
                  <p>
                    Howdy, I'm in Tab 2.
                  </p>
                  <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                  </p>
                  <p>
                    <a class="btn btn-warning" href="http://j.mp/metronictheme" target="_blank">
                      Click for more features...
                    </a>
                  </p>
                </div>
                <div class="tab-pane" id="tab_default_3">
                  <p>
                    Howdy, I'm in Tab 3.
                  </p>
                  <p>
                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                  </p>
                  <p>
                    <a class="btn btn-info" href="http://j.mp/metronictheme" target="_blank">
                      Learn more...
                    </a>
                  </p>
                </div>
                <div class="tab-pane" id="tab_default_4">
                  <p>
                    Howdy, I'm in Tab 4.
                  </p>
                  <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                  </p>
                  <p>
                    <a class="btn btn-warning" href="http://j.mp/metronictheme" target="_blank">
                      Click for more features...
                    </a>
                  </p>
                </div>

                <div class="tab-pane" id="tab_default_5">
                  <div class="row" style="margin: 20px;">
                      <div class="col-xs-12 col-sm-12 col-md-12 well well-sm" style="background-color: #fff;">
                        <legend><a href="#"></a> Editer mon profile</legend>
                        <form action="#" method="post" class="form" role="form">
                        <div id="results_inscription"></div>
                        <label style="font-size: 11px;font-weight: 300;color: #575858;padding-bottom: 20px;">Les renseignements fournis dans le profil seront utilisés pour <br>vos annonces. <b>Sendas</b> peut également les utiliser pour vous contacter, au besoin.</label>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre nom</b><span class="obligatoire">*</span></label>
                                <input class="form-control" name="firstname" id="firstname" placeholder="Nom" type="text"
                                     autofocus value="<?= $_SESSION['G47R-FST'] ?>" />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;;"><b>Votre prénom</b><span class="obligatoire">*</span></label>
                                <input class="form-control" name="lastname" id="lastname" placeholder="Prénom" type="text" value="<?= $_SESSION['G47R-LST'] ?>"  />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre email</b></label>
                                <input class="form-control" name="youremail" id="youremail" placeholder="Votre Email" type="email" value="<?= $result_check['mailAdr'] ?>" />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre numéro de tépéphone</b></label>
                                <input class="form-control" name="yourephone" id="yourephone" placeholder="Votre num. de téléphone" type="text" value="<?= $result_check['telefone'] ?>" />
                            </div>
                        </div>
                        <br>
                        <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre code postal ou adresse</b></label>
                        <input class="form-control" name="youraddress" id="youraddress" placeholder="Votre code postal ou adresse" type="text" value="<?= $result_check['addressUsre'] ?>" />
                        <br>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #063ea6;padding-top: 15px;"><a href="#tab_default_6" data-toggle="tab">Modifier le mot de passe ?</a></label>
                                <br>
                                <label style="font-size: 11px;font-weight: 300;color: #063ea6;padding-top: 5px;">* * * * * * * * * * * * *</label>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                 
                            </div>
                        </div>
                        
                        <br />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="SubmitFormDataModifier()">
                            Mettre à jour</button>
                        </form>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="tab_default_6">
                  <div class="row" style="margin: 20px;">
                      <div class="col-xs-12 col-sm-12 col-md-12 well well-sm" style="background-color: #fff;">
                        <legend><a href="#"></a> Editer mon profile</legend>
                        <form action="#" method="post" class="form" role="form">
                        <div id="results_inscription"></div>
                        <label style="font-size: 11px;font-weight: 300;color: #575858;padding-bottom: 20px;">Les renseignements fournis dans le profil seront utilisés pour <br>vos annonces. <b>Sendas</b> peut également les utiliser pour vous contacter, au besoin.</label>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Veuiller saisir votre actuel mot de passe</b></label>
                                <input class="form-control" name="firstname" id="firstname" placeholder="Mot de passe actuel" type="text"
                                     autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;;"><b>Nouveau mot de passe</b></label>
                                <input class="form-control" name="lastname" id="lastname" placeholder="Nouveau mot de passe" type="text"  />
                            </div>
                        </div>
                        <br>                        
                        
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Ressaisissez le nouveau mot de passe</b></label>
                                <input class="form-control" name="lastname" id="lastname" placeholder="Confirmer votre mot de passe" type="text"  />
                            </div>
                        </div>
                        
                        <br />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="SubmitFormDataModifierMdp()">
                            Envoyer</button>
                        </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>
    <!-- ./Tabs -->
  </div>
  <div class="col-md-3 option-ajouter" style="padding-top: 0px;padding-left: 30px;">
    <?php include_once'app/views/box_2_publicite.php'; ?>
  </div>
</div>

