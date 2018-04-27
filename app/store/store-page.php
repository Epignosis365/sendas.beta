<link rel="stylesheet" type="text/css" href="css/store-page.css">
<script type="text/javascript">
	$(document).ready(function() {
		//$('.carousel').carousel({interval: 5000});
	});
</script>
<script type="text/javascript">
      $(document).ready( function() {
          $('#Carousel-example').carousel({
                interval:   5000
           });
          $('#Carousel-2').carousel({
                interval:   3000
           });
          $('#myCarousel-store').carousel({
                interval:   4000
           });

           
           var clickEvent = false;
           $('#Carousel-2').on('click', '.nav a', function() {
                     clickEvent = true;
                     $('.nav li').removeClass('active');
                     $(this).parent().addClass('active');         
           }).on('slid.bs.Carousel-2', function(e) {
                if(!clickEvent) {
                     var count = $('.nav').children().length -1;
                     var current = $('.nav li.active');
                     current.removeClass('active').next().addClass('active');
                     var id = parseInt(current.data('slide-to'));
                     if(count == id) {
                          $('.nav li').first().addClass('active');     
                     }
                }
                clickEvent = false;
           });
      });
 </script>
<style type="text/css">
  #menu-top1 {display: none;}
  #menu-top2 {
    padding-top: 5px;
    padding-bottom: 0px;
    display: ;
  }
</style>

 <div class="container-fluid bar-info-store">
 	<div class="col-md-12 row">
 		<div class="col-md-3" style="border-right: 1px solid #e5e5e5;">
 			<ul class="list-inline pull-left">
	            <li class="list-inline-item">
	            	<a class="Premium-store" style="background-color: #;display: ;">
	            		<img src="images/icons/Magzter-QR-code-Gold.png" style="width: 70px;padding: 0px;margin-top: -3PX;">
	            	</a>
	            </li>
	            <li class="list-inline-item">
	            	<h2 class="text-left" style=";font-size: 18px;font-weight: 400;color: #c8ac55;margin-top: 5px;font-family: ubuntu;letter-spacing: .1px;line-height: 22px;">
	            		<small class="text-left" style=";font-size: 11px;font-weight: 400;color: #575858;margin-top: 0px;font-family: arial;margin: 0px;">
	                    Officièl
	                	</small><br>
	                    PREMIUM
	                    
	                </h2>
	                
	            </li>            
	        </ul>
 		</div>
 		<div class="col-md-9" style="background-color: #FFF;">
 			<ul class="list-inline pull-left" style="display: none;">
 				<li class="list-inline-item pull-left" style="padding-top: 5px;">
	      			<img src="images/icons/QR_with_URL_to_article_about_QR-code_(Swedish).svg.png" style="width: 60px;padding: 5px;">
	      		</li>
	      	</ul>
 			<ul class="list-inline pull-right">
 				<li class="list-inline-item pull-left" style="padding-top: 5px;">
	      			<img src="images/icons/Magzter-QR-code-Gold.png" style="width: 70px;padding: 0px;margin-top: -3PX;display: none;">
	      		</li>
	      		<li class="list-inline-item pull-left" style="display: ;">
	      			<img src="images/icons/index-logo.png" style="width: 120px;padding: 0px;">
	      		</li>
	            <li class="list-inline-item pull-left">
	            	<label class="text-left" style=";font-size: 20px;font-weight: 400;color: #383838;padding-top: 20px;font-family: arial;margin: 0px;">
	                    BOBO BIRD Official Store 
	                </label>
	            </li>
	      	</ul>
 		</div>      	
 	</div>
</div>

