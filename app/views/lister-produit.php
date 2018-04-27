<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
?>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css_" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/lister-produit.css">
<!-- LIST PRODUCT -->
<div class="body-artificiel">
<div class="container-fluid">
     <div class="separateur-up"></div>
</div>
<style type="text/css">
     #menu-top2 {
         padding-top: 5px;
         padding-bottom: 0px;
         display: ;
     }
</style>
<div class="container-fluid">          
     <div class="row">
          <div class="list-filtre col-md-3 col-sm-12">                    
               <div class="head-filtre col-md-12 col-sm-12" style="padding: 0px;">
                    <h4> Annonces correspondantes <small>(20 092)</small> </h4>
               </div>
               <div class="filtre-categories col-md-12 col-sm-12">
                    <h4><small style="font-size: 14px;"><i class="fa fa-bars" style="margin-right: 10px;"></i> Catégorie:</small> </h4>
                    <h4 class="tous-annonce"><small ><a href="#" style="font-size: 14px;">Toutes les catégories</a></small></h4>
                    <ul class="list-inline pull-left ul_top1">
                         <ul class="ul-categories">
                              <li><a href="#">Appartements et condos à louer</a></li>
                              <li><a href="#">Maisons à louer</a></li>
                              <li><a href="#">Chambres à louer et colocs</a></li>    
                              <li><a href="#">Locations temporaires</a></li>
                              <li><a href="#">Espaces commerciaux et bureaux à louers</a></li>
                              <li><a href="#">Entreposage et stationnement à louer</a></li>
                              <li><a href="#">Maisons à vendre</a></li>
                              <li><a href="#">Condos à vendre</a></li>
                              <li><a href="#">Terrains à vendre</a></li>
                              <li><a href="#">Services immobiliers</a></li>
                              <li><a href="#">Autre</a></li>
                         </ul>
                    </ul>
               </div>
               <hr>
               <div class="filtre-categories col-md-12 col-sm-12" style="border-top: 1px solid #e5e5e5;">
                    <h4><small style="font-size: 15px;"><i class="fa fa-bars" style="margin-right: 10px;"></i> Lieu de recherche:</small> </h4>
                    <h4 class="tous-annonce"><small ><a href="#" style="font-size: 14px;">La ville et province</a></small></h4>
                    <ul class="list-inline pull-left ul_top1">
                         <ul class="ul-categories">
                              <li><a href="#">Quebec</a></li>
                              <li><a href="#">Montréal</a></li>
                              <li><a href="#">Ville de Montréal (2 458)</a></li> 
                         </ul>
                    </ul>
               </div>

               <div class="head-filtre col-md-12 col-sm-12" style="padding: 0px;border-top: 1px solid #e5e5e5;">
                    <!-- <h4> Annonces correspondantes <small>(20 092)</small> </h4> -->
                    <h4 style="border: 0px;padding-bottom: 0px;"><small ><a href="#" style="font-size: 14px;">Prix: </a></small></h4>
                    <div class="input-group" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" placeholder="Min"/>
                        <span class="input-group-addon">-</span>
                        <input type="text" class="form-control" placeholder="Max"/>
                    </div>
               </div>

               <div class="filtre-categories col-md-12 col-sm-12" style="border-top: 1px solid #e5e5e5;padding: 0px;">
                    <h4><small style="font-size: 15px;"><i class="fa fa-bars" style="margin-right: 10px;"></i> Type d'offres:</small> </h4>
                    <h4 class="tous-annonce"><small ><a href="#" style="font-size: 14px;">Tous les types</a></small></h4>
                    <ul class="list-inline pull-left ul_top1">
                         <ul class="ul-categories">
                              <li><a href="#">Offres (18 259)</a></li>
                              <li><a href="#">Recherchés (1 789)</a></li>
                         </ul>
                    </ul>
               </div>

               <div class="filtre-categories col-md-12 col-sm-12" style="border-top: 1px solid #e5e5e5;padding: 0px;">
                    <h4><small style="font-size: 15px;"><i class="fa fa-bars" style="margin-right: 10px;"></i> Informations supplémentaires::</small> </h4>
                    <h4 class="tous-annonce"><small ><a href="#" style="font-size: 14px;">Toutes les annonces</a></small></h4>
                    <ul class="list-inline pull-left ul_top1">
                         <ul class="ul-categories">
                              <li><a href="#">Annonces avec images</a></li>
                              <li><a href="#">Annonces sans images</a></li>
                         </ul>
                    </ul>
               </div>

          </div>



          <div class="list-produits col-md-9 col-sm-12"> 
               <div class="col-sm-12 pull-right" style="padding: ;">
                    <div class="head-produits col-md-12 col-sm-12" style="padding: ;">
                         <h4 class="pull-left">  Affichage 1 - 20 sur 20 092 annonces </h4>
                         <h4 class="pull-right">  <small>Affichage 1 - 20 sur 20 092</small> </h4>
                    </div>
                    <div class="col-md-12" style="padding: 0px;">
                         <!-- Get ListData -->
                         <?php 
                              $FS = base64_decode($_GET['?FS']);
                              if ($FS == '98722articles_annoncesGSKT') {
                                   $title = "Touts les annonce |  Senda.ca";
                                   include_once'app/controler/getListData.php';

                              }elseif ($FS == '98722articles_annonces_autoGSK') {
                                   $title = "Annonces  Auto et véhicule |  Senda.ca";
                                   include_once'app/controler/getListDataAuto.php';

                              }elseif ($FS == '98722articles_annonces_immobilierGSKT') {
                                   $title = "Annonces immobilier |  Senda.ca";
                                   include_once'app/controler/getListDataImmobilier.php';

                              }elseif ($FS == '98722articles_annonces_sercicesGSK') {
                                   $title = "Annonces Services |  Senda.ca";
                                   include_once'app/controler/getListDataSercices.php';
                              }else {

                              }
                         ?>
                    </div>                    
               </div>
          </div>
     </div>
</div>
<br>
</div>