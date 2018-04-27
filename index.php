<?php
     session_start();
     error_reporting(E_ALL);
     error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     /*
     1 855 249 2290 post 418 755 8762
     #ed290b : laranja
     #10a23d : verde

    Estatisticas de dados de cada ministério : Educaçao et Saude
    

     */
     include_once'db/ps-config.php';
     if (isset($_COOKIE['u235']) && isset($_COOKIE['u236'])) {
          $auto_loginSQL = 'SELECT * FROM donnees_brutes WHERE mailAdr = :mailAdr and id_crypt = :id_crypt ORDER BY id ASC';
          $auto_login = $bdd->prepare($auto_loginSQL);
          $auto_login->execute(array(
               'mailAdr' => $_COOKIE['u235'],
               'id_crypt' => base64_decode($_COOKIE['u236']))) or die(print_r($auto_login->errorInfo()));
          $result_check = $auto_login->fetch();
          $count_check  = $auto_login->rowCount();
          if ($count_check > 0) {

               #echo '<label class="success-message">Access permitit. Please wait...</label>';
               session_start();
               $_SESSION['G47R-FST'] = $result_check['nomFirst'];
               $_SESSION['G47R-LST'] = $result_check['prenomLast'];
               $_SESSION['G47R-EM'] = $result_check['mailAdr'];
               $_SESSION['G47R-CRY'] = $result_check['id_crypt'];
          }
     }
     $option1 = ['cost' => 9,];
     $option2 = ['cost' => 8,];
     $senha_crypted = password_hash($i, PASSWORD_DEFAULT, $option1).' '.sha1($i).'-'.password_hash($i, PASSWORD_DEFAULT, $option1).'-'.md5($i).'-'.password_hash($i, PASSWORD_DEFAULT, $option2);
     
     function truncate($string,$length,$append="&hellip;") {
          $string = trim($string);
          if(strlen($string) > $length) {
              $string = wordwrap($string, $length);
              $string = explode("\n", $string, 2);
              $string = $string[0] . $append;
          }
       return $string;
     }
     function truncateParagrafo($string, $length, $dots = "") {
         return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
     }
     function timestampToDate($timestamp) {
          $datetimeFormat = 'Y-m-d H:i:s';
          $date = new \DateTime();
          // If you must have use time zones
          // $date = new \DateTime('now', new \DateTimeZone('Europe/Helsinki'));
          $date->setTimestamp($timestamp);
          return $date->format($datetimeFormat);
     }
     function time_elapsed_string($datetime, $full = false) {

         $now = new DateTime;
         $ago = new DateTime($datetime);
         $diff = $now->diff($ago);

         $diff->w = floor($diff->d / 7);
         $diff->d -= $diff->w * 7;

         $string = array(
             'y' => 'an',
             'm' => 'mois',
             'w' => 'semaine',
             'd' => 'jour',
             'h' => 'heure',
             'i' => 'minute',
             's' => 'sec',
         );
         foreach ($string as $k => &$v) {
             if ($diff->$k) {
                 $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
             } else {
                 unset($string[$k]);
             }
         }

         if (!$full) $string = array_slice($string, 0, 1);
         return $string ? implode(', ', $string) . ' passé' : 'juste maintenant';
     }
  function str_to_noaccent($str) {
      $url = $str;
      $url = preg_replace('#Ç#', 'C', $url);
      $url = preg_replace('#ç#', 'c', $url);
      $url = preg_replace('#è|é|ê|ë#', 'e', $url);
      $url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
      $url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
      $url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
      $url = preg_replace('#ì|í|î|ï#', 'i', $url);
      $url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
      $url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
      $url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
      $url = preg_replace('#ù|ú|û|ü#', 'u', $url);
      $url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
      $url = preg_replace('#ý|ÿ#', 'y', $url);
      $url = preg_replace('#Ý#', 'Y', $url);
       
      return ($url);
  }
  function deleExperience($usrGxTdell){    
    $delet = $bdd->prepare('DELETE FROM keep_inExperiencia WHERE GDTdell = :GDTdell');
    $delet->execute(array('GDTdell' => $usrGxTdell)) or die(print_r($delet->errorInfo()));
  }
  function deleteDataList($tabelName, $idElement)
  {
    # code...
    $deleteList = $bdd->prepare('DELETE FROM '.$tabelName.' WHERE id_crypt= :id_crypt');
    $deleteList->execute(array('id_crypt' => $idElement)) or die(print_r($deleteList->errorInfo())); 
  }
  function adOrUpdateURL($variable, $newval)
  {
    # code...
    if( !count($_GET) ) {
     header('Location: ?'.$variable. '=' . $newval);
     exit;
    }
    if(!isset($_GET[$variable])) {
     echo $_SERVER['REQUEST_URI'] .= '&'.$variable.'='.$newval;
    }
     //$_GET[$variable] = $newval;
  }

  $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
  $url = $base_url . $_SERVER["REQUEST_URI"];

  $canadian_states = array(
    "Alberta",
    "Colombie-Britannique",
    "Manitoba",
    "Nouveau-Brunswick",
    "Terre-Neuve-et-Labrador",
    "Nouvelle-Écosse",
    "Territoires du Nord-Ouest",
    "Nunavut",
    "Ontario",
    "Île-du-Prince-Édouard",
    "Québec",
    "Saskatchewan",
    "Yukon"
  );

  $canadian_states_original = array(
      "AB" => "Alberta",
      "BC" => "Colombie-Britannique",
      "MB" => "Manitoba",
      "NB" => "Nouveau-Brunswick",
      "NL" => "Terre-Neuve-et-Labrador",
      "NS" => "Nouvelle-Écosse",
      "NT" => "Territoires du Nord-Ouest",
      "NU" => "Nunavut",
      "ON" => "Ontario",
      "PE" => "Île-du-Prince-Édouard",
      "QC" => "Québec",
      "SK" => "Saskatchewan",
      "YT" => "Yukon"
  );
  $cookieProvinceJS = "";
  if ($_COOKIE['provinceSelected'] == 'AB') {
    $cookieProvinceJS = "Alberta";

  }elseif ($_COOKIE['provinceSelected'] == 'BC') {
    $cookieProvinceJS = "Colombie-Britannique";

  }elseif ($_COOKIE['provinceSelected'] == 'MB') {
    $cookieProvinceJS = "Manitoba";

  }elseif ($_COOKIE['provinceSelected'] == 'NB') {
    $cookieProvinceJS = "Nouveau-Brunswick";

  }elseif ($_COOKIE['provinceSelected'] == 'NL') {
    $cookieProvinceJS = "Terre-Neuve-et-Labrador";

  }elseif ($_COOKIE['provinceSelected'] == 'NS') {
    $cookieProvinceJS = "Nouvelle-Écosse";

  }elseif ($_COOKIE['provinceSelected'] == 'NT') {
    $cookieProvinceJS = "Territoires du Nord-Ouest";

  }elseif ($_COOKIE['provinceSelected'] == 'NU') {
    $cookieProvinceJS = "Nunavut";

  }elseif ($_COOKIE['provinceSelected'] == 'BC') {
    $cookieProvinceJS = "Colombie-Britannique";

  }elseif ($_COOKIE['provinceSelected'] == 'ON') {
    $cookieProvinceJS = "Ontario";

  }elseif ($_COOKIE['provinceSelected'] == 'PE') {
    $cookieProvinceJS = "Île-du-Prince-Édouard";

  }elseif ($_COOKIE['provinceSelected'] == 'QC') {
    $cookieProvinceJS = "Quebec";

  }elseif ($_COOKIE['provinceSelected'] == 'SK') {
    $cookieProvinceJS = "Saskatchewan";

  }elseif ($_COOKIE['provinceSelected'] == 'YT') {
    $cookieProvinceJS = "Yukon";

  }else {
    $cookieProvinceJS = "-- Ville --";
  }

  /*/ SERVER DATA CONTROLE /*/
  //exec('php server-data/data-get-server.php');
  //exec('wc -w server-data/data-get-server.php');
  function JsonToArray($jsonFileInput) {
      $str = file_get_contents($jsonFileInput);
      $json = json_decode($str, true);
      return $json;
  }
  $articlesugestions    = 'server-data/json-files/1-sugesteFinal.json';  
  $articlesugestions2   = 'server-data/json-files/2-sugesteFinal.json';
  $arrayGetSugestions   = JsonToArray($articlesugestions);
  $arrayGetSugestion2   = JsonToArray($articlesugestions2);
  
  