<div class="container-fluid" style="margin-top: 10px;margin-bottom: 0px;padding: 0px; background-color: #FFF;border-bottom: px solid #dcc268;">
	<div class="col-md-3" style="padding: 5px;background-color: #e5ca6f;border-bottom: 0px solid #e5ca6f;">
		<div class="col-md-2">
			<img src="images/icons/index-logo.png" style="width: 45px;margin-top: 7px;">
		</div>
		<div class="col-md-10" style="padding-right: 0px;">
			<h2 class="top-product-distaque text-left" style="">
                Experimenté Premium
            </h2>
		</div>
	</div>
	<div class="col-md-9" style="padding: 0px;background-color: #FFF;border-top: 0px solid #d6bb68;border-bottom: 0px solid #d6bb68;padding-top: 5px;">
		<div class="col-md-2">
			<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
		</div>
		<div class="col-md-10 " style="padding-right: 0px;">
			<h2 class="top-product-distaque text-right" style="">
                <a href="#">Editer</a>
            </h2>
		</div>
	</div>
	<div class="col-md-12" style="padding: 0px;">
		<div class="col-md-3" style="border-right: 1px solid #;padding: 0px;padding-right: 0px;background-color: #fbfbfb">
			<div class="col-md-12" style="padding: 0px;background-color: #fbfbfb;margin-top: 0px;">
				<div class="col-md-12" style="padding: 2px;">
					<center>
						<div class="content-image-distaque">
			            	<img class="img-responsive" src="images/icons/premium-sendas.png" style="width: ;margin-bottom: 5px;">
						</div>
					</center>
					<h2 class="titre-grp-store-2 text-center">
                        <a href="#">Nouveaux arrivées (2018)</a>
                        <i class="fa fa-qrcode pull-right"></i></h2>
				</div>
				<div class="col-md-12" style="padding: 2px;">
					<div class="content-image-distaque">
						<a href="#"><img src="images/brute/HTB1a_oeQXXXXXb7XFXXq6xXFXXXw.jpg" class="img-responsive_"></a>
					</div>
					<h2 class="titre-grp-store-2 text-center">
                        <a href="#">Nouvelles marques (Avril 2018)</a>
                        <i class="fa fa-qrcode pull-right"></i></h2>
				</div>
			</div>			
		</div>
		<div class="col-md-9" style="background-color: #FFF;padding: 0px;padding-top: 0px;">
			<div id="myCarousel-store" class="carousel  slide">
			  	<!-- Dot Indicators -->
			  	<ol class="carousel-indicators">
				    <li data-target="#myCarousel-store" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel-store" data-slide-to="1"></li>
				    <li data-target="#myCarousel-store" data-slide-to="2"></li>
			  	</ol>
			  	<!-- Items -->
				<div class="carousel-inner">
				    <div class="active item"> 
				    	<img src="images/brute/HTB1yJ_Je8LN8KJjSZPhq6A.spXa3.jpg" class="img-responsive">
				    </div>
				    <div class="item">  
				    	<img src="images/brute/HTB1r0z9ch9YBuNjy0Ffq6xIsVXa7.jpg" class="img-responsive">
				    </div>
				    <div class="item">  
				    	<img src="images/brute/HTB1O7zbejgy_uJjSZKPq6yGlFXaf.jpg" class="img-responsive">
				    </div>
				</div>
				<!-- Navigation 
			   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		            <span class="glyphicon glyphicon-chevron-left"></span>
		        </a>
		        <a class="right carousel-control" href="#myCarousel" data-slide="next">
		            <span class="glyphicon glyphicon-chevron-right"></span>
		        </a>
		        -->
			</div>
			<div class="col-md-12" style="padding: 0px;padding-bottom: 5px; background-color: #FFF;border-top: 0px solid #d6bb68;border-bottom: 0px solid #d6bb68;">
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
				<div class="col-md-2">
					<img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="padding: 0px;">
     <a href="#"><div class="separateur-up-store-1"></div></a>
</div>

<div class="container-fluid" style="background-color: transparent;padding: 0px;padding-top: 30px;">
	<div class="col-md-12">
        <div id="Carousel-2" class="carousel slide">
         
            <ol class="carousel-indicators">
                <li data-target="#Carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel-2" data-slide-to="1"></li>
                <li data-target="#Carousel-2" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
                <div class="row">
                  
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/wood-paneling-apartment.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/HTB1ZPD_axPI8KJjSspoq6x6MFXak5875.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/sakura-crossing-apartments-exterior.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                </div><!--.row-->
            </div><!--.item-->
             
            <!-- item two-->
            <div class="item">
                <div class="row">
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/yyYPhEP.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/UTB8xQLWoqrFXKJk43Ovq6ybnpXah6f.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/sakura-crossing-apartments-exterior.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>
                </div><!--.row-->
            </div><!--.item Alienware-Logo.jpg -->
             
            <div class="item">
                <div class="row">
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/BMW_X6_Wallpaper_1600x1200_11.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/UTB8xQLWoqrFXKJk43Ovq6ybnpXah6f.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/Alienware-Logo.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>
                </div><!--.row-->
            </div><!--.item-->
             
            </div>
            <!--.carousel-inner
                <a data-slide="prev" href="#Carousel-2" class="left carousel-control">‹</a>
                <a data-slide="next" href="#Carousel-2" class="right carousel-control">›</a>-->
        </div><!--.Carousel-->
        
    </div>
</div>

<div class="container-fluid" style="padding: 0px;">
     <a href="#"><div class="separateur-up-store-2"></div></a>
</div>

