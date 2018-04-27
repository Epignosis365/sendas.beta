<?php

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
					echo "Fichier envoyés avec success!";
				}else {
					echo "Un fichier ne contient pas le bon format";
				}			
			}else {
				echo "Image trop grande!";
			}
		}
	}else {
		echo "Selectionner un fichier";
	}
	