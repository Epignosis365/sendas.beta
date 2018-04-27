<!-- MENU top 1 -->
<div id="menu-top1" style="display: ;">
     <div class="container-fluid" style="background-color: #;margin-right: 40px;padding-top: 7px;">
          <div class="row">
               <ul class="list-inline pull-right ul_top1">
                                        
                    <li class="list-inline-item pull-left">
                         
                    </li>

                    <li class="list-inline-item">
                         <div class="dropdown">
                              <a class="btn btn btnPremium">
                                   <!--<img class="img-responsive" src="images/icons/premium-1sendas.png" style="width: 30px;position: relative;float: left;margin-right: 2px;">-->
                                   <label style="margin-top: ;"><?= 'Store Place' ?></label>
                                   <i class="fa fa-caret-down" aria-hidden="true" style="color: #020202;margin-left: 15px;"></i>
                              </a>

                              <div class="dropdown-content">
                                   <a class="btn btn btnPremium" style="background-color: #FFF;">
                                        <img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;">
                                        <label class="btnTextPremium"><?= 'Store Premium' ?></label>
                                   </a>
                                  <a href="?/p=store" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Mon espace Store</a>
                                   <a href="?/p=public-annonce" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Publier dans e-shop</a>
                                   <br>
                                   <a href="#" class="" style="font-size: 0.9em;font-family: Ubuntu;">
                                        <i class="fa fa-question-circle-o"></i> Centre d’aide</a>
                                   <a href="app/controler/log_out.php" class="btn btn-success links-favoris" style="color: #FFF;">
                                        Déconnecter
                                   </a>
                              </div>
                         </div>
                    </li>

                    <li class="list-inline-item" style="display: none;">
                         <div class="dropdown">
                              <a class="btn btn btnPremium">
                                   <img class="img-responsive" src="images/icons/premium-1sendas.png" style="width: 30px;position: relative;float: left;margin-right: 2px;">
                                   <label style="margin-top: ;"><?= 'Experimentez Premium' ?></label>
                              </a>

                              <div class="dropdown-content">
                                   <a class="btn btn btnPremium" style="background-color: #FFF;">
                                        <img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;">
                                        <label class="btnTextPremium"><?= 'Experimentez à 0.00$CA' ?></label>
                                   </a>
                                  <a href="?/p=usr" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Modifier mon e-shop</a>
                                   <a href="?/p=public-annonce" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Publier dans e-shop</a>
                                   <br>
                                   <a href="#" class="" style="font-size: 0.9em;font-family: Ubuntu;">
                                        <i class="fa fa-question-circle-o"></i> Centre d’aide</a>
                                   <a href="app/controler/log_out.php" class="btn btn-success links-favoris" style="color: #FFF;">
                                        Déconnecter
                                   </a>
                              </div>
                         </div>
                    </li>

                    <?php
                    if (!isset($_SESSION['G47R-CRY']) || empty($_SESSION['G47R-CRY'])) { ?>
                    <li class="list-inline-item">
                         <a href="inscription.php?/=<?= base64_encode(sha1('DF58'))?>" class="itim-top">
                              <i class="fa fa-users"></i> 
                         <b>S'inscrire</b></a>
                    </li>
                    <li class="list-inline-item">
                         <a href="login.php?/=<?= base64_encode('DYPDKKFJGB7e0dg547fg57fg75?ZL5851038')?>" class="itim-top">
                              <i class="fa fa-user"></i> 
                         <b>Ouvrir une session</b></a>
                    </li>
                    <?php
                    }else { ?>
                    <li class="list-inline-item">
                         <div class="dropdown">
                              <a class="btn btn btnNomUser">
                                   <?= $_SESSION['G47R-FST'].' '.$_SESSION['G47R-LST'] ?>
                                   <i class="fa fa-caret-down" aria-hidden="true" style="color: #FFF;margin-left: 15px;"></i>
                              </a>
                              <div class="dropdown-content">
                                   <a class="btn btn btnPremium" style="background-color: #FFF;">
                                        <img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;">
                                        <label class="btnTextPremium"><?= $_SESSION['G47R-FST'].' '.$_SESSION['G47R-LST'] ?></label>
                                   </a>
                                   <!--
                                   <div class="content-favicon">
                                        <img class="img-responsive" src="images/HTB1Tad1pcjI8KJjSspp760byVXaF.png">
                                  </div>
                                   -->
                                   <h2 class="usr-nom-profil-top1"> 
                                  </h2>
                                  <a href="?/p=usr" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Modifier mon profil</a>
                                   <a href="?/p=public-annonce" class="btn btn-default" style="font-size: .9em;padding: 5px 15px;margin-top: 10px;margin-right: 20px;width: 100%;">Publier annonce</a>
                                   <a href="#"><?= $_SESSION['G47R-EM'] ?></a>

                                   <a href="app/controler/log_out.php" class="btn btn-success links-favoris" style="color: #FFF;">
                                        Déconnecter
                                   </a>
                              </div>
                         </div>
                    </li>
                    <!--
                    <a href="app/controler/log_out.php" class="links-favoris pull-right" style="margin-top: -10px;">
                                   <small style="color: #10a23d;">Déconnecter</small>
                    </a>-->
                    <?php
                    }
                    ?>
               </ul>
          </div>
     </div>