<div class="container-fluid" style="background-color: #FFF;padding: 0px;padding-top: 10px;">
    <div class="container-fluid" style="padding-bottom: 20px;">
		<div class="col-md-12">
			<div class="row">
	            <div class="col-md-10">
	                <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 20px;">
	                    VOS ANNONCES/PRODUITS <br>
	                    <small style="font-size: 0.6em;">Les meilleurs <b>annonces</b> par catégories basés sur les centres d'intérêt</small></h3> 
	            </div>
	            <div class="col-md-2" style="padding-bottom: 10px;">
	                <!-- Controls -->	                
	                <div class="controls pull-right hidden-xs">
	                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
	                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
	                            data-slide="next"></a>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-12">
                <div id="Carousel-example" class="carousel slide">
                 
	                <ol class="carousel-indicators" style="margin-top: 150px;">
	                    <li data-target="#Carousel-example" data-slide-to="0" class="active"></li>
	                    <li data-target="#Carousel-example" data-slide-to="1"></li>
	                    <li data-target="#Carousel-example" data-slide-to="2"></li>
	                </ol>
	                 
	                <!-- Carousel items -->
	                <div class="carousel-inner">
	                    
	                <div class="item active">
	                	<div class="row">
	                		<div class="col-sm-3 item-col-3" style="">
                        <div class="col-item">
                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                    <img src="https://ae01.alicdn.com/kf/HTB1ALB6a9CWBuNjy0Fhq6z6EVXa1.jpg" class="img-responsive" alt="a" />
                                </a>
                            </div>
                            <div class="col-md-12" style="padding: 0px;
                            margin-top: 10px;">
                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                            </div>
                            <div class="info">
                                <div class="row">
                                </div>
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
                                    <p class="btn-details">
                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-3 item-col-3" style="">
                        <div class="col-item">
                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                    <img src="https://ae01.alicdn.com/kf/HTB1DDtla3mTBuNjy1Xbq6yMrVXab.jpg" class="img-responsive" alt="a" />
                                </a>
                            </div>
                            <div class="col-md-12" style="padding: 0px;
                            margin-top: 10px;">
                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                            </div>
                            <div class="info">
                                <div class="row">
                                </div>
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                        <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
                                    <p class="btn-details">
                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 item-col-3" style="">
                        <div class="col-item">
                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                    <img src="https://ae01.alicdn.com/kf/HTB1IPtuRXXXXXXXXpXXq6xXFXXXj.jpg" class="img-responsive" alt="a" />
                                </a>
                            </div>
                            <div class="col-md-12" style="padding: 0px;
                            margin-top: 10px;">
                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                            </div>
                            <div class="info">
                                <div class="row">
                                </div>
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                        <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
                                    <p class="btn-details">
                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 item-col-3" style="">
                        <div class="col-item">
                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                    <img src="https://ae01.alicdn.com/kf/HTB1YFSuaQSWBuNjSszdq6zeSpXaL.jpg" class="img-responsive" alt="a" />
                                </a>
                            </div>
                            <div class="col-md-12" style="padding: 0px;
                            margin-top: 10px;">
                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                            </div>
                            <div class="info">
                                <div class="row">
                                </div>
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                        <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
                                    <p class="btn-details">
                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>	                	 
	                	</div><!--.row-->
	                </div><!--.item-->
	                 
	                <div class="item">
	                	<div class="row">
	                		<div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1QqxlXP7nBKNjSZLeq6zxCFXaE.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
	                		<div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1b2vwQVXXXXcxXVXXq6xXFXXXv/Promise-Ring-Personalized-Custom-Birthstone-Ring-Engrave-Name-925-Sterling-Silver-Heart-Lover-s-Gift-Rings.jpg_350x350.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
	                		<div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1r_NIhbsTMeJjy1zcq6xAgXXad/Classic-Heart-Shape-Blue-Opal-Stone-Stud-Earrings-100-925-Sterling-Silver-Fashion-Jewelry-Gift-For.jpg_350x350.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1QNN2a79WBuNjSspeq6yz5VXa3.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
	                	</div><!--.row-->
	                </div><!--.item-->
	                 
	                <div class="item">
	                	<div class="row">
	                		<div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1lTshaNSYBuNjSspjq6x73VXa6.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB132USl3oQMeJjy0Fpq6ATxpXaz.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1rtXIc138SeJjSZFPq6A_vFXa3.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-3 item-col-3" style="">
		                        <div class="col-item">
		                            <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
		                                <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
		                                    <img src="https://ae01.alicdn.com/kf/HTB1PDOmb7OWBuNjSsppq6xPgpXa2.jpg" class="img-responsive" alt="a" />
		                                </a>
		                            </div>
		                            <div class="col-md-12" style="padding: 0px;
		                            margin-top: 10px;">
		                                <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
		                            </div>
		                            <div class="info">
		                                <div class="row">
		                                </div>
		                                <div class="separator clear-left">
		                                    <p class="btn-add">
		                                        <a href="#" class="hidden-sm">35.00$CA</a></p>
		                                    <p class="btn-details">
		                                        <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
		                                </div>
		                                <div class="clearfix">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
	                	</div><!--.row-->
	                </div><!--.item-->
	                 
	                </div><!--.carousel-inner
	                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
	                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>-->
	            </div><!--.Carousel-->
			</div>			
	</div>
