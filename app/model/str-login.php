<?php ob_start();

	session_start();
	error_reporting(E_ALL);
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	include_once'../../db/ps-config.php';
	#echo "maternita 65F8G-68FGF-6FG8F6G-65FTG52 ";		
	
	$email  = stripcslashes(strip_tags(htmlspecialchars($_POST['inputUsernameEmail'])));
	$senha  = nl2br(stripcslashes(strip_tags(htmlspecialchars($_POST['inputPassword']))));
	$souvienMoi  = nl2br(stripcslashes(strip_tags(htmlspecialchars($_POST['souvienMoi']))));

	#echo sha1($senha);
	
	if (!empty($email)) {
		# code...
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			# code...
			if (!empty($senha)) {
				# code...
				$sql = 'SELECT * FROM donnees_brutes WHERE mailAdr = :mailAdr and modp = :modp ORDER BY id ASC';
				$sql1 = $bdd->prepare($sql);
                $sql1->execute(array(
                	'mailAdr' => $email,
                	'modp' => sha1($senha))) or die(print_r($sql1->errorInfo()));
                $result_check = $sql1->fetch();
				$count_check  = $sql1->rowCount();
                if ($count_check > 0) {

                	echo '<label class="success-message">Access permitit. Please wait...</label>';
                	session_start();
                	$_SESSION['G47R-FST'] = $result_check['nomFirst'];
					$_SESSION['G47R-LST'] = $result_check['prenomLast'];
					$_SESSION['G47R-EM'] = $result_check['mailAdr'];
					$_SESSION['G47R-CRY'] = $result_check['id_crypt'];
                	if ($souvienMoi == "true") {                		
						setcookie("u235", $result_check['mailAdr'], time() + ((86400 * 30)*90), "/"); // 3 mouths
						setcookie("u236", base64_encode($result_check['id_crypt']), time() + ((86400 * 30)*90), "/"); // 86400 = 1 day
						setcookie("u237", $senha, time() + ((86400 * 30)*90), "/"); // 86400 = 1 day
						setcookie("auto_connecte", $result_check['id_crypt'], time() + ((86400 * 30)*90), "/"); // 86400 = 1 day
						echo $_COOKIE['u235']." <br> ".$_COOKIE['u236'];
					}else {
						# Nothing to do
						setcookie("u235", $result_check['mailAdr'], time() + (86400), "/"); // 1 day
						setcookie("u236", base64_encode($result_check['id_crypt']), time() + (86400), "/"); // 86400 = 1 day
						setcookie("u237", $senha, time() + (86400), "/"); // 86400 = 1 day
						setcookie("auto_connecte", $result_check['id_crypt'], time() + (86400), "/"); // 86400 = 1 day
						echo $_COOKIE['u235']." <br> ".$_COOKIE['u236'];
					}					
					?>
                	<script>
						window.location = "index.php";
					</script><?php                	

                }else {
                	echo '<label class="erro-message"><i class="fa fa-close"></i>L\'email ou le mot de passe incorrect, s\'il vous plais essayez de nouveau. </label><br />';
                }
			}else{
				echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre mot de passe s\'il vous plais. </label><br />';
			}
		}else{
			echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir le bon forma votre email s\'il vous plais. Ex. monnom@mail.com </label><br />';
		}
	}else{
		echo '<label class="erro-message"><i class="fa fa-close"></i> Veuillez saisir votre email s\'il vous plais. </label><br />';
	}								
?>