</div>


<!-- MENU top 1 -->
<div id="menu-top2" style=";overflow: hidden;">
     <div class="container-fluid" style="background-color: #;">
          <div class="row_" style="background-color: #;">

               <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
               <div id="flipkart-navbar">
                    <div class="container-fluid container2-menu" style="padding-top: 5px;background-color: #;">
                       
                         <div class="row row2" style="background-color: #;" >
                              <div class="col-sm-2" style="background-color: #;padding-top: 3px;padding-right: 5px;">
                                   <h2 style="margin:0px;">
                                        <span class="smallnav menu" >
                                             <a href="?/p=fr-gn">
                                                  <img src="images/logo.png" style="width: 70px;">
                                             </a>                                             
                                        </span>
                                   </h2>
                                   <h1 style="margin: 0px;padding: 0px;">
                                        <span class="largenav" nclick="openNav()">
                                             <a href="?/p=fr-gn" class="pull-left">
                                                  <img  class="img-responsive img_logo" src="images/logo-red.png">
                                             </a>
                                             <a href="javascript:toggleDiv('myContentMenu');" class="pull-right" onclick="openNavMenu()" style="font-size: 0.5em;padding: 4px 10px 4px 6px;
                                             border-radius: 3px;border: 1px solid #CCC;margin-top: 8px;"> ☰ <i class="fa fa-caret-down" aria-hidden="true" style="font-size: 0.5em;position: absolute;margin-top: 7px;"></i></a>
                                        </span>                                        
                                   </h1>
                              </div>
                              <div class="col-md" style="padding: 0px;margin-top: 15px;background-color: #CCC;display: none;">
                                   <i class="fa fa-bars" style="color: #686868;font-size: 2.0em;padding-top: 7px;"></i>
                              </div>

