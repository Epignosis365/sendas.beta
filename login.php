<!DOCTYPE html>
<html lang="fr">

<?php require'app/views/head.php'; ?>
<style type="text/css">#menu-top1 {display: ;margin-top: }</style>
<link rel="stylesheet" type="text/css" href="css/login.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript">
  function SubmitFormDataLogin() {
      var inputUsernameEmail = $("#inputUsernameEmail").val();
      var inputPassword = $("#inputPassword").val();
      var souvienMoi = document.getElementById("souvienMoi").checked;

      $.post("app/model/str-login.php", { inputUsernameEmail: inputUsernameEmail, inputPassword: inputPassword, souvienMoi: souvienMoi },
      function(data) {
      $('#results_login').html(data);
      //$('#in-Sysform')[0].reset();
      });
  }
</script>

<style type="text/css">
  #menu-top1 {display: none;}
  #menu-top2 {
    padding-top: 5px;
    padding-bottom: 0px;
  }
</style>

<body>

     <?php 
          require'app/views/canadian_cities.php';
          require'app/views/menu.php';           
     ?>
     <div class="container-fluid" style="margin: 10px;margin-bottom: 40px;margin-top: 10px;">
          <div class="row_">
              <div class="col-md-12" style="background-color: #fbfbfb;">
                <div class="col-xs-12 col-sm-6 col-md-8 " style="background-color: #;padding: 10px 0px 20px 20px;">
                  <center><img class="img-responsive center" src="images/icons/premium-sendas.png" style="width: ;margin: auto 0px;">
                  <label style="display: none;" class="btnTextPremiumLogin text-center"><?= 'Experimentez à 0.00$CA' ?></label>
                  <label class="text-center" style="width: 50%; font-size: 11px;font-weight: 300;color: #020202;margin-top: 10px;font-family: ;">
                    Par defaut Sendas.ca offre une compte prémium à toute première inscription. Cela à un temps fini. Pour en savoir plus, veuillez consulter nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>  après votre inscription.</label>

                    <label style="width: 90%;display: none; font-size: 11px;font-weight: 300;color: #575858;margin-top: 20px;">
                     En cliquant sur <i>Ouvrir une session</i>, vous acceptez nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>, notre <a href="#" style="color: #1275c8;">Politique de confidentialité</a> et nos <a href="#" style="color: #1275c8;">Règles d’affichage</a>. Veuillez ne pas publier vos annonces en double. Utilisez plutôt les options de mise en vente pour améliorer votre visibilité.</b>
                      </label>

                    <label style="display: none;" class="btnTextPremiumLoginEnter_ text-center"><a href="inscription.php?/=<?= base64_encode(sha1('DF58'))?>" class="btnTextPremiumLoginEnterA"><?= 'Je ne possède pas encore une compte' ?></a></label>
                    </center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 main pull-right" style="background-color: #;">
                  <legend>
                      <h2 class="legend-inscription">
                        <img src="images/icons/premium-1sendas.png" style="width: 50px;">
                        Ouvrire une session
                        <small>
                        <a href="inscription.php?/=<?= base64_encode(sha1('DF58'))?>" style="font-size: .9em;margin-top: 15px;margin-right: 5px;color: #1275c8;" class="pull-left"><?= 'Je ne possède pas encore une compte' ?></a>
                      </small>
                     </h2>
                  </legend>
                  <br>
                  <br>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Facebook</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i> Google</a>
                    </div>
                  </div>
                  <div class="login-or">
                    <hr class="hr-or">
                    <span class="span-or">ou</span>
                  </div>

                  <form role="form">
                    <div id="results_login"></div>
                    <div class="form-group">
                      <label for="inputUsernameEmail">Nom d'utilisateur ou email</label>
                      <input type="text" class="form-control" id="inputUsernameEmail" value="<?php if(isset($_COOKIE['u235'])) { echo $_COOKIE['u235']; } ?>">
                    </div>
                    <div class="form-group">
                      <a class="pull-right" href="#">Mot de passe oublié?</a>
                      <label for="inputPassword">Mot de passe</label>
                      <input type="password" class="form-control" id="inputPassword" value="<?php if(isset($_COOKIE['u237'])) { echo $_COOKIE['u237']; } ?>">
                    </div>
                    <div class="checkbox pull-left">
                      <label>
                        <input type="checkbox" id="souvienMoi" value="checker" value="<?php if(isset($_COOKIE['auto_connecte'])) { echo "value='checked'"; } ?>">
                        Souviens-toi de moi </label>
                    </div>
                    <label style="font-size: 11px;font-weight: 300;color: #575858;">
                     En cliquant sur <i>Ouvrir une session</i>, vous acceptez nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>, notre <a href="#" style="color: #1275c8;">Politique de confidentialité</a> et nos <a href="#" style="color: #1275c8;">Règles d’affichage</a>. Veuillez ne pas publier vos annonces en double. Utilisez plutôt les options de mise en vente pour améliorer votre visibilité.</b>
                      </label>
                    <button type="button" class="btn btn btn-success pull-right" onclick="SubmitFormDataLogin()">
                      Ouvrir une session
                    </button>
                  </form>
                  <br>
                  <br>
                </div>
              </div>
          </div>
      </div>


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