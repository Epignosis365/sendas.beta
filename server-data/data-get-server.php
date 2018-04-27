<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    include_once'../db/ps-config.php';
    /*/ ==== BACK END CODE ==== /*/
    echo "========================<br>";
    echo "  /*/ ==== BACK END CODE ==== /*/<br>";
    echo "========================<br><br>";
    /*/ ==== END CODE ==== /*/
	$data_SQL = 'SELECT * FROM articles_annonces';
	$data_SQLstm = $bdd->prepare($data_SQL);
	$data_SQLstm->execute(array()) or die(print_r($data_SQLstm->errorInfo()));
	//$result_data = $data_SQLstm->fetch();
	$count_data  = $data_SQLstm->rowCount();
	if ($count_data < 1) {
		echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';
	}else {
		echo "Donnée objects trouvé<br>";
		$emparray = array();
		while($r = $data_SQLstm->fetch(PDO::FETCH_ASSOC)) {
			$emparray[] = $r;
		}
		//echo json_encode($emparray);
		file_put_contents("json-files/dataObjects.json", json_encode($emparray, JSON_PRETTY_PRINT));
	}

	$dataVehicule_SQL = 'SELECT * FROM articles_annonces_autos';
	$dataVehicule_SQLstm = $bdd->prepare($dataVehicule_SQL);
	$dataVehicule_SQLstm->execute(array()) or die(print_r($dataVehicule_SQLstm->errorInfo()));
	//$result_data = $data_SQLstm->fetch();
	$count_data  = $dataVehicule_SQLstm->rowCount();
	if ($count_data < 1) {
		echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';
	}else {
		echo "Donnée véhicule trouvé<br>";
		$emparray = array();
		while($r = $dataVehicule_SQLstm->fetch(PDO::FETCH_ASSOC)) {
			$emparray[] = $r;
		}
		//echo json_encode($emparray);
		file_put_contents("json-files/dataVehicule.json", json_encode($emparray, JSON_PRETTY_PRINT));
	}

	$dataImmobilier_SQL = 'SELECT * FROM articles_annonces_immobilier';
	$dataImmobilier_SQLstm = $bdd->prepare($dataImmobilier_SQL);
	$dataImmobilier_SQLstm->execute(array()) or die(print_r($dataImmobilier_SQLstm->errorInfo()));
	//$result_data = $data_SQLstm->fetch();
	$count_data  = $dataImmobilier_SQLstm->rowCount();
	if ($count_data < 1) {
		echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';
	}else {
		echo "Donnée immobilier trouvé<br>";
		$emparray = array();
		while($r = $dataImmobilier_SQLstm->fetch(PDO::FETCH_ASSOC)) {
			$emparray[] = $r;
		}
		//echo json_encode($emparray);
		file_put_contents("json-files/dataImmobilier.json", json_encode($emparray, JSON_PRETTY_PRINT));
	}

include_once'data-sugestions-server.php';