<div id="myContentMenu" style="">
    <div class="col-md-12" style="padding: 0px;">
         <h2 class="h2-menu-float">
              Categories
              <a href="javascript:toggleDiv('myContentMenu');"><small class="pull-right"> x </small></a>
         </h2>
         <div class="col-md-12" style="padding: 0px;">
               <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                         <div class="list-group">
                              <a href="#" class="list-group-item active text-center">
                                   Acheter et vendre 
                              </a>
                              <a href="#" class="list-group-item text-center">
                                   Autos et véhicules
                              </a>
                              <a href="#" class="list-group-item text-center">
                                   Immobilier
                              </a>
                              <a href="#" class="list-group-item text-center">
                                   Services
                              </a>
                              <!--
                              <a href="#" class="list-group-item text-center">
                                   Autre
                              </a>
                              -->
                         </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                    <!-- flight section -->
                         <div class="bhoechie-tab-content active">
                              <ul class="row ul-right-menu" style="width: 100%;background-color: #;">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Abies (hommes et femmes)') ?>">Abies (hommes et femmes)</a></li>
                                             <li></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Appareils eléctroniques') ?>">Appareils eléctroniques</a></li>
                                             <li></li>
                                             
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Appareils photo et caméras') ?>">Appareils photo et caméras</a></li> 
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Art et objets de collection') ?>">Art et objets de collection</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles pour bébés') ?>">Articles pour bébés</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles pour bébés') ?>">Articles pour bébés</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles de sport et exercice') ?>">Articles de sport et exercice</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>                                             
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Audio') ?>">Audio</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Bijoux et montres toolbar') ?>">Bijoux et montres toolbar</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Commercial et industriel') ?>">Commercial et industriel</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Équipement électronique') ?>">Équipement électronique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Instruments de musique') ?>">Instruments de musique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Jouets et jeux vidéos') ?>">Jouets et jeux vidéos</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Téléphones') ?>">Téléphones</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Livres') ?>">Livres</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Matériaux pour la rénovation') ?>">Matériaux pour la rénovation</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Meubles') ?>">Meubles</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Ordinateurs') ?>">Ordinateurs</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Outils') ?>">Outils</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Objets gratuits') ?>">Objets gratuits</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Sacs (hommes et femmes)') ?>">Sacs (hommes et femmes)</a></li>          
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                         <!-- train section -->
                         <div class="bhoechie-tab-content">
                              <ul class="row ul-right-menu" style="width: 100%;background-color: #;">
                                   <li class="col-sm-4">
                                        <ul>                                         
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Autos et camions') ?>">Autos et camions</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode("Voitures d'époque") ?>">Voitures d'époque</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Pièces automobiles et pneus') ?>">Pièces automobiles et pneus</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Services automobiles') ?>">Services automobiles</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Motos') ?>">Motos</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('VTT et motoneiges') ?>">VTT et motoneiges</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Bateaux et véhicules marins') ?>">Bateaux et véhicules marins</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('VR, caravanes et remorques') ?>">VR, caravanes et remorques</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Équipement lourd') ?>">Équipement lourd</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Autre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#"></a></li>                                                            
                                        </ul>
                                   </li>
                              </ul>
                         </div>
         
                         <!-- hotel search -->
                         <div class="bhoechie-tab-content">
                              <ul class="row ul-right-menu" style="width: 100%;background-color: #;">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Appartements et condos à louer') ?>">Appartements et condos à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Maisons à louer') ?>">Maisons à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Chambres à louer et colocs') ?>">Chambres à louer et colocs</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Locations temporaires') ?>">Locations temporaires</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Espaces commerciaux et bureaux à louers') ?>">Espaces commerciaux et bureaux à louers</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Entreposage et stationnement à louer') ?>">Entreposage et stationnement à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Maisons à vendre') ?>">Maisons à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Condos à vendre') ?>">Condos à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Terrains à vendre') ?>">Terrains à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Services immobiliers') ?>">Services immobiliers</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('CAutre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#"></a></li>                                                            
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                         <div class="bhoechie-tab-content">
                              <ul class="row ul-right-menu" style="width: 100%;background-color: #;">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Cours de musique') ?>">Cours de musique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Divertissement') ?>">Divertissement</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Déménagement et entreposage') ?>">Déménagement et entreposage</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Entraîneur personnel') ?>">Entraîneur personnel</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Services financiers et juridiques') ?>">Services financiers et juridiques</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Services de gardiennage') ?>">Services de gardiennage</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Main-d’œuvre') ?>">Main-d’œuvre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Mariage') ?>">Mariage</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Ménage et entretien') ?>">Ménage et entretien</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Nourriture et traiteur') ?>">Nourriture et traiteur</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Photographie et vidéo') ?>">Photographie et vidéo</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Santé et beauté') ?>">Santé et beauté</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Tutorat et langues') ?>">Tutorat et langues</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Voyages et vacances') ?>">Voyages et vacances</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Autre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                         <!--
                         <div class="bhoechie-tab-content">
                              <center>
                                   <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                   <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                   <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                              </center>
                         </div>
                         -->
                 </div>
               </div>
          </div>
    </div>
