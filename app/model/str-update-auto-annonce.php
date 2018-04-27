<?php

	session_start();
	error_reporting(E_ALL);
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	include_once'../../db/ps-config.php';
	#echo "maternita 65F8G-68FGF-6FG8F6G-65FTG52 ";		
	
	$id_secret = stripcslashes(strip_tags(htmlspecialchars($_POST['id_secret'])));
	$titreAnnonce  = stripcslashes(strip_tags(htmlspecialchars($_POST['titreAnnonce'])));
	$descriptionAnnonce  = stripcslashes(strip_tags(htmlspecialchars($_POST['descriptionAnnonce'])));
	$prixProd  = stripcslashes(strip_tags(htmlspecialchars($_POST['prixProd'])));
	$marqueProduit  = stripcslashes(strip_tags(htmlspecialchars($_POST['marqueProduit'])));
	$villeVendeur  = stripcslashes(strip_tags(htmlspecialchars($_POST['villeVendeur'])));
	$typeAnnonce  = stripcslashes(strip_tags(htmlspecialchars($_POST['typeAnnonce'])));
	$TypdeVendeur  = stripcslashes(strip_tags(htmlspecialchars($_POST['TypdeVendeur'])));
	$codePostal  = stripcslashes(strip_tags(htmlspecialchars($_POST['codePostal'])));
	$adresseProduit  = stripcslashes(strip_tags(htmlspecialchars($_POST['adresseProduit'])));
	$numeroTelephone  = stripcslashes(strip_tags(htmlspecialchars($_POST['numeroTelephone'])));
	$adresseMail  = stripcslashes(strip_tags(htmlspecialchars($_POST['adresseMail'])));
	$chambres  = stripcslashes(strip_tags(htmlspecialchars($_POST['chambres'])));
	$salleDeBains  = stripcslashes(strip_tags(htmlspecialchars($_POST['salleDeBains'])));
	$sallons  = stripcslashes(strip_tags(htmlspecialchars($_POST['sallons'])));
	$categorie  = stripcslashes(strip_tags(htmlspecialchars($_POST['categorie'])));
	$prixProduit  = stripcslashes(strip_tags(htmlspecialchars($_POST['prixProduit'])));
	$modelProduit  = stripcslashes(strip_tags(htmlspecialchars($_POST['modelProduit'])));
	
	$marck  = stripcslashes(strip_tags(htmlspecialchars($_POST['marck'])));
	$model  = stripcslashes(strip_tags(htmlspecialchars($_POST['model'])));
	$boiteVitesse = stripcslashes(strip_tags(htmlspecialchars($_POST['boiteVitesse'])));
	$transmission  = stripcslashes(strip_tags(htmlspecialchars($_POST['transmission'])));
	$garniture  = stripcslashes(strip_tags(htmlspecialchars($_POST['garniture'])));
	$couleur  = stripcslashes(strip_tags(htmlspecialchars($_POST['couleur'])));
	$typeDeCarrosserie  = stripcslashes(strip_tags(htmlspecialchars($_POST['typeDeCarrosserie'])));
	$typeDeCarburant  = stripcslashes(strip_tags(htmlspecialchars($_POST['typeDeCarburant'])));
	$annee  = stripcslashes(strip_tags(htmlspecialchars($_POST['annee'])));
	$nbreDePortes  = stripcslashes(strip_tags(htmlspecialchars($_POST['nbreDePortes'])));
	$conditions  = stripcslashes(strip_tags(htmlspecialchars($_POST['conditions'])));
	$nombreDePlaces  = stripcslashes(strip_tags(htmlspecialchars($_POST['nombreDePlaces'])));
	$kilometre  = stripcslashes(strip_tags(htmlspecialchars($_POST['kilometre'])));

	//echo "Marck: ".$kilometre."<br>";
	$views = 0;
	$nouveauPrix = 0;
	$id_crypter = 'GR'.rand(1000,9990).'F'.rand(100,999).'S'.rand(100,9990).'D'.rand(100,999);
	$id_annonce = 'GD'.rand(1000,9990).'F'.rand(100,999).'S'.rand(100,9990).'D'.rand(100,999);
	$errors = array();
	$uploadedFiles = array();
	$comma_separated = '';
	$extension = array("jpeg","jpg","png");
	$bytes = 1024;
	$KB = 1024;
	$totalBytes = ($bytes * $KB)*4; //Max 4 MB
	$UploadFolder = "../../produitsImages/";
	$prix = 0;
	$counter = 0;
	if ($prixProd == 'prixChiffre') {
		# code...
		$prix = $prixProduit;
	}else { $prix = $prixProd; }

	
	
	//exit();

	//include_once'../../app/model/str-publier-annonce_image.php';
	if (!empty($titreAnnonce)) {
		if (!empty($descriptionAnnonce)) {
			if (!empty($numeroTelephone)) {
				# code...
				if (is_numeric($numeroTelephone)) {
					# code...
					//echo "CODNITIONS REMPLIES<br>";
					/*
					if (isset($_FILES["files"])) {
						# code...
						for($i=0;$i<count($_FILES["files"]["name"]);$i++)
						{
							if(empty($_FILES["files"]["tmp_name"]))
						    {
						        break;
						    }
							$uploadfile = $_FILES["files"]["tmp_name"][$i];
							$filename   = $_FILES["files"]["name"][$i];
							$filesize   = $_FILES["files"]["size"][$i];
							
							$string_1 = substr(strtoupper(sha1(rand(76585788, 5788575))), 0 ,8).'_';
							$string_2 = substr(strtoupper(sha1(rand(985788, 578789))), 0 ,8).'_';
							$string_3 = substr(strtoupper(sha1(rand(9585788, 578789))), 0, 10).'';
							$ext = pathinfo($filename,PATHINFO_EXTENSION);
							$newFileName = $string_1.$string_2.$string_3.'.'.$ext;

							if ($filesize <= $totalBytes) {
								# code...
								if (in_array($ext, $extension)) {
									# code...
									move_uploaded_file($_FILES["files"]["tmp_name"][$i], "$UploadFolder".$newFileName);
									//echo '<label class="success-message">Fichier envoyés avec success!</label><br>';
									$uploadedFiles[] = $newFileName;
									$comma_separated = implode(",", $uploadedFiles);
								}else {
									echo '<label class="erro-message"><i class="fa fa-close"></i> Un fichier ne contient pas le bon format. </label><br />';
									exit();
								}			
							}else {
								echo '<label class="erro-message"><i class="fa fa-close"></i> Fichier de taille <b>trop grand</b> </label><br />';
								exit();
							}
						}
					}else {
						//echo "Selectionner un fichier";
					}*/

					$sql_update = "UPDATE articles_annonces_autos SET 
						titre_annonce =:titre_annonce, 
						adresse_annonceur =:adresse_annonceur, 
						description =:description, 
						type_annonce =:type_annonce, 
						prix_marchandise =:prix_marchandise, 
						type_annonceur =:type_annonceur, 
						marck =:marck, 
						model =:model, 
						boiteDeVitesse =:boiteDeVitesse, 
						transmission =:transmission, 
						garniture =:garniture, 
						couleur =:couleur, 
						typeDeCarrosserie =:typeDeCarrosserie, 
						typeDeCarburant =:typeDeCarburant, 
						annee =:annee, 
						nbreDePortes =:nbreDePortes, 
						conditions =:conditions, 
						nombreDePlaces =:nombreDePlaces, 
						kilometre =:kilometre, 
						nouveauPrix =:nouveauPrix, 
						views =:views, 
						codePostal =:codePostal, 
						adress_marchanise =:adress_marchanise, 
						numero_telephone =:numero_telephone
					WHERE id_annonce = :id_annonce";
					$insert_memb = $bdd->prepare($sql_update);
					$insert_memb->execute(array(
						'id_annonce' => $id_secret,
						'titre_annonce' => $titreAnnonce,
						'adresse_annonceur' => $villeVendeur,
						'description' => $descriptionAnnonce,
						'type_annonce' => $typeAnnonce,
						'prix_marchandise' => $prix,
						'type_annonceur' => $TypdeVendeur,

						'marck' => $marck,
						'model' => $model, 
						'boiteDeVitesse' => $boiteVitesse, 
						'transmission' => $transmission, 
						'garniture' => $garniture, 
						'couleur' => $couleur, 
						'typeDeCarrosserie' => $typeDeCarrosserie, 
						'typeDeCarburant' => $typeDeCarburant, 
						'annee' => $annee, 
						'nbreDePortes' => $nbreDePortes, 
						'conditions' => $conditions, 
						'nombreDePlaces' => $nombreDePlaces, 
						'kilometre' => $kilometre, 
						'nouveauPrix' => $nouveauPrix, 
						'views' => $views,

						'codePostal' => $codePostal,
						'adress_marchanise' => $adresseProduit,
						'numero_telephone' => $numeroTelephone)) or die(print_r($insert_memb->errorInfo()));					

				    echo '<label class="success-message">Access permitit. Please wait...</label>';
				    ?>
				    <script type="text/javascript">
				    	$('#form_publierAnnonce')[0].reset();
				    	window.location = "?/p=usr";
				    </script>
				    <?php

				}else {
					echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez ne saisir que de numéro <b>sans espaces</b> au champs <b>numéro de téléphone</b> s\'il vous plais. </label><br />';
					exit();
				}
			}else {
				echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre numéro de téléphone s\'il vous plais. </label><br />';
				exit();
			}
		}else {
			echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir une description détaillée de votre annonce s\'il vous plais. </label><br />';
			exit();
		}
	}else {
		echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir le titre de votre annonce s\'il vous plais. </label><br />';
		exit();
	}

	/*for($i=0;$i<count($_FILES["files"]["name"]);$i++)
	{
	 $uploadfile = $_FILES["files"]["tmp_name"][$i];
	 $filename   = $_FILES["files"]["name"][$i];
	 $folder="../../produitsImages/";
	 move_uploaded_file($_FILES["files"]["tmp_name"][$i], "$UploadFolder".$_FILES["files"]["name"][$i]);
	 echo "Fichier envoyés avec success!";
	}
	exit();*/

