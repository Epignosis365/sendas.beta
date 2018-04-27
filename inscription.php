<!DOCTYPE html>
<html lang="fr">

<?php require'app/views/head.php'; ?>
<style type="text/css">#menu-top1 {display: ;}</style>
<link rel="stylesheet" type="text/css" href="css/inscription.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
    function SubmitFormDataInscription() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var youremail = $("#youremail").val();
        var reenteremail = $("#reenteremail").val();
        var password = $("#password").val();

        $.post("app/model/str-inscription.php", { firstname: firstname, lastname: lastname, youremail: youremail, reenteremail: reenteremail, password: password },
        function(data) {
        $('#results_inscription').html(data);
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
     <div class="container">
        <div class="main premium-interface">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 " style="background-color: #;padding: 10px 0px 20px 20px;">
                  <img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;width: ;">
                  <label class="btnTextPremiumLogin text-center"><?= 'Experimentez à 0.00$CA' ?></label>
                  <label class="text-center" style="font-size: 12px;font-weight: 300;color: #020202;margin-top: 10px;font-family: ubuntu;">
                    Par defaut Sendas.ca offre une compte prémium à toute première inscription. Cela à un temps fini. Pour en savoir plus, veuillez consulter nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>  après votre inscription.</label>

                    <label class="btnTextPremiumLoginEnter text-center"><a href="login.php?/=<?= base64_encode('DYPDKKFJGB7e0dg547fg57fg75?ZL58510385hjsy5FIZQV5?56F5DFF5DAOE?B5832Zc785f4')?>" class="btnTextPremiumLoginEnterA"><?= 'Je possède déja une compte' ?></a></label>
              </div>
              <div class="col-md-1"></div>
              <div>
                  <div class="col-xs-12 col-sm-6 col-md-6 well well-sm" style="background-color: #fbfbfb;border-radius: 1px;">
                    <legend>
                      <h2 class="legend-inscription">
                        <img src="images/icons/premium-1sendas.png" style="width: 50px;">
                        Inscription
                        <small>
                        <a href="login.php?/=<?= base64_encode('DYPDKKFJGB7e0dg547fg57fg75?ZL58510385hjsy5FIZQV5?56F5DFF5DAOE?B5832Zc785f4')?>" style="font-size: .8em;margin-top: 15px;margin-right: 5px;color: #1275c8;" class="pull-right"><?= 'Je possède déja une compte' ?></a>
                      </small>
                     </h2>
                    </legend>
                    <form action="#" method="post" class="form corps-form-inscription" role="form">
                    <div id="results_inscription"></div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label style="font-size: 11px;font-weight: 300;color: #020202;">
                              <b>Nom</b></label>
                            <input class="form-control" name="firstname" id="firstname" placeholder="Nom" type="text"
                                 autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <label style="font-size: 11px;font-weight: 300;color: #020202;">
                              <b>Prénom</b></label>
                            <input class="form-control" name="lastname" id="lastname" placeholder="Prénom" type="text"  />
                        </div>
                    </div>
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>E-mail</b></label>
                    <input class="form-control" name="youremail" id="youremail" placeholder="Votre Email" type="email" />
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>Saisissez à nouveau votre e-mail</b></label>
                    <input class="form-control" name="reenteremail" id="reenteremail" placeholder="Confirmer votre Email" type="email" />
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>Mot de passe</b></label>
                    <input class="form-control" name="password" id="password" placeholder="Mot de passe" type="password" />
                    
                    <div class="col-md-12" style="padding: 0px;">
                      <label style="font-size: 11px;font-weight: 300;color: #575858;">
                     En cliquant sur <i>Je m'inscris à Sendas.ca</i>, vous acceptez nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>, notre <a href="#" style="color: #1275c8;">Politique de confidentialité</a> et nos <a href="#" style="color: #1275c8;">Règles d’affichage</a>. Veuillez ne pas publier vos annonces en double. Utilisez plutôt les options de mise en vente pour améliorer votre visibilité.</b>
                      </label>                
                    </div>
                    <div class="col-md-12" style="padding: 0px;padding-top: 20px;padding-bottom: 10px;">
                      <button type="button" style="margin-left: 10px;" class="btn btn-success pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataInscription();">Je m'inscris à Sendas.ca </button>

                      <button type="button" class="btn btn-default pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataAnnuler();">Annuler </button>
                  </div>
                    <!--
                    <br />
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="SubmitFormDataInscription()">
                        S'inscrire</button>-->
                    </form>
                </div>
              </div>
          </div>
        </div>

        <!-- PROFIL BOUTIQUE -->
        <div class="main" style="display: none;">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 " style="background-color: #;padding: 10px 0px 20px 20px;">
                  <img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;width: ;">
                  <label class="btnTextPremiumLogin text-center"><?= 'Experimentez à 0.00$CA' ?></label>
                  <label class="text-center" style="font-size: 12px;font-weight: 300;color: #020202;margin-top: 10px;font-family: ubuntu;">
                    Par defaut Sendas.ca offre une compte prémium à toute première inscription. Cela à un temps fini. Pour en savoir plus, veuillez consulter nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>  après votre inscription.</label>

                    <label class="btnTextPremiumLoginEnter text-center"><a href="login.php?/=<?= base64_encode('DYPDKKFJGB7e0dg547fg57fg75?ZL58510385hjsy5FIZQV5?56F5DFF5DAOE?B5832Zc785f4')?>" class="btnTextPremiumLoginEnterA"><?= 'Je possède déja une compte' ?></a></label>
              </div>
              <div class="col-md-1"></div>
              <div>
                  <div class="col-xs-12 col-sm-6 col-md-6 well well-sm" style="background-color: #fbfbfb;border-radius: 1px;">
                    <legend>
                      <h2 class="legend-inscription">
                        <img src="images/icons/premium-1sendas.png" style="width: 50px;">
                        Inscription
                        <small>
                        <a href="login.php?/=<?= base64_encode('DYPDKKFJGB7e0dg547fg57fg75?ZL58510385hjsy5FIZQV5?56F5DFF5DAOE?B5832Zc785f4')?>" style="font-size: .8em;margin-top: 15px;margin-right: 5px;color: #1275c8;" class="pull-right"><?= 'Je possède déja une compte' ?></a>
                      </small>
                     </h2>
                    </legend>
                    <form action="#" method="post" class="form corps-form-inscription" role="form">
                    <div id="results_inscription"></div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label style="font-size: 11px;font-weight: 300;color: #020202;">
                              <b>Nom</b></label>
                            <input class="form-control" name="firstname" id="firstname" placeholder="Nom" type="text"
                                 autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <label style="font-size: 11px;font-weight: 300;color: #020202;">
                              <b>Prénom</b></label>
                            <input class="form-control" name="lastname" id="lastname" placeholder="Prénom" type="text"  />
                        </div>
                    </div>
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>E-mail</b></label>
                    <input class="form-control" name="youremail" id="youremail" placeholder="Votre Email" type="email" />
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>Saisissez à nouveau votre e-mail</b></label>
                    <input class="form-control" name="reenteremail" id="reenteremail" placeholder="Confirmer votre Email" type="email" />
                    <label style="font-size: 11px;font-weight: 300;color: #020202;">
                      <b>Mot de passe</b></label>
                    <input class="form-control" name="password" id="password" placeholder="Mot de passe" type="password" />
                    
                    <div class="col-md-12" style="padding: 0px;">
                      <label style="font-size: 11px;font-weight: 300;color: #575858;">
                     En cliquant sur <i>Je m'inscris à Sendas.ca</i>, vous acceptez nos <a href="#" style="color: #1275c8;">Conditions d’utilisation</a>, notre <a href="#" style="color: #1275c8;">Politique de confidentialité</a> et nos <a href="#" style="color: #1275c8;">Règles d’affichage</a>. Veuillez ne pas publier vos annonces en double. Utilisez plutôt les options de mise en vente pour améliorer votre visibilité.</b>
                      </label>                
                    </div>
                    <div class="col-md-12" style="padding: 0px;padding-top: 20px;padding-bottom: 10px;">
                      <button type="button" style="margin-left: 10px;" class="btn btn-success pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataInscription();">Je m'inscris à Sendas.ca </button>

                      <button type="button" class="btn btn-default pull-right" id="envoyerData" name="envoyerData" onclick="SubmitFormDataAnnuler();">Annuler </button>
                  </div>
                    <!--
                    <br />
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="SubmitFormDataInscription()">
                        S'inscrire</button>-->
                    </form>
                </div>
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