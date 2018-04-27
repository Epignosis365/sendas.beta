<?php
    session_start();
    error_reporting(E_ALL);
    error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
     
    $id = $_GET['?id'];
    include_once'db/ps-config.php';
	$data_SQL = 'SELECT * FROM articles_annonces WHERE id_annonce = :id_annonce';
	$data_SQLstm = $bdd->prepare($data_SQL);
	$data_SQLstm->execute(array(
	   'id_annonce' => base64_decode($id))) or die(print_r($data_SQLstm->errorInfo()));
	$result_data = $data_SQLstm->fetch();
	$count_data  = $data_SQLstm->rowCount();
	if ($count_data < 1) {
		echo '<br><center><label class="erro-message"><i class="fa fa-close"></i> What are you <b>fucking </b> ?</label></center><br />';
	}else { 
		$id_annonceur      = $result_data['id_annonceur'];
		$titleBD           = $result_data['titre_annonce'];
		$categories        = $result_data['categories'];
		$adresse_annonceur = $result_data['adresse_annonceur'];
		$description       = $result_data['description'];
		$type_annonce      = $result_data['type_annonce'];

		$taille        = $result_data['taille'];
		$couleur       = $result_data['couleur'];
		$unite_piece   = $result_data['unite_piece'];

		$prix_marchandise  = $result_data['prix_marchandise'];
		$type_annonceur    = $result_data['type_annonceur'];
		$marque            = $result_data['marque'];
		$modele            = $result_data['modele'];
		$chambres          = $result_data['chambres'];
		$sallons           = $result_data['sallons'];
		$salleDeBains      = $result_data['salleDeBains'];
		$codePostal        = $result_data['codePostal'];
		$adress_marchanise = $result_data['adress_marchanise'];
		$numero_telephone  = $result_data['numero_telephone'];
		$photos_array      = $result_data['photos_array'];
		$date_annoncee     = $result_data['date_annoncee'];
		$time_stamp        = $result_data['time_stamp'];

		$title = $titleBD." | détails |  Senda.ca";
		$titleDown = $titleBD;

	include_once'app/controler/get_usr_infos.php';

	$array_PHOTOS = explode(',', $photos_array);
	//echo base64_encode('GD6893F760S6564D131');

	?>
<script type="text/javascript">
	function jump(h) {
	    var top = document.getElementById(h).offsetTop,
	        left = document.getElementById(h).offsetLeft;
	    var animator = createAnimator({
	        start: [0,0],
	        end: [left, top],
	        duration: 500
	    }, function(vals){
	        console.log(arguments);
	    	window.scrollTo(vals[0], vals[1]);
	    });
	    
	    //run
	    animator();
	}



	//Animator
	//Licensed under the MIT License
	function createAnimator(config, callback, done) {
	    if (typeof config !== "object") throw new TypeError("Arguement config expect an Object");

	    var start = config.start,
	        mid = $.extend({}, start), //clone object
	        math = $.extend({}, start), //precalculate the math
	        end = config.end,
	        duration = config.duration || 1000,
	        startTime, endTime;

	    //t*(b-d)/(a-c) + (a*d-b*c)/(a-c);
	    function precalculate(a, b, c, d) {
	        return [(b - d) / (a - c), (a * d - b * c) / (a - c)];
	    }

	    function calculate(key, t) {
	        return t * math[key][0] + math[key][1];
	    }

	    function step() {
	        var t = Date.now();
	        var val = end;
	        if (t < endTime) {
	            val = mid;
	            for (var key in mid) {
	                mid[key] = calculate(key, t);
	            }
	            callback(val);
	            requestAnimationFrame(step);
	        } else {
	            callback(val);
	            done && done();
	        }
	    }

	    return function () {
	        startTime = Date.now();
	        endTime = startTime + duration;

	        for (var key in math) {
	            math[key] = precalculate(startTime, start[key], endTime, end[key]);
	        }

	        step();
	    }
	}
</script>

<link rel="stylesheet" type="text/css" href="css/details-produits.css">
<div class="container" style="background-color: #; border: 0px solid #e5e5e5; margin-top: 10px;margin-bottom: 15px;">
	<div class="card" style="margin-top: ;">
		<div class="container-fliud" style="">
			<div class="row">
				<div class="preview col-md-6" style="border: 1px solid #e5e5e5;border-right: 0px solid #e5e5e5;padding: 0px;">
					
					<div class="preview-pic tab-content">
						<?php 
							$j=0;
							foreach ($array_PHOTOS as $key => $value) {
								$j++; ?>
								<div class="tab-pane active" id="<?= 'pic-'.$j ?>"><img src="produitsImages/<?= $value ?>" class="img-responsive" /></div><?php
							}
						?>
					  	<!--						
						<div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						-->
					</div>
					<ul class="preview-thumbnail nav nav-tabs">
						<?php
							$k=0;
							foreach ($array_PHOTOS as $key => $value) {
								$k=$k+1; ?>
								<li class="">
								  	<a data-target="#pic-<?= $k ?>" data-toggle="tab">
								  		<img src="produitsImages/<?= $value ?>" />
								  	</a>
							  	</li><?php
							}
						?>					  	
					  <!--
					  	<li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						-->
					</ul>			
					

				</div>
				<div class="col-md-6" style="background-color: #fff;padding-top: 15px;border: 1px solid #e5e5e5;border-bottom: 1px solid #e5e5e5;">
					<h3 class="product-title"><?= $titleDown ?></h3>
					<p class="vote"><i class="fa fa-map-marker"></i> <?= $adress_marchanise.', '.$codePostal ?> </p>				
					<div class="rating">
						<span class="review-no"><i class="fa fa-clock-o"></i> Publiée il y <?= time_elapsed_string(timestampToDate($time_stamp)); ?></span><br><span class="review-no">41 reviews</span>
						<h4 class="price">Prix actuel : <span><?= number_format($prix_marchandise,2,","," "); ?>$</span> / <?= $unite_piece ?></h4>
					</div>
					<div class="col-md-12" style="border: 1px dashed #ec2505;border-bottom: 1px dashed #ec2505; padding: 10px;display: inline-block;">
						<small class="pull-left" style="color: #ec2505;">Tailles: <span style="color: #020202;"><?= $taille ?></span></small>
						<small class="pull-right" style="color: #ec2505;">Couleur: <span style="color: #020202;"><?= $couleur ?></span></small>
					</div>
					<label style="font-size: 11px;font-weight: 300;color: #575858;">Contacter le vendeur pour plus de détails sur la couleur et la taille</label>
					<div class="row" style="border-top: 0px solid #e5e5e5;margin-bottom: 10px;margin-top: 0px; padding: 0px;background-color: #;">
						<div class="details col-md-12">
							<h4 class="description">Description</h4>
							<input type="checkbox" class="read-more-state" id="post-1" />
							<?= truncateParagrafo($description, $length=200).'...' ?>

							<a class="accordion-toggle read-more-trigger btn btn-link" data-toggle="collapse" data-parent="toggle" onclick="jump('bar-therd-contenaire')" href="#collapseDescription" style="border-top: 1px dashed #e5e5e5;border-bottom: 1px dashed #e5e5e5;border-radius: 0px; padding-top: 10px;padding-bottom: 10px;margin: 0px;margin-top: 10px;">
					       		
					      	</a>
					      	<!--
							<label for="post-1" class="read-more-trigger btn btn-link" style="border-top: 1px dashed #e5e5e5;border-bottom: 1px dashed #e5e5e5;border-radius: 0px; padding-top: 10px;padding-bottom: 10px;margin: 0px;margin-top: 10px;"></label>
							-->
							<!--
							<input type="checkbox" class="read-more-state" id="post-1" />
							<div class="read-more-wrap">
								<pre>
									<?= truncateParagrafo($description, $length=200) ?>
									<span class="read-more-target"><?= substr($description, 200); ?></span>
								</pre>
							</div>
							<label for="post-1" class="read-more-trigger btn btn-link" style="border: 0px;border-top: 1px solid #e5e5e5;border-radius: 0px; padding-top: 10px;margin: 0px;background-color: #fff;"></label>
							-->
						</div>
					</div>

					
					<!-- aria-expanded attribute is mandatory -->
					<!-- bootstrap changes it to true/false on toggle 
					<a href="#block-id" class="btn btn-link" data-toggle="collapse" aria-expanded="false" aria-controls="block-id">
						<span class="collapsed">
						  	Voir plus
						</span>
						<span class="expanded">
						  	Voir moins
						</span>
					</a>
					-->

					<div class="action" style="margin-bottom: 10px;padding-top: 15px;">						
						<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span> Ajouter aux favoris</button>
						<button class="add-to-cart btn btn-default" onclick="jump('bar-second-contenaire')"><span class="fa fa-envelope-o"></span> Envoyer un message</button>
					</div>

					<div class="col-md-12" style="border-top: 1px solid #e5e5e5;margin-top: 10px;padding: 0px;background-color: #;">
						<div class="details_ col-md-12" style="padding: 0px;">
							<label style="font-size: 11px;font-weight: 300;color: #575858;">Publié par : </label><br>
							<h3 class="product-title pull-left"><?= $nom_complet ?></h3>
							<a href="#" class="pull-right btn btn-primary" onclick="jump('bar-second-contenaire')" style="margin-top: -15px;">Afficher les contacts</a>
						</div>
					</div>
				</div>
				
			</div>
			<!--
			<br>
			<div class="col-md-12" style="border-top: 1px solid #e5e5e5;margin-top: 10px;">
				<div class="details col-md-6">
					<h3 class="product-title">Le Président, 3 1/2,CDN,Adj, Centre Ville Wsmount</h3>					
					<div class="rating">
						<span class="review-no">Publiée il y a 16 heures</span><br><span class="review-no">41 reviews</span>
						<h4 class="price">Prix actuel: <span>$180</span></h4>
						<p class="vote"><i class="fa fa-map-marker"></i> Un Logement pour tous vos besoins, Montreal, QC, H3V 1C8 </p>
					</div>
					
				</div>
			</div>
			-->
		</div>
	</div>
</div>
<div class="col-md-12" style="padding: 0px;margin: 0px;" id="bar-second-contenaire"></div>
<div class="container" style="background-color: #;margin-top: 10px;margin-bottom: 15px;padding: 0px;">
	<div class="col-md-12" style="padding: 0px;">
		<div class="col-md-12" style="padding: 15px;background-color: #fff;border: 1px solid #e5e5e5;border-bottom: 1 dashed #e5e5e5;margin-bottom: 10px;">
			<a href="#">Produits intéréssants</a>
		</div>
		<div class="details col-md-9" style="padding: 0px;background-color: #;">
			<div class="col-md-12" style="padding: 0px;background-color: #fff;border: 1px solid #e5e5e5;border-right: 0px solid #e5e5e5;">
			    <div class="col-md-12" id="content_message27" style="padding: 0px;margin-bottom: 0px;margin-top: 0px;">
			    	<div class="col-md-7" style="padding: 0px;border-right: 1px solid #e5e5e5;">
			    		<h4 class="description_complete">Contacter l'annonceur</h4>
			    		<label class="label_message_box text-center" style="">Le message retour sera envoyer à l'adresse e-mail saisis. </b></label><br>
			    		<form>
		                    <div class="col-md-5" style="padding: 0px;">
		                        <fieldset>
		                            <div class="form-group">
		                                <div class="col-md-12">
		                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b>Votre nom</b></label>
		                                    <div class="input-group">
		                                        <span class="input-group-addon beautiful">                                          
		                                        </span>
		                                        <input type="text" class="form-control" id="numeroDeRue">
		                                    </div>
		                                </div>
		                            </div>
		                        </fieldset>
		                    </div>
		                    <div class="col-md-7" style="padding: 0px;">
		                        <fieldset>
		                            <div class="form-group">
		                                <div class="col-md-12">
		                                    <label style="font-size: 11px;font-weight: 300;color: #575858;"><b> Votre e-mail</b></label>
		                                    <div class="input-group">
		                                        <span class="input-group-addon beautiful">                                          
		                                        </span>
		                                        <input type="text" class="form-control" id="numeroDeRue">
		                                    </div>
		                                </div>
		                            </div>
		                         </fieldset>
		                    </div>
		                    <div class="col-md-12" style="padding: 0px;">
		                    	<fieldset>
			                      	<div class="form-group">
			                            <div class="col-md-12">
			                              	<label style="font-size: 11px;font-weight: 300;color: #575858;margin-top: 10px;"><b>Votre message</b></label>
			                              	<div class="input-controls-container">
			                                  	<textarea class="form-control textarea-description" id="message_Aannonceur"></textarea>
			                              	</div>
			                          	</div>
			                      	</div>
			                    </fieldset>
		                    </div>
		                    <div class="col-md-12" style="padding: 15px;margin-bottom: 10px;padding-top: 15px;">
		                    	<button class="annuler-the-message btn btn-default pull-left" type="button"><span class="fa fa-close"></span> Annuler</button>
								<button class="add-to-cart btn btn-success pull-right" type="button"><span class="fa fa-envelope-o"></span> Envoyer un message</button>
		                    </div>
			    		</form>
				    </div>
				    <div class="col-md-5" style="padding: 0px;background-color: #;">
				    	<h4 class="description_complete">Informations sur l'annonceur</h4>
				    	<div class="details col-md-12">							
							<h3 class="product-title"><?= $nom_complet ?></h3>
							
							<div class="rating">
								<br>
								<span class="price"><i class="fa fa-phone"></i> <?= $telefone_utilisateur ?></span><br>
								<span class="price"><i class="fa fa-envelope-o"></i> xxxxx_xxxx@xxxxx.ca</span><br>
								<br>
								<span class="price">Publication <?= $type_annonceur ?></span><br>
								<span class="price">Utilise <a href="#">Senda.ca</a> depuis</span> <span class="review-no"><?= $date_entree ?></span>
								<p class="vote">Afficher les autres annonces de cette personne</p>								
							</div>
							
						</div>
				    </div>
			    </div>
			</div>
		</div>

		<div class="details col-md-3" style="padding: 0px;padding-left: 10px;">
			<div class="col-md-12" style="padding: 0px;background-color: #fff;border: 1px solid #e5e5e5;border-left: 1px solid #e5e5e5;">
				<h3 class="product-title" style="padding: 13.8px;margin-bottom: 0px; background-color: #ec2505;color: #fff;">Les plus vendus</h3>
				<div class="content-image-pub">
					<a href="#">
						<img class="img-responsive" src="images/brute/HTB112qUaOoaPuJjSsplq6zg7XXaB.jpg">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12" style="padding: 0px;margin: 0px;" id="bar-therd-contenaire"></div>
<div class="container accordion-body collapse out" id="collapseDescription" style="background-color: #;margin-top: 0px;margin-bottom: 15px;padding: 0px;">
	<div class="col-md-12" style="padding: 0px;">
		<div class="col-md-12" style="padding: 15px;background-color: #0969ba;border: 1px solid #e5e5e5;border-bottom: 1 dashed #e5e5e5;margin-bottom: 10px;">
			<a href="#" style="color: #fff;">Produtos interessantes</a>
		</div>
		<div class="details col-md-9" style="padding: 0px;background-color: #;">
			<div class="col-md-12" style="padding: 0px;background-color: #fff;border: 1px solid #e5e5e5;border-top: 1px solid #e5e5e5;">
				<div  class="">
					<h4 class="description_complete">Description complète</h4>
			      	<div class="accordion-inner" style="padding: 20px;">
						<?= nl2br($description) ?>
			      	</div>
			    </div>			    
			</div>			
		</div>

		<div class="details col-md-3" style="padding: 0px;padding-left: 10px;">
			<div class="col-md-12" style="padding: 0px;background-color: #fff;border: 1px solid #e5e5e5;border-left: 1px solid #e5e5e5;">
				<h3 class="product-title" style="padding: 13.8px;margin-bottom: 0px; background-color: #ec2505;color: #fff;">Les plus vendus</h3>
				<div class="content-image-pub">
					<a href="#">
						<img class="img-responsive" src="images/brute/cfb_436450.jpg">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>