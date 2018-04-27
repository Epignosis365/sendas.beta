<?php
	session_start();
	error_reporting(E_ALL);
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	include_once'../../db/ps-config.php';
	#echo "maternita 65F8G-68FGF-6FG8F6G-65FTG52 ";

	$firstname = stripcslashes(strip_tags(htmlspecialchars($_POST['firstname'])));
	$lastname = stripcslashes(strip_tags(htmlspecialchars($_POST['lastname'])));
	$mail_u        = stripcslashes(strip_tags(htmlspecialchars($_POST['youremail'])));
	$reenteremail     = stripcslashes(strip_tags(htmlspecialchars($_POST['reenteremail'])));
	$password     = stripcslashes(strip_tags(htmlspecialchars($_POST['password'])));
	
	$m_crypt = 'ID'.rand(1000,9990).'H'.rand(100,999).'A'.rand(100,9990).'PH'.rand(100,999);
	$option1 = ['cost' => 9,];
     $option2 = ['cost' => 8,];
     $senha_crypted = password_hash($i, PASSWORD_DEFAULT, $option1).' '.sha1($i).'-'.password_hash($i, PASSWORD_DEFAULT, $option1).'-'.md5($i).'-'.password_hash($i, PASSWORD_DEFAULT, $option2);
     $id_member = 'ID97'.$m_crypt.$senha_crypted;

	if (!empty($firstname)) {
		if (!empty($lastname)) {
			if (!empty($mail_u)) {
				if (!filter_var($mail_u, FILTER_VALIDATE_EMAIL) === false) {
					if (!empty($reenteremail)) {
						if (!filter_var($mail_u, FILTER_VALIDATE_EMAIL) === false) {
							if ($mail_u == $reenteremail) {
								if (!empty($password)) {
									# code...

									$sql = 'SELECT * FROM donnees_brutes WHERE mailAdr = :mailAdr and modp = :modp ORDER BY id ASC';
									$sql1 = $bdd->prepare($sql);
					                $sql1->execute(array(
					                	'mailAdr' => $mail_u,
					                	'modp' => sha1($password))) or die(print_r($sql1->errorInfo()));
					                $result_check = $sql1->fetch();
									$count_check  = $sql1->rowCount();
					                if ($count_check > 0) {
					                	echo '<label class="erro-message"><i class="fa fa-close"></i> Desolé, cet email est déjà utilisé, s\'il vous plais essayez de nouveau. </label><br />';
										
					                }else {
					                	$sql_inser = "INSERT INTO donnees_brutes (id_crypt, nomFirst, prenomLast, mailAdr, modp, nom_utilisateur, date_entree , time_stamp)
											VALUES(:id_crypt, :nomFirst, :prenomLast, :mailAdr, :modp, :nom_utilisateur, :date_entree, :time_stamp)";
										$insert_memb = $bdd->prepare($sql_inser);
										$insert_memb->execute(array(
											'id_crypt' => $id_member, 
											'nomFirst' => $firstname,
											'prenomLast' => $lastname,
											'mailAdr' => $mail_u, 
											'modp' => sha1($password), 
											'nom_utilisateur' => $firstname, 
											'date_entree' => date('d-m-Y'),
											'time_stamp' => time())) or die(print_r($insert_memb->errorInfo()));

										//echo '<label class="success-message">Access permitit. Please wait...</label>';
					                	session_start();
					                	$_SESSION['G47R-FST'] = $firstname;
										$_SESSION['G47R-LST'] = $lastname;
										$_SESSION['G47R-EM'] = $mail_u;
										$_SESSION['G47R-CRY'] = $id_member;

										# Nothing to do
										setcookie("u235", $mail_u, time() + (86400), "/"); // 1 day
										setcookie("u236", $id_member, time() + (86400), "/"); // 86400 = 1 day
										setcookie("u237", $password, time() + (86400), "/"); // 86400 = 1 day
										setcookie("auto_connecte", $id_member, time() + (86400), "/"); // 86400 = 1 day
										echo $_COOKIE['u235']." <br> ".$_COOKIE['u236'];
					                	?>
					                	<script>
											window.location = "index.php/?/p=store";
										</script><?php
					                }
									

								}else {
									echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre mot de passe s\'il vous plais. </label><br />';
								}
							}else {
								echo '<label class="erro-message"><i class="fa fa-close"></i> Les deux emails ne correspondent pas s\'il vous plais essayez de nouveau. </label><br />';
							}
						}else {
							echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir le bon forma l\'email de confirmation s\'il vous plais. Ex. monnom@mail.com </label><br />';
						}
					}else {
						echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez confirmer votre email s\'il vous plais. </label><br />';
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