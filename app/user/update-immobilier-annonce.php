<?php
  $categoriy = $_GET['?catgory'];
  $VTr = base64_decode($_GET['?VTr']);
  //echo $sbt;
  $dataUPDATE_SQL_2 = 'SELECT * FROM `articles_annonces_immobilier` WHERE `id_annonce` = ?';
  $dataAll_SQLstm_2 = $bdd->prepare($dataUPDATE_SQL_2);
  $dataAll_SQLstm_2->execute(array($VTr)) or die(print_r($dataAll_SQLstm_2->errorInfo()));
  $result_dataAll_2 = $dataAll_SQLstm_2->fetch();
  $count_dataAll_2  = $dataAll_SQLstm_2->rowCount();

  $id_annonceur      = $result_dataAll_2['id_annonceur'];
  $id_annonce        = $result_dataAll_2['id_annonce'];
  $id_crypt          = $result_dataAll_2['id_crypt'];
  $titleAnnonce      = $result_dataAll_2['titre_annonce'];
  $categories        = $result_dataAll_2['categories'];
  $adresse_annonceur = $result_dataAll_2['adresse_annonceur'];
  $description       = $result_dataAll_2['description'];
  $type_annonce      = $result_dataAll_2['type_annonce'];

  $animaux           = $result_dataAll_2['animaux'];
  $meubler           = $result_dataAll_2['meubler'];
  $unite_piece       = $result_dataAll_2['unite_piece'];
  $typeDeMaison      = $result_dataAll_2['typeDeMaison'];

  $numeroAppartement = $result_dataAll_2['numeroAppartement'];
  $nomDeRue          = $result_dataAll_2['nomDeRue'];
  $province          = $result_dataAll_2['province'];
  $villeAppartement  = $result_dataAll_2['villeAppartement'];

  $prix_marchandise  = $result_dataAll_2['prix_apartement'];
  $type_annonceur    = $result_dataAll_2['type_annonceur'];
  $marque            = $result_dataAll_2['marque'];
  $modele            = $result_dataAll_2['modele'];
  $chambres          = $result_dataAll_2['chambres'];
  $sallons           = $result_dataAll_2['sallons'];
  $salleDeBains      = $result_dataAll_2['salleDeBain'];
  $codePostal        = $result_dataAll_2['codePostal'];
  $villeDeAppartement = $result_dataAll_2['villeAppartement'];
  $numero_telephone  = $result_dataAll_2['numero_telephone'];
  $photos_array      = $result_dataAll_2['photos_array'];
  $date_annoncee     = $result_dataAll_2['date_annoncee'];
  $time_stamp        = $result_dataAll_2['time_stamp'];

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
      
      $.post("app/model/str-publier-annonce.php", { titreAnnonce: titreAnnonce, descriptionAnnonce: descriptionAnnonce, prixProd: prixProd, marqueProduit: marqueProduit, villeVendeur: villeVendeur, typeAnnonce: typeAnnonce, TypdeVendeur: TypdeVendeur, codePostal: codePostal, adresseProduit: adresseProduit, numeroTelephone: numeroTelephone, adresseMail: adresseMail, chambres: chambres, salleDeBains: salleDeBains, sallons: sallons },
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

    var numeroDeRue = $("#numeroDeRue").val();
    var unites = $("#unites").val();
    var nomDeRue = $("#nomDeRue").val();
    var villeDeAppartement = $("#villeDeAppartement").val(); 

    var provinces = $("#provinces").val(); 
    var typeDeMaison =$("#typeDeMaison").val(); 
    var sallesDeBain = $("#sallesDeBain").val();
    var meubler = $('input[name="meubler"]:checked').val();
    var animaux = $('input[name="animaux"]:checked').val();
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

    formData.append('numeroDeRue', $('#numeroDeRue').val());
    formData.append('unites', $('#unites').val());
    formData.append('villeDeAppartement', $('#villeDeAppartement').val());
    formData.append('nomDeRue', $('#nomDeRue').val());

    formData.append('provinces', $('#provinces').val());
    formData.append('typeDeMaison', $('#typeDeMaison').val());
    formData.append('sallesDeBain', $('#sallesDeBain').val());
    formData.append('categorie', $('#categorie').val());    
    formData.append('modelProduit', $('#modelProduit').val());
    formData.append('id_secret', $('#id_secret').val());
    $.ajax({
        url: "app/model/str-update-immobilier-annonce.php",
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
     <a href="#"><div class="separateur-up-immobiler"></div></a>
</div>
<div class="container-fluid" style="background-color: #;">
    
    <div class="col-md-9 corps-ajouter">
      <form id="form_publierAnnonce" name="form_publierAnnonce" method="post" enctype="multipart/form-data">
        <div class="tab-content col-md-12" id="tab_geral">
            <div id="results_publierAnnonce"></div>
            <div class="tab-pane_ active" id="tab_a">
                <h4><small> 1 </small> Détails de l'annonce <small class="pull-right">Immobilier</small></h4>
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
                                    <input type="text" class="form-control" id="titreAnnonce" value="<?= $titleAnnonce ?>">
                                    <input type="text" name="id_secret" id="id_secret" style="display: none;" value="<?= $VTr ?>">
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
                                    <input type="text" class="form-control" id="prixProduit" style="width: 40%;" value="<?= $prix_marchandise ?>">
                                    <select class="form-control selectpicker" id="unites" style="width: 60%;border-left: 0px;">
                                      <option <?php if($unite_piece=="mois") echo "selected"; ?>>mois</option>
                                      <option <?php if($unite_piece=="semaine") echo "selected"; ?>>semaine</option>
                                      <option <?php if($unite_piece=="jour") echo "selected"; ?>>jour</option>
                                    </select>
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

                    <div class="col-md-12" style="padding: 0px;" id="caracteristique_appartement">
                      <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 15px;"><b>Adresse et caracteristiques de l'appartement </b></label><br>
                      <div class="col-md-4" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;">Numéro</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <input type="text" class="form-control" id="numeroDeRue" value="<?= $numeroAppartement ?>">
                                      </div>
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-8" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                    <label style="font-size: 11px;font-weight: 300;color: #575858;">Rue</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <input type="text" class="form-control" id="nomDeRue" value="<?= $nomDeRue ?>">
                                      </div>                                      
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-12" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Province</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <select name="country" id="provinces" class="form-control selectpicker" onchange="yesnoCheck__(this);">
                                                <option value="DFT">
                                                     <i class="fa fa-navicon"></i> --- Seléctionner la province --- <span class="caret"></span>
                                                </option>
                                                <option value="AB" <?php if($province=="AB") echo "selected"; ?>>Alberta</option>
                                                <option value="BC" <?php if($province=="BC") echo "selected"; ?>>British Columbia</option>
                                                <option value="MB" <?php if($province=="MB") echo "selected"; ?>>Manitoba</option>
                                                <option value="NB" <?php if($province=="NB") echo "selected"; ?>>New Brunswick</option>
                                                <option value="NL" <?php if($province=="NL") echo "selected"; ?>>Newfoundland and Labrador</option>
                                                <option value="NT" <?php if($province=="NT") echo "selected"; ?>>Northwest Territories</option>
                                                <option value="NS" <?php if($province=="NS") echo "selected"; ?>>Nova Scotia</option>
                                                <!--<option value="NU"> Nunavut </option>-->
                                                <option value="ON" <?php if($province=="ON") echo "selected"; ?>>Ontario</option>
                                                <option value="PE" <?php if($province=="PE") echo "selected"; ?>>Prince Edward Island</option>
                                                <option value="QC" <?php if($province=="QC") echo "selected"; ?>>Quebec</option>
                                                <option value="SK" <?php if($province=="SK") echo "selected"; ?>>Saskatchewan</option>
                                                <option value="YT" <?php if($province=="YT") echo "selected"; ?>>Yukon</option>
                                          </select>
                                      </div>                                      
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-4" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;">Code postal </b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <input type="text" class="form-control" id="codePostal" value="<?= $codePostal ?>">
                                      </div>
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-8" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;">Ville</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <input type="text" class="form-control" id="villeDeAppartement" value="<?= $villeDeAppartement ?>">
                                      </div>
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-6" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Type de maison</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                          
                                          </span>
                                          <select class="form-control selectpicker" id="typeDeMaison">
                                            <option>-- Sélectionner --</option>
                                            <option <?php if($typeDeMaison=="1 1/2 (Bachelor & Studio)") echo "selected"; ?>>1 1/2 (Bachelor & Studio)</option>
                                            <option <?php if($typeDeMaison=="2 1/2") echo "selected"; ?>>2 1/2</option>
                                            <option <?php if($typeDeMaison=="3 1/2") echo "selected"; ?>>3 1/2</option>
                                            <option <?php if($typeDeMaison=="4 1/2") echo "selected"; ?>>4 1/2</option>
                                            <option <?php if($typeDeMaison=="5 1/2") echo "selected"; ?>>5 1/2</option>
                                            <option <?php if($typeDeMaison=="6 1/2 et plus") echo "selected"; ?>>6 1/2 et plus</option>
                                          </select>
                                      </div>
                                </div>
                            </div>
                          </fieldset>
                      </div>

                      <div class="col-md-6" style="padding: 0px;">
                        <fieldset>
                            <div class="form-group">
                                  <div class="col-md-12">
                                      <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Salle de bain</b></label>
                                      <div class="input-group">
                                          <span class="input-group-addon beautiful">                                      
                                          </span>
                                          <select class="form-control selectpicker" id="sallesDeBain">
                                            <option>-- Sélectionner --</option>
                                            <option <?php if($salleDeBains=="1 salle de bain") echo "selected"; ?>>1 salle de bain</option>
                                            <option <?php if($salleDeBains=="1,5 salle de bain") echo "selected"; ?>>1,5 salle de bain</option>
                                            <option <?php if($salleDeBains=="2 salle de bain") echo "selected"; ?>>2 salle de bain</option>
                                            <option <?php if($salleDeBains=="2,5 salle de bain") echo "selected"; ?>>2,5 salle de bain</option>
                                            <option <?php if($salleDeBains=="3 salle de bain") echo "selected"; ?>>3 salle de bain</option>
                                            <option <?php if($salleDeBains=="3,5 salle de bain") echo "selected"; ?>>3,5 salle de bain</option>
                                            <option <?php if($salleDeBains=="4 salle de bain") echo "selected"; ?>>4 salle de bain</option>
                                            <option <?php if($salleDeBains=="4,5 salle de bain") echo "selected"; ?>>4,5 salle de bain</option>
                                            <option <?php if($salleDeBains=="5 salle de bain") echo "selected"; ?>>5 salle de bain</option>
                                            <option <?php if($salleDeBains=="5,5 salle de bain") echo "selected"; ?>>5,5 salle de bain</option>
                                            <option <?php if($salleDeBains=="6 salle de bain") echo "selected"; ?>>6 salle de bain</option>
                                          </select>
                                      </div>
                                </div>
                            </div>
                          </fieldset>
                      </div>
                    </div>
                    
                  </div>

                  <!-- SEPARATEUR -->

                  <div class="col-md-6" style="padding: 0px;">

                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12 col-sm-12">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre adresse ou simplement la ville.</b> Ceci donnera confiance à vos visiteurs  </label>
                                <div class="input-group">
                                    <span class="input-group-addon beautiful">                                      
                                    </span>
                                    <input type="text" class="form-control" id="villeVendeur"  value="<?= $adresse_annonceur ?>">
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
                    <?php
                    if ($sbt != "Maisons à vendre" && $sbt != "Condos à vendre" && $sbt != "Terrains à vendre") { ?>
                      <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                               <div class="input-group">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b> Meublé </b></label><br>
                                  <div class="btn-group radio-group" style="margin-top: 5px;margin-left: 25px;">
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Oui" name="meubler" checked="checked" <?php if($meubler=="Oui") echo "checked"; ?>> <b>Oui</b></label><br>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Non" name="meubler" <?php if($meubler=="Non") echo "checked"; ?>> <b>Non</b></label>
                                  </div>
                               </div>
                          </div>
                      </div>
                    </fieldset>

                    <fieldset>
                      <div class="form-group">
                            <div class="col-md-12">
                               <div class="input-group">
                                  <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b> Animaux acceptés </b>(facultatif)</label><br>
                                  <div class="btn-group radio-group" style="margin-top: 5px;margin-left: 25px;">
                                     <label class="not-active label-typeAnnonce"> <input type="radio" value="Oui" name="animaux" <?php if($animaux=="Oui") echo "checked"; ?>> <b>Oui</b></label><br>
                                     <label class="not-active label-typeAnnonce"><input type="radio" value="Non" name="animaux" checked="checked" <?php if($animaux=="Non") echo "checked"; ?>> <b>Non</b></label>
                                  </div>
                               </div>
                          </div>
                      </div>
                    </fieldset> <?php
                    }
                    ?>
                    
                  </div>
                  <div class="col-md-12" style="padding: 0px;">
                      <fieldset>
                        <div class="form-group">
                              <div class="col-md-12">
                                <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Description de l'annonce</b></label>
                                <div class="input-controls-container">
                                    <textarea class="form-control textarea-description" id="descriptionAnnonce"><?= $description ?></textarea>                                
                                </div>
                                <label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 0px;"> Veuillez entrer une brieve description de l'immobilier</b></label>
                            </div>
                        </div>
                      </fieldset>
                    </div>
                </div>

            </div>
            <!-- MEDIAS -->
            <div class="tab-pane_" id="tab_c">

                <h4><small> 2 </small> Coordonnées </h4>
                
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