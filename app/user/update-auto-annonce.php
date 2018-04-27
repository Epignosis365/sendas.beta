<style type="text/css">
  #menu-top1 {
    background-color: #e60005_;
    /*background-image: url('../images/sep-3.png');*/
  }
</style>
<?php
  $categoriy = $_GET['?catgory'];
  $VTr = base64_decode($_GET['?VTr']);
  $SQLreq = 'SELECT * FROM make ORDER BY id ASC';
  $sqlMAKE = $bdd->prepare($SQLreq);
  $sqlMAKE->execute(array()) or die(print_r($sqlMAKE->errorInfo()));
  $result_make = $sqlMAKE->fetchAll();
  $count_check  = $sqlMAKE->rowCount();

  $dataAll_SQL_1 = 'SELECT * FROM `articles_annonces_autos` WHERE `id_annonce` = ?';
  $dataAll_SQLstm_1 = $bdd->prepare($dataAll_SQL_1);
  $dataAll_SQLstm_1->execute(array($VTr)) or die(print_r($dataAll_SQLstm_1->errorInfo()));
  $resultAuto_data = $dataAll_SQLstm_1->fetch();
  $count_dataAll_1  = $dataAll_SQLstm_1->rowCount();

  $id_annonceur      = $resultAuto_data['id_annonceur'];
  $titleBD           = $resultAuto_data['titre_annonce'];
  $categories        = $resultAuto_data['categories'];
  $adresse_annonceur = $resultAuto_data['adresse_annonceur'];
  $description       = $resultAuto_data['description'];
  $type_annonce      = $resultAuto_data['type_annonce'];

  $prix_marchandise  = $resultAuto_data['prix_marchandise'];
  $type_annonceur    = $resultAuto_data['type_annonceur'];
  
  $marck            = $resultAuto_data['marck'];
  $model            = $resultAuto_data['model'];
  $boiteDeVitesse   = $resultAuto_data['boiteDeVitesse'];
  $transmission        = $resultAuto_data['transmission'];
  $garniture           = $resultAuto_data['garniture'];
  $typeDeCarrosserie   = $resultAuto_data['typeDeCarrosserie'];
  $typeDeCarburant     = $resultAuto_data['typeDeCarburant'];
  $annee               = $resultAuto_data['annee'];
  $couleur             = $resultAuto_data['couleur'];
  $nbreDePortes        = $resultAuto_data['nbreDePortes'];
  $conditions          = $resultAuto_data['conditions'];
  $nombreDePlaces      = $resultAuto_data['nombreDePlaces'];
  $kilometre           = $resultAuto_data['kilometre'];
  $nouveauPrix         = $resultAuto_data['nouveauPrix'];
  $views               = $resultAuto_data['views'];

  $codePostal        = $resultAuto_data['codePostal'];
  $adress_marchanise = $resultAuto_data['adress_marchanise'];
  $numero_telephone  = $resultAuto_data['numero_telephone'];
  $photos_array      = $resultAuto_data['photos_array'];
  $date_annoncee     = $resultAuto_data['date_annoncee'];
  $time_stamp        = $resultAuto_data['time_stamp'];

  $array_PHOTOS = explode(',', $photos_array);
  $photo_cover = array_shift(array_slice($array_PHOTOS, 0, 1));
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#change_category').click(function(){
      if($('.menu_PC').is(':hidden')){
        //alert('hiden');
        $('.menu_PC').slideDown('2000');   }
      else{
        $('.menu_PC').slideUp('2000');   }   
    });
  });
