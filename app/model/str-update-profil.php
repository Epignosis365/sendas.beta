<?php
	session_start();
	error_reporting(E_ALL);
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	include_once'../../db/ps-config.php';
	//echo "maternita 65F8G-68FGF-6FG8F6G-65FTG52 ";

	$firstname = stripcslashes(strip_tags(htmlspecialchars($_POST['firstname'])));
	$lastname = stripcslashes(strip_tags(htmlspecialchars($_POST['lastname'])));
	$mail_u      = stripcslashes(strip_tags(htmlspecialchars($_POST['youremail'])));
	$yourephone  = stripcslashes(strip_tags(htmlspecialchars($_POST['yourephone'])));
	$youraddress = stripcslashes(strip_tags(htmlspecialchars($_POST['youraddress'])));

	if (!empty($firstname)) {
		if (!empty($lastname)) {
			if (!empty($mail_u)) {
				if (!filter_var($mail_u, FILTER_VALIDATE_EMAIL) === false) {

					$sql = 'SELECT * FROM donnees_brutes WHERE mailAdr = :mailAdr and id_crypt = :id_crypt ORDER BY id ASC';
					$sql1 = $bdd->prepare($sql);
	                $sql1->execute(array(
	                	'mailAdr' => $_SESSION['G47R-EM'],
	                	'id_crypt' => base64_decode($_COOKIE['u236']))) or die(print_r($sql1->errorInfo()));
	                $result_check = $sql1->fetch();
					$count_check  = $sql1->rowCount();
	                if ($count_check > 0) {

	                	$sql_update = "UPDATE donnees_brutes SET 
	                	nomFirst = :nomFirst, 
	                	prenomLast = :prenomLast, 
	                	mailAdr = :mailAdr, 
	                	telefone = :telefone, 
	                	addressUsre = :addressUsre
	                	WHERE id_crypt = :id_crypt";
						$update_memb = $bdd->prepare($sql_update);
						$update_memb->execute(array(
							'id_crypt' => $_SESSION['G47R-CRY'], 
							'nomFirst' => $firstname,
							'prenomLast' => $lastname,
							'mailAdr' => $mail_u, 
							'telefone' => $yourephone, 
							'addressUsre' => $youraddress)) or die(print_r($update_memb->errorInfo()));
						$_SESSION['G47R-FST'] = $firstname;
						$_SESSION['G47R-LST'] = $lastname;
						//$_SESSION['G47R-EM'] = $mail_u;
						echo '<label class="success-message">Mise à jour terminé avec succèss </label>';
	                	?>
	                	<script>
							window.location = "";
						</script><?php
	                							
	                }else {
	                	echo '<label class="erro-message"><i class="fa fa-close"></i> Desolé, aucune compte retrouvé contenant cette addresse email, s\'il vous plais essayez de nouveau. </label><br />';
	                }
					
				} else {
					echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir le bon forma votre email s\'il vous plais. Ex. monnom@mail.com </label><br />';
				}
			}else {
				echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre email s\'il vous plais. </label><br />';
			}
		}else {
			echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre prénnom s\'il vous plais. </label><br />';
		}
	}else {
		echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre nom s\'il vous plais. </label><br />';
	}