</div><!-- /.container -->

<div class="container-fluid" style="padding: 0px;">
     <a href="#"><div class="separateur-up-store-3"></div></a>
</div>

<div class="container-fluid" style="background-color: transparent;padding: 0px;padding-top: 30px;">
	<div class="col-md-12">
        <div id="Carousel" class="carousel slide">
         
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
                <div class="row">
                  
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/wood-paneling-apartment.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/HTB1ZPD_axPI8KJjSspoq6x6MFXak5875.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/sakura-crossing-apartments-exterior.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                </div><!--.row-->
            </div><!--.item-->
             
            <!-- item two-->
            <div class="item">
                <div class="row">
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/yyYPhEP.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/UTB8xQLWoqrFXKJk43Ovq6ybnpXah6f.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/sakura-crossing-apartments-exterior.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>
                </div><!--.row-->
            </div><!--.item Alienware-Logo.jpg -->
             
            <div class="item">
                <div class="row">
                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;margin-left: 5px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/BMW_X6_Wallpaper_1600x1200_11.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: 0.1px;margin-top: 10px;margin-left: 5px;font-family: Ubuntu;">300 000 $CA <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/UTB8xQLWoqrFXKJk43Ovq6ybnpXah6f.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">Prochainement <small>
                            Gagnez des coupons et ajoutez des articles dans votre panier
                        </small></h3>
                    </div>

                    <div class="col-md-4" style="padding: 10px;">
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.5em;letter-spacing: .1px;line-height: 18px;">Le Coin D'AUBAINES <br>
                            <label style="font-size: 11px;font-weight: 300;font-family: Ubuntu;">Découvrez le meilleur des annonces sur <b>Sendas.ca</b></label>
                        </h3>
                        <div class="content-img-top">
                            <img class="img-responsive img-top-line" src="images/brute/Alienware-Logo.jpg">
                        </div>
                        <h3 style="color: #383838;padding-bottom: 10px;font-size: 1.2em;letter-spacing: .1px;margin-top: 10px;">En promotion <small>
                            Ne manquez ces promos sous aucun pretexte
                        </small></h3>
                    </div>
                </div><!--.row-->
            </div><!--.item-->
             
            </div>
            <!--.carousel-inner
                <a data-slide="prev" href="#Carousel-2" class="left carousel-control">‹</a>
                <a data-slide="next" href="#Carousel-2" class="right carousel-control">›</a>-->
        </div><!--.Carousel-->
        
    </div>
</div>

<div class="container-fluid" style="padding: 0px;">
	<div class="col-md-12" style="padding: 0px;padding-bottom: 5px; background-color: #FFF;border-top: 1px solid #d6bb68;border-bottom: 1px solid #d6bb68;">
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
		<div class="col-md-2">
			<center><img src="images/logo-bk.png" style="width: 75px;margin-top: 2px;"></center>
		</div>
	</div>
</div>
<!--
<div class="container-fluid" style="padding: 0px;">
     <a href="#"><div class="separateur-up-store-1"></div></a>
</div>
-->

