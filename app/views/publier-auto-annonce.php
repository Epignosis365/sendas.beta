<style type="text/css">
  #menu-top1 {
    background-color: #e60005_;
    /*background-image: url('../images/sep-3.png');*/
  }
</style>
<?php
  $categoriy = $_GET['?catgory'];
  $sbt = $_GET['?sbt'];
  $SQLreq = 'SELECT * FROM make ORDER BY id ASC';
  $sqlMAKE = $bdd->prepare($SQLreq);
  $sqlMAKE->execute(array()) or die(print_r($sqlMAKE->errorInfo()));
  $result_make = $sqlMAKE->fetchAll();
  $count_check  = $sqlMAKE->rowCount();
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
<style type="text/css">
  #menu-top2 {
    padding-top: 5px;
    padding-bottom: 0px;
    display: ;
  }
</style>
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
    var provincelSelec = $("#provincelSelec").val();
    var villeUser = $("#villeUser").val();
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

    formData.append('provincelSelec', $('#provincelSelec').val());
    formData.append('villeUser', $('#villeUser').val());
    $.ajax({
        url: "app/model/str-publier-auto-annonce.php",
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
<div class="container-fluid" style="padding: 0px;display: none;">
     <a href="#"><div class="separateur-up-auto"></div></a>
</div>
<div class="container-fluid" style="background-color: #;margin-top: 15px;">
    
    <div class="col-md-9 corps-ajouter">
      <form id="form_publierAnnonce" name="form_publierAnnonce" method="post" enctype="multipart/form-data">
        <div class="tab-content col-md-12" id="tab_geral">
            <div id="results_publierAnnonce"></div>
            <div class="tab-pane_ active" id="tab_a">
                <h4><small> 1 </small> Détails de l'annonce auto <small class="pull-right">Auto et véhicules</small> </h4>
                <div class="col-md-12" style="margin-bottom: 30px;">
                  <h3>
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
                    include_once'app/views/categoriy.php';

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
                                    <input type="text" class="form-control" id="titreAnnonce">
                                </div>
                          </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                              <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Description de l'annonce</b></label>
                              <div class="input-controls-container">
                                  <textarea class="form-control textarea-description" id="descriptionAnnonce"></textarea>                                
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
                                    <input type="text" class="form-control" id="prixProduit">
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
                                    <input type="text" class="form-control" id="villeVendeur">
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
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Offre" name="typeAnnonce" checked="checked"> <b>Offre</b> - Vous offrez un objet à vendre </label>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Recherche" name="typeAnnonce"> <b>Recherche</b> - Vous recherchez un objet  </label>
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
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Particulier" name="TypdeVendeur" checked="checked"> Particulier </label>
                                     <br>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Entreprise" name="TypdeVendeur"> Entreprise </label>
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
                                          foreach ($result_make as $value) {
                                            # code... ?
                                            echo "<option>".$value['title']."</option>";
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
                                        <input type="text" class="form-control" id="model">
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
                                          <option>Automatique</option>
                                          <option>Manuel</option>
                                          <option>Autre</option>
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
                                          <option>4 roues motrices (4x4)</option>
                                          <option>4 x 4</option>
                                          <option>Roues motrices avant</option>
                                          <option>Roues motices arrière</option>
                                          <option>Autre</option>
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
                                        <input type="text" class="form-control" id="garniture">
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
                                          <option>Argent</option>
                                          <option>Beige</option>
                                          <option>Blanc</option>
                                          <option>Blanc cassé</option>
                                          <option>Bleu</option>
                                          <option>Bordeaux</option>
                                          <option>Brun</option>
                                          <option>Gris</option>
                                          <option>Havane</option>
                                          <option>Jaune</option>
                                          <option>Noir</option>
                                          <option>Or</option>
                                          <option>Orange</option>
                                          <option>Rose</option>
                                          <option>Rouge</option>
                                          <option>Sarcelle</option>
                                          <option>Vert</option>
                                          <option>Violet</option>
                                          <option>Autre</option>
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
                                          <option>Berline</option>
                                          <option>Bicorps</option>
                                          <option>Cabriolet</option>
                                          <option>Camionnette</option>
                                          <option>Coupé (2 portes)</option>
                                          <option>Familiale</option>
                                          <option>Fourgon, fourgonnette</option>
                                          <option>VUS</option>
                                          <option>Autre</option>
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
                                          <option>Diesel</option>
                                          <option>Essence</option>
                                          <option>Véhicule hybride</option>
                                          <option>Autre</option>
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
                                        <input type="text" class="form-control" id="annee">
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
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>Autre</option>
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
                                          <option>D'occasion</option>
                                          <option>Reprise de contrat</option>
                                          <option>Endommagé</option>
                                          <option>Irrécupérable</option>
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
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                          <option>7</option>
                                          <option>Autre</option>
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
                                        <input type="text" class="form-control" id="kilometre">
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
                  <div class="col-md-8" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Code postal et Province</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">
                                          
                                      </span>
                                      <input type="text" class="form-control" id="codePostal" style="width: 20%;">
                                      <select name="country" id="provincelSelec" class="form-control text-center" onchange="yesnoCheck_(this);" style="width: 35%;">
                                        <option value="DFT">
                                             <i class="fa fa-navicon"></i>-- La province --<span class="caret"></span>
                                        </option>
                                        <option value="AB"> Alberta </option>
                                        <option value="BC"> British Columbia </option>
                                        <option value="MB"> Manitoba </option>
                                        <option value="NB"> New Brunswick </option>
                                        <option value="NL"> Newfoundland and Labrador </option>
                                        <option value="NT"> Northwest Territories </option>
                                        <option value="NS"> Nova Scotia </option>
                                        <!--<option value="NU"> Nunavut </option>-->
                                        <option value="ON"> Ontario </option>
                                        <option value="PE"> Prince Edward Island </option>
                                        <option value="QC"> Quebec </option>
                                        <option value="SK"> Saskatchewan </option>
                                        <option value="YT"> Yukon </option>
                                    </select>
                                    <?php
                                      $dataVille_SQL = "SELECT * FROM cities_canada WHERE state = ?";
                                      $dataVille_SQLstm = $bdd->prepare($dataVille_SQL);
                                      $dataVille_SQLstm->execute(
                                          array($_COOKIE['provinceSelected'])) or die(print_r($dataVille_SQLstm->errorInfo()));
                                      $result_dataVille = $dataVille_SQLstm->fetchAll();
                                      $count_dataVille  = $dataVille_SQLstm->rowCount();
                                    ?>
                                    <select name="country" style="width: 40%;" id="villeUser" onchange="admSelectCheck__(this);" class="form-control selectpicker">
                                          <option><?= 'Villes de: '.$cookieProvinceJS; ?></option>
                                          <option value="DFT">
                                              - Seléctionner la  Ville -<span class="caret"></span>
                                          </option>
                                          <?php 
                                          foreach ($result_dataVille as $key => $province) { 
                                            $provinceLocation = $province['city']; ?>
                                            <option value="<?= $provinceLocation; ?>"> <?= $provinceLocation; ?> </option> <?php
                                          }
                                        ?>
                                    </select>
                                    <!--<input type="text" class="form-control" id="villeUser" style="width: 40%;" placeholder="Ville">-->
                                  </div>
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;">Votre code postal est requis pour permettre aux autres de trouver votre annonce</label>                     
                            </div>
                        </div>
                      </fieldset>
                  </div>

                  <div class="col-md-4" style="padding: 0px;">
                    <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Adresse où se trouve le produit</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon beautiful">                                      
                                      </span>
                                      <input type="text" class="form-control" id="adresseProduit">
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
                                      <input type="text" class="form-control" id="numeroTelephone">
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