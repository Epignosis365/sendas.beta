<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=sendaDB_29_01_2017', 'root', 'Senda2015');
		#echo "Connecté";
	}catch (Exception $e){
	    die('Erreur : ' . $e->getMessage());
	}