?>
<!DOCTYPE html>
<html lang="fr">

<?php require'app/views/head.php'; ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1447637543996671",
          enable_page_level_ads: true
     });
</script>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <?php 
          require'app/views/canadian_cities.php';
          require'app/views/menu.php';
          
          $action = $_GET['/p'];
          if ($action == "" || $action == 'fr-gn' || $action == '5435435uty') {
            $title = "Accueil Sendas.ca achats et ventes sur le site d'annonces Canadien et international |  Sendas.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
            require'app/views/top_after_menu.php';
            require'app/views/body_home.php';
          }
          elseif ($action == 'details') {
            # code...            
            require'app/controler/filtre-details-produit.php';
            //$title = "Détails produit |  Senda.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
          }
          elseif ($action == 'list-products') {
            # code...
            require'app/views/lister-produit.php';
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
          }
          elseif ($action == 'public-annonce') {
            # code...
            $title = "Publier l'annonce |  Senda.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
            require'app/views/publier-annonce.php';
          }
          elseif ($action == 'categoria-group-annonce') {
            # code...
            require'app/views/categoria-group-annonce.php';
            //$title = "Publier l'annonce |  Senda.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
          }
          elseif ($action == 'usr') {
            # code...
            require'app/user/usr-compte.php';
            $title = $_SESSION['G47R-FST'].' '.$_SESSION['G47R-LST'] ."  |  Sendas.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
          }
          elseif ($action == 'store') {
            # code...
            require'app/store/store-page.php';
            $title_ = $_SESSION['G47R-FST'].' '.$_SESSION['G47R-LST'] ." ";
             $title = "Store ".$title_." Sendas.ca achats et ventes sur le site d'annonces Canadien et international |  Sendas.ca";
            echo (!empty($title))?'<title>'. $title .'</title>':'<title>Bienvenue à Senda</title>';
          }
           
     ?>

      <!-- FOOTER -->
     <?php 
          require'app/views/footer.php';           
     ?>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script> 
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>