</script>
<script type="text/javascript">
  window.onload = function(){
        
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        var filesInput = document.getElementById("files");
        
        filesInput.addEventListener("change", function(event) {
            
            var files = event.target.files; //FileList object
            var output = document.getElementById("wrapper");
            
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                
                //Only pics
                if(!file.type.match('image'))
                  continue;
                
                var picReader = new FileReader();
                
                picReader.addEventListener("load",function(event){
                    
                    var picFile = event.target;
                    
                    var div = document.createElement("div");

                    
                    div.innerHTML = "<div class='box_2'><div class='imagePreview'><img class='img-responsive thumbnailMedia_' src='" + picFile.result + "'" + "title='" + picFile.name + "' /></div></div>";
                    
                    /*
                    div.innerHTML = "<img class='thumbnailMedia' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>";
                    */
                    
                    output.insertBefore(div,null);            
                
                });
                
                 //Read the image
                picReader.readAsDataURL(file);
            }                               
           
        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }
}
    
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>


<script type="text/javascript">
  function SubmitFormPublierAnnonce() {
      var titreAnnonce = $("#titreAnnonce").val();
      var descriptionAnnonce = $("#descriptionAnnonce").val();
      var prixProd = $('input[name="prixProd"]:checked').val();
      var marqueProduit = $("#marqueProduit").val();
      var villeVendeur = $("#villeVendeur").val();
      var typeAnnonce = $('input[name="typeAnnonce"]:checked').val();
      var TypdeVendeur = $('input[name="TypdeVendeur"]:checked').val();
      var codePostal = $("#codePostal").val();
      var adresseProduit = $("#adresseProduit").val();
      var numeroTelephone = $("#numeroTelephone").val();
      var adresseMail = $("#adresseMail").val();
      var chambres = $("#chambres").val();
      var salleDeBains = $("#salleDeBains").val();
      var sallons = $("#sallons").val();

      //var filesInput = document.getElementById("files");
      //var souvienMoi = document.getElementById("souvienMoi").checked;
      
      $.post("app/model/str-publier-auto-annonce.php", { titreAnnonce: titreAnnonce, descriptionAnnonce: descriptionAnnonce, prixProd: prixProd, marqueProduit: marqueProduit, villeVendeur: villeVendeur, typeAnnonce: typeAnnonce, TypdeVendeur: TypdeVendeur, codePostal: codePostal, adresseProduit: adresseProduit, numeroTelephone: numeroTelephone, adresseMail: adresseMail, chambres: chambres, salleDeBains: salleDeBains, sallons: sallons },
      function(data) {
        //SubmitFormDataFile();
        $('#results_publierAnnonce').html(data);
        $('#results_publierAnnonce_2').html(data);

      //$('#in-Sysform')[0].reset();
      });
  }
