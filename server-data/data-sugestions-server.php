<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    include_once'../db/ps-config.php';
    /*/ ==== BACK END CODE ==== /*/
    echo "<br>========================<br>";
    echo "  /*/ ==== SUGESTIONS CODE ==== /*/<br>";
    echo "========================<br><br>";
    /*/ ==== END CODE ==== /*/

    $article_objects    = 'json-files/dataObjects.json';
    $article_veuiciles  = 'json-files/dataVehicule.json';
    $article_immobilier = 'json-files/dataImmobilier.json';

    function JsonToArray($jsonFileInput) {
    	$str = file_get_contents($jsonFileInput);
    	$json = json_decode($str, true);
    	return $json;
    }
    function jsonFromDataJSONGet2($arrayJSON) {
    	$i = 0;
    	$arrayJSONimmobilier = array();
    	foreach ($arrayJSON as $valueJSON) {
	    	if ($i++ == 2) break;
			$arrayJSONimmobilier[]   = $valueJSON;
		}
		return $arrayJSONimmobilier;
    }
    function jsonFromDataJSONGet1($arrayJSON) {
    	$i = 0;
    	$arrayJSONimmobilier = array();
    	foreach ($arrayJSON as $valueJSON) {
	    	if ($i++ == 1) break;
			$arrayJSONimmobilier[]   = $valueJSON;
		}
		return $arrayJSONimmobilier;
    }
    function jsonFromDataJSONGet3($arrayJSON) {
    	$i = 2;
    	$arrayJSONimmobilier = array();
    	foreach ($arrayJSON as $valueJSON) {
	    	if ($i++ == 4) break;
			$arrayJSONimmobilier[]   = $valueJSON;
		}
		return $arrayJSONimmobilier;
    }
    function jsonFromDataJSONGet4($arrayJSON) {
    	$i = 1;
    	$arrayJSONimmobilier = array();
    	foreach ($arrayJSON as $valueJSON) {
	    	if ($i++ == 3) break;
			$arrayJSONimmobilier[]   = $valueJSON;
		}
		return $arrayJSONimmobilier;
    }
	//$arrayJSONimmobilier = array();
    $arrayGetedImmobi = JsonToArray($article_immobilier);
    $arrayGetedAutos  = JsonToArray($article_veuiciles);
    $arrayGetedObject = JsonToArray($article_objects);

    /*/ Creation de suggestions IMMOBILIER /*/
    $immobilierArrayEncode = jsonFromDataJSONGet1($arrayGetedImmobi);
	file_put_contents("json-files/miniJsonImmobilier_2r.json", json_encode($immobilierArrayEncode, JSON_PRETTY_PRINT));
	/*/ Creation de suggestions AUTO ou VEHICULE /*/
    $autorArrayEncode = jsonFromDataJSONGet1($arrayGetedAutos);
	file_put_contents("json-files/miniJsonAutos_2r.json", json_encode($autorArrayEncode, JSON_PRETTY_PRINT));
	/*/ Creation de suggestions OBJECTS /*/
    $objectsArrayEncode = jsonFromDataJSONGet2($arrayGetedObject);
	file_put_contents("json-files/miniJsonObjects_2r.json", json_encode($objectsArrayEncode, JSON_PRETTY_PRINT));
   
    $mini_article_objects    = 'json-files/miniJsonObjects_2r.json';
    $mini_article_veuiciles  = 'json-files/miniJsonAutos_2r.json';
    $mini_article_immobilier = 'json-files/miniJsonImmobilier_2r.json';

    $jsonArray1 = json_decode(file_get_contents($mini_article_objects), true);
    $jsonArray2 = json_decode(file_get_contents($mini_article_veuiciles), true);
    $jsonArray3 = json_decode(file_get_contents($mini_article_immobilier), true);

    $resultFinal = array_merge($jsonArray1, $jsonArray2, $jsonArray3);
    file_put_contents("json-files/1-sugesteFinal.json", json_encode($resultFinal, JSON_PRETTY_PRINT));
    echo "<br> SUGESTIONS 1 DONNE! <br>";

    /*/ Creation de suggestions IMMOBILIER /*/
    $immobilierArrayEncode = jsonFromDataJSONGet3($arrayGetedImmobi);
	file_put_contents("json-files/2miniJsonImmobilier_2r.json", json_encode($immobilierArrayEncode, JSON_PRETTY_PRINT));
	/*/ Creation de suggestions AUTO ou VEHICULE /*/
    $autorArrayEncode = jsonFromDataJSONGet3($arrayGetedAutos);
	file_put_contents("json-files/2miniJsonAutos_2r.json", json_encode($autorArrayEncode, JSON_PRETTY_PRINT));
	/*/ Creation de suggestions OBJECTS /*/
    $objectsArrayEncode = jsonFromDataJSONGet4($arrayGetedObject);
	file_put_contents("json-files/2miniJsonObjects_2r.json", json_encode($objectsArrayEncode, JSON_PRETTY_PRINT));
   
    $mini_article_objects2    = 'json-files/2miniJsonObjects_2r.json';
    $mini_article_veuiciles2  = 'json-files/2miniJsonAutos_2r.json';
    $mini_article_immobilier2 = 'json-files/2miniJsonImmobilier_2r.json';

    $jsonArray1 = json_decode(file_get_contents($mini_article_objects2), true);
    $jsonArray2 = json_decode(file_get_contents($mini_article_veuiciles2), true);
    $jsonArray3 = json_decode(file_get_contents($mini_article_immobilier2), true);

    $resultFinal = array_merge($jsonArray1, $jsonArray2, $jsonArray3);
    file_put_contents("json-files/2-sugesteFinal.json", json_encode($resultFinal, JSON_PRETTY_PRINT));
    echo "<br> SUGESTIONS 2 DONNE! <br>";
	