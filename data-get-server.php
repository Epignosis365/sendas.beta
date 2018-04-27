<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    include_once'../db/ps-config.php';
	$data_SQL = 'SELECT * FROM articles_annonces';
	$data_SQLstm = $bdd->prepare($data_SQL);
	$data_SQLstm->execute(array()) or die(print_r($data_SQLstm->errorInfo()));
	//$result_data = $data_SQLstm->fetch();
	$count_data  = $data_SQLstm->rowCount();
	if ($count_data < 1) {
		echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';
	}else {
		echo "Donnée trouvé<br>";
		$emparray = array();
		while($r = $data_SQLstm->fetch(PDO::FETCH_ASSOC)) {
			$emparray[] = $r;
		    $new_array[] = $r;
		    $new_array[$r['titre_annonce']] = $r;
		    $new_array[$r['id_annonceur']] = $r;
		}
		//echo json_encode($emparray);
		file_put_contents("test.json", json_encode($emparray, JSON_PRETTY_PRINT));
		/*
		$id_annonceur      = $result_data['id_annonceur'];
		$titleBD           = $result_data['titre_annonce'];
		$categories        = $result_data['categories'];
		$adresse_annonceur = $result_data['adresse_annonceur'];
		$description       = $result_data['description'];
		$type_annonce      = $result_data['type_annonce'];

		$taille        = $result_data['taille'];
		$couleur       = $result_data['couleur'];
		$unite_piece   = $result_data['unite_piece'];

		$prix_marchandise  = $result_data['prix_marchandise'];
		$type_annonceur    = $result_data['type_annonceur'];
		$marque            = $result_data['marque'];
		$modele            = $result_data['modele'];
		$chambres          = $result_data['chambres'];
		$sallons           = $result_data['sallons'];
		$salleDeBains      = $result_data['salleDeBains'];
		$codePostal        = $result_data['codePostal'];
		$adress_marchanise = $result_data['adress_marchanise'];
		$numero_telephone  = $result_data['numero_telephone'];
		$photos_array      = $result_data['photos_array'];
		$date_annoncee     = $result_data['date_annoncee'];
		$time_stamp        = $result_data['time_stamp'];

		$title = $titleBD." | détails |  Senda.ca";
		$titleDown = $titleBD;
		*/
		

		/*
		while($r = $data_SQLstm->fetch(PDO::FETCH_ASSOC)) {
		    $new_array[] = $r;
		    $new_array[$r['titre_annonce']] = $r;
		    $new_array[$r['id_annonceur']] = $r;
		}
		foreach($new_array as $array){
		    echo $array['titre_annonce'];
		    echo $array['id_annonceur'];
		}
		*/

	}