</script>
<script type="text/javascript">
  function SubmitFormDataFile() {
    var titreAnnonce = $("#titreAnnonce").val();
    var descriptionAnnonce = $("#descriptionAnnonce").val();
    var prixProd = $('input[name="prixProd"]:checked').val();
    var marqueProduit = $("#marqueProduit").val();
    var villeVendeur = $("#villeVendeur").val();
    var typeAnnonce = $('input[name="typeAnnonce"]:checked').val();
    var TypdeVendeur = $('input[name="TypdeVendeur"]:checked').val();
    var codePostal = $("#codePostal").val();
    var adresseProduit = $("#adresseProduit").val();
    var numeroTelephone = $("#numeroTelephone").val();
    var adresseMail = $("#adresseMail").val();
    var prixProduit = $("#prixProduit").val();
    
    var marck = $("#marck").val();
    var model = $("#model").val();
    var boiteVitesse = $("#boiteVitesse").val();
    var transmission = $("#transmission").val();
    var garniture = $("#garniture").val();
    var couleur = $("#couleur").val();
    var typeDeCarrosserie = $("#typeDeCarrosserie").val();
    var typeDeCarburant = $("#typeDeCarburant").val();
    var annee = $("#annee").val();
    var nbreDePortes = $("#nbreDePortes").val();
    var conditions = $("#conditions").val();
    var nombreDePlaces = $("#nombreDePlaces").val();
    var kilometre = $("#kilometre").val();
    var categorie = $("#categorie").val();
    var id_secret = $("#id_secret").val();

    var formData = new FormData(document.querySelector("form"));
    var file = this.files[0];
    //var form = new FormData();
    formData.append('files', file);
    formData.append('titreAnnonce', $('#titreAnnonce').val());
    formData.append('descriptionAnnonce', $('#descriptionAnnonce').val());
    formData.append('marqueProduit', $('#marqueProduit').val());
    formData.append('villeVendeur', $('#villeVendeur').val());
    //formData.append('typeAnnonce', $('#typeAnnonce').val());
    //formData.append('TypdeVendeur',$('#TypdeVendeur').val());
    formData.append('codePostal', $('#codePostal').val());
    formData.append('adresseProduit', $('#adresseProduit').val());
    formData.append('numeroTelephone', $('#numeroTelephone').val());
    formData.append('adresseMail', $('#adresseMail').val());
    formData.append('prixProduit', $('#prixProduit').val());

    formData.append('marck', $('#marck').val());
    formData.append('model', $('#model').val());
    formData.append('boiteVitesse', $('#boiteVitesse').val());
    formData.append('transmission', $('#transmission').val());
    formData.append('garniture', $('#garniture').val());
    formData.append('couleur', $('#couleur').val());
    formData.append('typeDeCarrosserie', $('#typeDeCarrosserie').val());
    formData.append('typeDeCarburant', $('#typeDeCarburant').val());
    formData.append('annee', $('#annee').val());
    formData.append('nbreDePortes', $('#nbreDePortes').val());
    formData.append('conditions', $('#conditions').val());
    formData.append('nombreDePlaces', $('#nombreDePlaces').val());
    formData.append('kilometre', $('#kilometre').val());
    formData.append('categorie', $('#categorie').val());
    formData.append('id_secret', $('#id_secret').val());
    $.ajax({
        url: "app/model/str-update-auto-annonce.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(result){
          // do something
          //alert(result);
          $('#results_publierAnnonce').html(result);
          $('#results_publierAnnonce_2').html(result);
       }

    });
  }
</script>

<link rel="stylesheet" type="text/css" href="css/publier-annonce.css">
<div class="container-fluid" style="padding: 0px;">
     <a href="#"><div class="separateur-up-auto"></div></a>
