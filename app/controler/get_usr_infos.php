<?php
	include_once'db/ps-config.php';
	$infos_SQL = 'SELECT * FROM donnees_brutes WHERE id_crypt = :id_crypt';
	$infos_SQLstm = $bdd->prepare($infos_SQL);
	$infos_SQLstm->execute(array(
	   'id_crypt' => $id_annonceur)) or die(print_r($infos_SQLstm->errorInfo()));
	$result_dataInfos = $infos_SQLstm->fetch();
	$count_dataInfos  = $infos_SQLstm->rowCount();
	if ($count_dataInfos < 1) {
		//echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> <b>Aucune donnée trouvée </b> ?</label></center><br />';
	}else {
		$nom_utilisateur    = $result_dataInfos['nomFirst'];
		$prenom_utilisateur = $result_dataInfos['prenomLast'];
		$email_utilisateur  = $result_dataInfos['mailAdr'];
		$pseudo_utilisateur = $result_dataInfos['nom_utilisateur'];
		$date_entree        = $result_dataInfos['date_entree'];
		$time_stamp         = $result_dataInfos['time_stamp'];		
		$telefone_utilisateur = $result_dataInfos['telefone'];

		$nom_complet = $nom_utilisateur.' '.$prenom_utilisateur;
	}