<div class="container-fluid" style="background-color: #fbfbfb;padding: 0px;padding-top: 20px;">
    <div class="container-fluid" style="padding-bottom: 20px;">
		<div class="item active">
	    	<div class="row">
				<div class="col-sm-3 item-col-3" style="">
	                <div class="col-item">
	                    <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
	                        <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
	                            <img src="https://ae01.alicdn.com/kf/HTB1ALB6a9CWBuNjy0Fhq6z6EVXa1.jpg" class="img-responsive" alt="a" />
	                        </a>
	                    </div>
	                    <div class="col-md-12" style="padding: 0px;
	                    margin-top: 10px;">
	                        <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
	                    </div>
	                    <div class="info">
	                        <div class="row">
	                        </div>
	                        <div class="separator clear-left">
	                            <p class="btn-add">
	                                <a href="#" class="hidden-sm">35.00$CA</a></p>
	                            <p class="btn-details">
	                                <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
	                        </div>
	                        <div class="clearfix">
	                        </div>
	                    </div>
	                </div>
	            </div>
				<div class="col-sm-3 item-col-3" style="">
	                <div class="col-item">
	                    <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
	                        <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
	                            <img src="https://ae01.alicdn.com/kf/HTB1DDtla3mTBuNjy1Xbq6yMrVXab.jpg" class="img-responsive" alt="a" />
	                        </a>
	                    </div>
	                    <div class="col-md-12" style="padding: 0px;
	                    margin-top: 10px;">
	                        <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
	                    </div>
	                    <div class="info">
	                        <div class="row">
	                        </div>
	                        <div class="separator clear-left">
	                            <p class="btn-add">
	                                <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
	                            <p class="btn-details">
	                                <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
	                        </div>
	                        <div class="clearfix">
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-3 item-col-3" style="">
	                <div class="col-item">
	                    <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
	                        <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
	                            <img src="https://ae01.alicdn.com/kf/HTB1IPtuRXXXXXXXXpXXq6xXFXXXj.jpg" class="img-responsive" alt="a" />
	                        </a>
	                    </div>
	                    <div class="col-md-12" style="padding: 0px;
	                    margin-top: 10px;">
	                        <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
	                    </div>
	                    <div class="info">
	                        <div class="row">
	                        </div>
	                        <div class="separator clear-left">
	                            <p class="btn-add">
	                                <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
	                            <p class="btn-details">
	                                <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
	                        </div>
	                        <div class="clearfix">
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-3 item-col-3" style="">
	                <div class="col-item">
	                    <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
	                        <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
	                            <img src="https://ae01.alicdn.com/kf/HTB1YFSuaQSWBuNjSszdq6zeSpXaL.jpg" class="img-responsive" alt="a" />
	                        </a>
	                    </div>
	                    <div class="col-md-12" style="padding: 0px;
	                    margin-top: 10px;">
	                        <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
	                    </div>
	                    <div class="info">
	                        <div class="row">
	                        </div>
	                        <div class="separator clear-left">
	                            <p class="btn-add">
	                                <i class="fa fa-heart-o"></i><a href="#" class="hidden-sm">Add favoris</a></p>
	                            <p class="btn-details">
	                                <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
	                        </div>
	                        <div class="clearfix">
	                        </div>
	                    </div>
	                </div>
	            </div>
	    	</div><!--.row-->
	    </div><!--.item-->

	    <div class="item">
        	<div class="row">
        		<div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1lTshaNSYBuNjSspjq6x73VXa6.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB132USl3oQMeJjy0Fpq6ATxpXaz.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1rtXIc138SeJjSZFPq6A_vFXa3.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1PDOmb7OWBuNjSsppq6xPgpXa2.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
        	</div><!--.row-->
        </div><!--.item-->

		<div class="item">
        	<div class="row">
        		<div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1QqxlXP7nBKNjSZLeq6zxCFXaE.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1b2vwQVXXXXcxXVXXq6xXFXXXv/Promise-Ring-Personalized-Custom-Birthstone-Ring-Engrave-Name-925-Sterling-Silver-Heart-Lover-s-Gift-Rings.jpg_350x350.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1r_NIhbsTMeJjy1zcq6xAgXXad/Classic-Heart-Shape-Blue-Opal-Stone-Stud-Earrings-100-925-Sterling-Silver-Fashion-Jewelry-Gift-For.jpg_350x350.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 item-col-3" style="">
                    <div class="col-item">
                        <div class="photo" style="max-height: 250px;min-height: 250px; overflow: hidden;">
                            <a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">
                                <img src="https://ae01.alicdn.com/kf/HTB1QNN2a79WBuNjSspeq6yz5VXa3.jpg" class="img-responsive" alt="a" />
                            </a>
                        </div>
                        <div class="col-md-12" style="padding: 0px;
                        margin-top: 10px;">
                            <h2 class="titre-grp text-left"><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>">Femmes 100% 925 Bague En Argent Sterling Avec Carré Bleu Opale Pierre Océan Style Éléga</a></h2>
                        </div>
                        <div class="info">
                            <div class="row">
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <a href="#" class="hidden-sm">35.00$CA</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="?/p=details&?id=<?= base64_encode($id_annonce)."&?ts=".base64_encode($categories) ?>" class="hidden-sm">Plus details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
        	</div><!--.row-->
        </div><!--.item-->

	</div>
</div>