</div>
<div class="container-fluid" style="background-color: #;">
    
    <div class="col-md-9 corps-ajouter">
      <form id="form_publierAnnonce" name="form_publierAnnonce" method="post" enctype="multipart/form-data">
        <div class="tab-content col-md-12" id="tab_geral">
            <div id="results_publierAnnonce"></div>
            <div class="tab-pane_ active" id="tab_a">
                <h4><small> 1 </small> Détails de l'annonce auto <small class="pull-right">Mise à jour auto et véhicules</small> </h4>
                <div class="col-md-12" style="margin-bottom: 30px;">
                  <h3 style="display: none;">
                      <span>Catégorie : </span>
                      <?php echo base64_decode($_GET['?catgory']).' > '.base64_decode($_GET['?sbt']); ?>
                      <div class="input-group" style="display: none;">
                          <span class="input-group-addon beautiful">
                          </span>
                          <input type="text" class="form-control" disabled="disabled" style="display: none;" id="categorie" value="<?php echo base64_decode($_GET['?catgory']).' > '.base64_decode($_GET['?sbt']); ?>">
                      </div>                    
                      <a href="#" id="change_category" style="color: #1275c8;">Choisir ou changer de catégorie</a>
                  </h3>
                  <?php #if(!isset($categoriy)){include_once'app/views/categoriy.php';} 
                    //include_once'app/views/categoriy.php';

                    if (base64_decode($_GET['?catgory']) == "Acheter et vendre") {
                      # code...
                      
                    }
                  ?>
                  <div class="col-md-6" style="padding: 0px;">

                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Le titre de votre annonce qui sera afficher</b>  (Prends soins qu'il soit claire et simple) </label>
                                <div class="input-group">
                                    <span class="input-group-addon beautiful">
                                    </span>
                                    <input type="text" class="form-control" id="titreAnnonce" value="<?= $titleBD ?>">
                                    <input type="text" name="id_secret" id="id_secret" style="display: none;" value="<?= $VTr ?>">
                                </div>
                          </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Description de l'annonce</b></label>
                              <div class="input-controls-container">
                                  <textarea class="form-control textarea-description" id="descriptionAnnonce"><?= $description ?></textarea>                                
                              </div>
                          </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Prix </b> (à donner, sur demande ou échange)</label>
                               <div class="input-group">
                                    <span class="input-group-addon beautiful">
                                      <input type="radio" name="prixProd" value="prixChiffre" checked="checked" onclick="document.getElementById('prixProduit').removeAttribute('disabled')">                                     
                                    </span>
                                    <input type="text" class="form-control" id="prixProduit" value="<?= $prix_marchandise ?>">
                                </div>
                                <div class="input-group" style="margin-left: 12px;">
                                    <label class="not-active label-typeAnnonce" style="margin-right: 10px;">
                                        <input type="radio" value="Gratuit" name="prixProd" onclick="document.getElementById('prixProduit').disabled = false; document.getElementById('prixProduit').disabled = true;"> Gratuit
                                    </label>
                                    <label class="not-active label-typeAnnonce" style="margin-right: 10px;">
                                        <input type="radio" value="Gur demande" name="prixProd"> Sur demande
                                    </label>
                                    <label class="not-active label-typeAnnonce" style="margin-right: 10px;">
                                        <input type="radio" value="Echange" name="prixProd"> Échange
                                    </label>
                                </div>
                          </div>
                      </div>
                    </fieldset>
                    

                  </div>
                  <div class="col-md-6" style="padding: 0px;">
                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre adresse ou simplement la ville.</b> Ceci donnera confiance à vos visiteurs  </label>
                                <div class="input-group">
                                    <span class="input-group-addon beautiful">                                      
                                    </span>
                                    <input type="text" class="form-control" id="villeVendeur" value="<?= $adresse_annonceur ?>">
                                </div>
                          </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                               <div class="input-group">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Type d'annonce </b>(Seléctionner le type d'annonce)</label>
                                  <div class="btn-group radio-group" style="margin-top: 10px;">
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Offre" name="typeAnnonce" <?php if($type_annonce=="Offre") echo "checked"; ?> > <b>Offre</b> - Vous offrez un objet à vendre </label>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Recherche" name="typeAnnonce" <?php if($type_annonce=="Recherche") echo "checked"; ?> > <b>Recherche</b> - Vous recherchez un objet  </label>
                                  </div>
                               </div>
                          </div>
                      </div>
                  </fieldset>
                  <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>À vendre par </b>(Seléctionner le type de vendeur)</label>
                               <div class="input-group" style="margin-left: 20px;">
                                  <div class="btn-group radio-group">
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Particulier" name="TypdeVendeur" checked="checked" <?php if($type_annonceur=="Particulier") echo "checked"; ?> > Particulier </label>
                                     <br>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Entreprise" name="TypdeVendeur" <?php if($type_annonceur=="Entreprise") echo "checked"; ?> > Entreprise </label>
                                  </div>
                               </div>
                          </div>
                      </div>
                  </fieldset>

                  </div>   
                  <div class="col-md-12" style="padding: 0px;">
                    <br>
                    <h4><small> 1.2 </small> Carractéristiques</h4>
                    <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>La marque</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="marck">
                                          <option>Sélectionner</option><?php
                                          foreach ($result_make as $value) { ?>     
                                            <option <?php if($marck==$value['title']) echo "selected"; ?> ><?= $value['title'] ?></option>" <?php
                                          }
                                          ?>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Le model</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <input type="text" class="form-control" id="model" value="<?= $model ?>">
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Boite de vitesse</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="boiteVitesse">
                                          <option>Sélectionner</option>
                                          <option <?php if($boiteDeVitesse=="Automatique") echo "selected"; ?>>Automatique</option>
                                          <option <?php if($boiteDeVitesse=="Manuel") echo "selected"; ?>>Manuel</option>
                                          <option <?php if($boiteDeVitesse=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Transmission</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="transmission">
                                          <option>Sélectionner</option>
                                          <option <?php if($transmission=="4 roues motrices (4x4)") echo "selected"; ?>>4 roues motrices (4x4)</option>
                                          <option <?php if($transmission=="4 x 4") echo "selected"; ?>>4 x 4</option>
                                          <option <?php if($transmission=="Roues motrices avant") echo "selected"; ?>>Roues motrices avant</option>
                                          <option <?php if($transmission=="Roues motices arrière") echo "selected"; ?>>Roues motices arrière</option>
                                          <option <?php if($transmission=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Garniture</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <input type="text" class="form-control" id="garniture" value="<?= $garniture ?>">
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Couleur</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="couleur">
                                          <option>Sélectionner</option>
                                          <option <?php if($couleur=="Argent") echo "selected"; ?>>Argent</option>
                                          <option <?php if($couleur=="Beige") echo "selected"; ?>>Beige</option>
                                          <option <?php if($couleur=="Blanc") echo "selected"; ?>>Blanc</option>
                                          <option <?php if($couleur=="Blanc cassé") echo "selected"; ?>>Blanc cassé</option>
                                          <option <?php if($couleur=="Bleu") echo "selected"; ?>>Bleu</option>
                                          <option <?php if($couleur=="Bordeaux") echo "selected"; ?>>Bordeaux</option>
                                          <option <?php if($couleur=="Brun") echo "selected"; ?>>Brun</option>
                                          <option <?php if($couleur=="Gris") echo "selected"; ?>>Gris</option>
                                          <option <?php if($couleur=="Havane") echo "selected"; ?>>Havane</option>
                                          <option <?php if($couleur=="Jaune") echo "selected"; ?>>Jaune</option>
                                          <option <?php if($couleur=="Noir") echo "selected"; ?>>Noir</option>
                                          <option <?php if($couleur=="Or") echo "selected"; ?>>Or</option>
                                          <option <?php if($couleur=="Orange") echo "selected"; ?>>Orange</option>
                                          <option <?php if($couleur=="Rose") echo "selected"; ?>>Rose</option>
                                          <option <?php if($couleur=="Rouge") echo "selected"; ?>>Rouge</option>
                                          <option <?php if($couleur=="Sarcelle") echo "selected"; ?>>Sarcelle</option>
                                          <option <?php if($couleur=="Vert") echo "selected"; ?>>Vert</option>
                                          <option <?php if($couleur=="Violet") echo "selected"; ?>>Violet</option>
                                          <option <?php if($couleur=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Type de carrosserie</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="typeDeCarrosserie">
                                          <option>Sélectionner</option>
                                          <option <?php if($typeDeCarrosserie=="Berline") echo "selected"; ?>>Berline</option>
                                          <option  <?php if($typeDeCarrosserie=="Bicorps") echo "selected"; ?>>Bicorps</option>
                                          <option  <?php if($typeDeCarrosserie=="Cabriolet") echo "selected"; ?>>Cabriolet</option>
                                          <option  <?php if($typeDeCarrosserie=="Camionnette") echo "selected"; ?>>Camionnette</option>
                                          <option  <?php if($typeDeCarrosserie=="Coupé (2 portes)") echo "selected"; ?>>Coupé (2 portes)</option>
                                          <option  <?php if($typeDeCarrosserie=="Familiale") echo "selected"; ?>>Familiale</option>
                                          <option  <?php if($typeDeCarrosserie=="Fourgon, fourgonnette") echo "selected"; ?>>Fourgon, fourgonnette</option>
                                          <option  <?php if($typeDeCarrosserie=="VUS") echo "selected"; ?>>VUS</option>
                                          <option <?php if($typeDeCarrosserie=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Type de caburant</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="typeDeCarburant">
                                          <option>Sélectionner</option>
                                          <option <?php if($typeDeCarburant=="Diesel") echo "selected"; ?>>Diesel</option>
                                          <option <?php if($typeDeCarburant=="Essence") echo "selected"; ?>>Essence</option>
                                          <option <?php if($typeDeCarburant=="Véhicule") echo "selected"; ?>>Véhicule hybride</option>
                                          <option <?php if($typeDeCarburant=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Année</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <input type="text" class="form-control" id="annee" value="<?= $annee ?>">
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Nbr. de portes</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="nbreDePortes">
                                          <option>Sélectionner</option>
                                          <option <?php if($nbreDePortes=="2") echo "selected"; ?>>2</option>
                                          <option <?php if($nbreDePortes=="3") echo "selected"; ?>>3</option>
                                          <option <?php if($nbreDePortes=="4") echo "selected"; ?>>4</option>
                                          <option <?php if($nbreDePortes=="5") echo "selected"; ?>>5</option>
                                          <option <?php if($nbreDePortes=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Condition</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="conditions">
                                          <option>Sélectionner</option>
                                          <option <?php if($conditions=="D'occasion") echo "selected"; ?>>D'occasion</option>
                                          <option <?php if($conditions=="Reprise de contrat") echo "selected"; ?>>Reprise de contrat</option>
                                          <option <?php if($conditions=="Endommagé") echo "selected"; ?>>Endommagé</option>
                                          <option <?php if($conditions=="Irrécupérable") echo "selected"; ?>>Irrécupérable</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Nombre de places</b> (facultatif)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <select class="form-control selectpicker" id="nombreDePlaces">
                                          <option>Sélectionner</option>
                                          <option <?php if($nombreDePlaces=="2") echo "selected"; ?>>2</option>
                                          <option <?php if($nombreDePlaces=="3") echo "selected"; ?>>3</option>
                                          <option <?php if($nombreDePlaces=="4") echo "selected"; ?>>4</option>
                                          <option <?php if($nombreDePlaces=="5") echo "selected"; ?>>5</option>
                                          <option <?php if($nombreDePlaces=="6") echo "selected"; ?>>6</option>
                                          <option <?php if($nombreDePlaces=="7") echo "selected"; ?>>7</option>
                                          <option <?php if($nombreDePlaces=="Autre") echo "selected"; ?>>Autre</option>
                                        </select>
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;margin-bottom: 10px;">
                        <fieldset>
                          <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Kilomètres</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon beautiful">                                      
                                        </span>
                                        <input type="text" class="form-control" id="kilometre" value="<?= $kilometre ?>">
                                    </div>
                              </div>
                          </div>
                        </fieldset>
                      </div>
                  </div>               
                </div>
            </div>

            <div class="tab-pane_" id="tab_b" style="margin-top: 20px;">
                <h4><small> 2 </small> Emplacement </h4>

                <div class="col-md-12" style="padding: 0px;margin-bottom: 15px;">
                  <div class="col-md-3" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Code postal</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">
                                          
                                      </span>
                                      <input type="text" class="form-control" id="codePostal" value="<?= $codePostal ?>">
                                  </div>
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;">Votre code postal est requis pour permettre aux autres de trouver votre annonce</label>                              
                            </div>
                        </div>
                      </fieldset>
                  </div>

                  <div class="col-md-9" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Adresse où se trouve le produit</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">                                      
                                      </span>
                                      <input type="text" class="form-control" id="adresseProduit" value="<?= $adress_marchanise ?>">
                                  </div>
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;">L’ajout d’une adresse peut contribuer à augmenter la visibilité de votre annonce. </label>
                            </div>
                        </div>
                      </fieldset>
                  </div>
                </div>

            </div>
            <!-- MEDIAS -->
            <div class="tab-pane_" id="tab_c">

                <h4><small> 3 </small> Coordonnées </h4>
                
                <div class="col-md-12" style="padding: 0px;margin-bottom: 15px;">
                  <div class="col-md-6" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Numéro de téléphone </b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">
                                          
                                      </span>
                                      <input type="text" class="form-control" id="numeroTelephone" value="<?= $numero_telephone ?>">
                                  </div>
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;">Votre numéro de téléphone apparaîtra dans votre annonce.</label>                              
                            </div>
                        </div>
                      </fieldset>
                  </div>

                  <div class="col-md-6" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Adresse de courriel</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">                                      
                                      </span>
                                      <input type="text" class="form-control" id="adresseMail" placeholder="meu@mail.com" disabled="disabled">
                                  </div>
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;">Votre adresse de courriel ne sera pas communiquée à des tiers.</label>
                            </div>
                        </div>
                      </fieldset>
                  </div>
                </div>
                
            </div>

            <div class="tab-pane_" id="tab_d">
                <h4><small> 4 </small> Médias </h4>

                <h3 style="color: #575858;margin-top: 10px;"><b>Ajoutez d'autres photos pour attirer l'attention<br> sur votre annonce</b></h3>
                <label style="font-size: 11px;font-weight: 300;color: #575858;">Incluez des photos prises sous différents angles et montrant des détails particuliers.<br> Vous pouvez ajouter jusqu’à 12 photos, d’au moins 300px de haut ou de large<br> (nous recommendons au moins 1000px).</label><br>

                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Cliquer sur le bouton pour selectionner les photos.</b></label>
                
                <div class="wrapper" id="wrapper">
                  <?php
                  foreach ($array_PHOTOS as $key => $value) { ?>
                   <div class="box col-md-3" style="max-width: 190px;">
                    <div class="image-preview">
                      <img class="img-responsive thumbnailMedia_" src="produitsImages/<?= $value ?>">
                    </div>
                  </div> <?php
                  }
                  ?>
                  <!--
                  <div class="box">
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                      <label>
                        <input type="file" class="image-upload" accept="image/*" />
                      </label>
                    </div>
                  </div>
                  -->

                </div>
            </div>
              <div class="col-md-6" style="padding: 0px;">
                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Cliquer sur le bouton pour selectionner les photos.</b></label>
                <br>
                <label for="files" class="btn btn-primary">Selectionner les photos </label>
                <input type="file" id="files" name="files[]" max="8" multiple="multiple" style="display: none;" />
              </div>
            <div class="col-md-12" style="padding: 0px; border-top: 1px solid #e5e5e5;margin-top: 15px;">
              <div id="results_publierAnnonce_2"></div>
              <div class="col-md-8" style="padding: 0px;">
                <label style="font-size: 11px;font-weight: 300;color: #575858;">
               En affichant cette annonce, vous acceptez nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>, notre <a href="#" style="color: #1275c8;">Politique de confidentialité</a> et nos <a href="#" style="color: #1275c8;">Règles d’affichage</a>. Veuillez ne pas publier vos annonces en double. Utilisez plutôt les options de mise en vente pour améliorer votre visibilité.</b>
                </label>
              </div>
              <div class="col-md-12" style="padding: 0px;">
                <button type="button" style="margin-left: 10px;" class="btn btn-success pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataFile();">Lancer l'annonce en ligne </button>

                <button type="button" class="btn btn-default pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataAnnuler();">Annuler </button>
              </div>
            </div>
        </div><!-- tab content -->
      </form>
    </div>
    <div class="col-md-3 option-ajouter">
      <?php include_once'app/views/box_publicite.php'; ?>
    </div>

</div><!-- end of container -->

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for(let i = 0; i < boxes.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}
window.CP.exitedLoop(1);




/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}

//# sourceURL=pen.js
</script>