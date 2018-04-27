<?php
  $categoriy = $_GET['?catgory'];
  $sbt = $_GET['?sbt'];

  $categorie = base64_decode($_GET['?catgory']);
  $sbt = base64_decode($_GET['?sbt']);
  //echo $categorie."<br>";
  //echo $sbt."<br>";
  if ($categorie == "") {
    # code... ?>
    <style type="text/css">
      #menu-top1 {
        background-color: #6f1010;
        /*background-image: url('../images/sep-3.png');*/
      }
    </style>
    <link rel="stylesheet" type="text/css" href="css/publier-annonce.css">
    <div class="container-fluid" style="padding: 0px;">
         <a href="#"><div class="separateur-up"></div></a>
    </div>
    <div class="container-fluid" style="background-color: ;">
        <div class="col-md-3 option-ajouter" style="padding: 12px;">
          <div class="col-md-12" style="background-color: #fff;padding: 0px;">
            <div class="col-md-6" style="border: 0px dashed #e72809;border-right: 0px dashed #e72809;background-color: #;">
              <label style="font-size: 11px;font-weight: 300;color: #e72809;margin-top: 0px;padding: 20px;">Super <b>PROMOTION </b></label>
            </div>
            <div class="col-md-6" style="border: 0px dashed #e72809;border-bottom: 0px dashed #e72809;background-color: #;">
              <a href="#">
                <label style="font-size: 11px;font-weight: 300;color: #e72809;margin-top: 0px;padding: 20px;"> -55% de <b> RABAIS </b></label>
              </a>              
            </div>

            <div class="col-md-12" style="border: 0px dashed #ccc;padding: 0px;display: none;">
              <a href="#">
                <img class="img-responsive" src="images/HTB1Ki3tffal9eJjSZFz761ITVXaj.png">
              </a>
            </div>
            <div class="col-md-12" style="border: 0px dashed #ccc;padding: 0px;">
              <a href="#">
                <img class="img-responsive" src="images/HTB1x52clkfb_uJjSsrbq6z6bVXam.jpg">
              </a>
            </div>

          </div>
        </div>

        <div class="col-md-9 corps-ajouter">
          <form id="form_publierAnnonce" name="form_publierAnnonce" method="post" enctype="multipart/form-data">
            <div class="tab-content col-md-12" id="tab_geral">
                <div id="results_publierAnnonce"></div>
                <div class="tab-pane_ active" id="tab_a">
                    <h4><small> 12 </small> Choix du catégorie </h4>
                    <div class="col-md-12" style="margin-bottom: 30px;">
                      <h3>
                          <span>Catégorie : </span>
                          <?php echo base64_decode($_GET['?catgory']).' > '.base64_decode($_GET['?sbt']); ?>
                          <div class="input-group" style="display: none;">
                              <span class="input-group-addon beautiful">
                              </span>
                              <input type="text" class="form-control" disabled="disabled" style="display: none;" id="categorie" value="<?php echo base64_decode($_GET['?catgory']).' > '.base64_decode($_GET['?sbt']); ?>">
                          </div>                    
                          <label style="font-size: 11px;font-weight: 300;color: #020202;margin-top: 10px;"><b>Choisir la catégorie </b></label>
                      </h3>
                      <?php #if(!isset($categoriy)){include_once'app/views/categoriy.php';} 
                        include_once'app/views/categoriy.php';                    
                      ?>
                    </div>                    
                </div>                      
            </div>            
          </form>
        </div>

    </div><!-- end of container --><?php
  }
  elseif (($categorie == "Autos et véhicules" && $sbt == "Autos et camions") || ($categorie == "Autos et véhicules" && $sbt == "Voitures d'époque")) {
    # code...
    include_once'app/views/publier-auto-annonce.php';
    //break;
  }
  elseif (($categorie == "Immobilier")) {
    # code...
    include_once'app/views/publier-immobilier-annonce.php';
    //break;
  }
  elseif (($categorie == "Services")) {
    # code...
    include_once'app/views/publier-services-annonce.php';
    //break;
  }
  else {
    include_once'app/views/publier-objects-annonce.php';
    //break;
  }
?>