</div>
                              <div class="flipkart-navbar-search smallsearch col-sm-5 col-xs-11" style="margin-top: 10px;">
                                   <div class="row">                                        
                                        <input class="flipkart-navbar-input auto col-xs-7" type="" name='titre_annonce' value='' placeholder="Search for Products, Brands and more" name="" style="color: #6d6d6d;">
                                        <select name="country" id="selec-search" class="col-xs-3 btn btn-primary text-left" onchange="yesnoCheck_(this);">
                                             <option value="DFT">Categorie </option>
                                             <option value="AB"> Achats et ventes </option>
                                             <option value="BC"> Autos et véhicules </option>
                                             <option value="MB"> Immobilier </option>
                                             <option value="NB"> Services </option>
                                        </select>
                                        <button class="flipkart-navbar-button col-xs-2">
                                            <svg width="15px" height="15px">
                                                <i class="fa fa-search"></i>
                                            </svg>
                                        </button>
                                   </div>
                                   <?php //include_once'app/views/menu-drop-down.php'; ?>
                              </div>
                              <div class="col-md-5 col-sm-5 col-xs-12 " style="background-color: #;padding: 0px;margin-top: 10px;">
                                   <?php include_once'app/views/select-province-ville.php'; ?>
                              </div> 
                         </div>
                    </div>
               </div>
               <div id="mySidenav" class="sidenav">
                    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
                       <span class="sidenav-heading">Catégories</span>
                       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    </div>
                    <ul class="nav navbar-nav" style="padding: 10px;">
                         <li class="dropdown dropdown-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu_itemLine">Acheter et vendre <b class="caret"></b></a>
                              
                              <ul class="dropdown-menu dropdown-menu-large row">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Abies (hommes et femmes)') ?>">Abies (hommes et femmes)</a></li>
                                             <li></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Appareils eléctroniques') ?>">Appareils eléctroniques</a></li>
                                             <li></li>
                                             
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Appareils photo et caméras') ?>">Appareils photo et caméras</a></li> 
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Art et objets de collection') ?>">Art et objets de collection</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles pour bébés') ?>">Articles pour bébés</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles pour bébés') ?>">Articles pour bébés</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Articles de sport et exercice') ?>">Articles de sport et exercice</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Audio') ?>">Audio</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Bijoux et montres toolbar') ?>">Bijoux et montres toolbar</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Commercial et industriel') ?>">Commercial et industriel</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Équipement électronique') ?>">Équipement électronique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Instruments de musique') ?>">Instruments de musique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Jouets et jeux vidéos') ?>">Jouets et jeux vidéos</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Livres') ?>">Livres</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Matériaux pour la rénovation') ?>">Matériaux pour la rénovation</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Meubles') ?>">Meubles</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Ordinateurs') ?>">Ordinateurs</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Outils') ?>">Outils</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Objets gratuits') ?>">Objets gratuits</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Sacs (hommes et femmes)') ?>">Sacs (hommes et femmes)</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Acheter et vendre') ?>&?tsd=<?= base64_encode('Téléphones') ?>">Téléphones</a></li>                                           
                                        </ul>
                                   </li>
                              </ul>
                              
                         </li>

                         <li class="dropdown dropdown-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu_itemLine">Autos et véhicules <b class="caret"></b></a>
                              
                              <ul class="dropdown-menu dropdown-menu-large row">
                                   <li class="col-sm-4">
                                        <ul>                                         
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Autos et camions') ?>">Autos et camions</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode("Voitures d'époque") ?>">Voitures d'époque</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Pièces automobiles et pneus') ?>">Pièces automobiles et pneus</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Services automobiles') ?>">Services automobiles</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Motos') ?>">Motos</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('VTT et motoneiges') ?>">VTT et motoneiges</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Bateaux et véhicules marins') ?>">Bateaux et véhicules marins</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('VR, caravanes et remorques') ?>">VR, caravanes et remorques</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Équipement lourd') ?>">Équipement lourd</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Autos et véhicules') ?>&?tsd=<?= base64_encode('Autre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#"></a></li>                                                            
                                        </ul>
                                   </li>
                              </ul>
                              
                         </li>

                         <li class="dropdown dropdown-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu_itemLine">Immobilier <b class="caret"></b></a>
                              
                              <ul class="dropdown-menu dropdown-menu-large row">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Appartements et condos à louer') ?>">Appartements et condos à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Maisons à louer') ?>">Maisons à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Chambres à louer et colocs') ?>">Chambres à louer et colocs</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Locations temporaires') ?>">Locations temporaires</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Espaces commerciaux et bureaux à louers') ?>">Espaces commerciaux et bureaux à louers</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Entreposage et stationnement à louer') ?>">Entreposage et stationnement à louer</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Maisons à vendre') ?>">Maisons à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Condos à vendre') ?>">Condos à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Terrains à vendre') ?>">Terrains à vendre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('Services immobiliers') ?>">Services immobiliers</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Immobilier') ?>&?tsd=<?= base64_encode('CAutre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#"></a></li>                                                            
                                        </ul>
                                   </li>
                              </ul>
                              
                         </li>

                         <li class="dropdown dropdown-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu_itemLine">Services <b class="caret"></b></a>
                              
                              <ul class="dropdown-menu dropdown-menu-large row">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Toutes les catégories') ?>"><strong>Toutes les catégories</strong></a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Cours de musique') ?>">Cours de musique</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Divertissement') ?>">Divertissement</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Déménagement et entreposage') ?>">Déménagement et entreposage</a></li>   
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Entraîneur personnel') ?>">Entraîneur personnel</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Services financiers et juridiques') ?>">Services financiers et juridiques</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Services de gardiennage') ?>">Services de gardiennage</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Main-d’œuvre') ?>">Main-d’œuvre</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Mariage') ?>">Mariage</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Ménage et entretien') ?>">Ménage et entretien</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Nourriture et traiteur') ?>">Nourriture et traiteur</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Photographie et vidéo') ?>">Photographie et vidéo</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Santé et beauté') ?>">Santé et beauté</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Tutorat et langues') ?>">Tutorat et langues</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Voyages et vacances') ?>">Voyages et vacances</a></li>
                                             <li><a href="?/p=categoria-group-annonce&?catgory=<?= base64_encode('Services') ?>&?sbt=<?= base64_encode('Autre') ?>">Autre</a></li>
                                        </ul>
                                   </li>
                              </ul>
                              
                         </li>
                         <!--
                         <li class="dropdown dropdown-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu_itemLine">Autre <b class="caret"></b></a>
                              
                              <ul class="dropdown-menu dropdown-menu-large row">
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#">Cours de musique</a></li>
                                             <li><a href="#">Divertissement</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#">Main-d’œuvre</a></li>
                                             <li><a href="#">Mariage</a></li>
                                        </ul>
                                   </li>
                                   <li class="col-sm-4">
                                        <ul>
                                             <li><a href="#">Voyages et vacances</a></li>
                                             <li><a href="#">Autre</a></li>
                                        </ul>
                                   </li>
                              </ul>
                              
                         </li>
                         -->

                    </ul>
               </div>
               
          </div>
     </div>
</div>
<!-- MENU -->
<script type="text/javascript">
     $(function() {
         
         //autocomplete
         $(".auto").autocomplete({
             source: "Search.php",
             minLength: 1
         });                

     });
</script>