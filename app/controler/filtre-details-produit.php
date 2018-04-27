<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));

    $ts=base64_decode($_GET['?ts']);
    //echo "<br> TS VALUE::".$ts.'<br>';
    if ($ts == "Autos et véhicules &gt; Autos et camions" || $ts == "Autos et véhicules &gt; Voitures d'époque") {
	    # code...
	    //echo "Details AUTO";
	    include_once'app/views/details-produit-auto.php';
	    //break;
	}
	elseif (strpos($ts, 'Immobilier &gt;') !== false) {
	    # code...
	    //echo "Details IMMO";
	    include_once'app/views/details-produit-immobilier.php';
	    //break;
	}
	elseif (strpos($ts, 'Services &gt;') !== false) {
	    # code...
	    //echo "Details IMMO";
	    include_once'app/views/details-services.php';
	    //break;
	}
	else {
		//echo "Details OBJ";
	    include_once'app/views/details-produit.php';
	    //break;
	}