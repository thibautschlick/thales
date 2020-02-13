<!DOCTYPE HTML >
<?php
require_once ('inc_var_globales.php');
require_once ('inc_url_traitement.php');
?>

<!--<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>-->
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<?php require_once ('inc_meta.php'); ?>
</head>

<body>
		
	<div id="container_main_center">
	
		<div id="container_940">

			<?php require_once ('inc_header.php'); ?>
			
			
		
			<div id="header_diaporama">
				
				
				<script charset="utf-8" type="text/javascript">
				   $(window).load(function() {
					  $('.flexslider').flexslider();
					  //  pour inactif :  slide = controlNav: false, et slideshow: true ou  slideshow: false, dans jquery.flexslider.js
				   });
				</script>		
		
				<div class="flexslider" > <!--style="background: url('assets/images/photo_home_1.jpg');"-->

					<br/>
					<ul class="slides">
						<?php // PAS D'AFFICHAGE DU BANDEAU PRIX DE SOUSCRIPTION POUR UK
							if($country != 'uk')
							{
						?>						
						<li>
							<div class="new_conteneur">
								<div id="encart_prix">
									<div class="v_align_ref"></div>
									<div id="encart_prix_texte">
										<p id="slide_phrase_prixsous" <?php if(in_array($langue, array("nl", "nlbe", "de"))) { echo 'class="slide_phrase_prixsous_1mot"';} ?> >
												<?php echo $lang['slide_phrase_prixsous']; ?>
										</p>
									</div>
									<div id="encart_prix_valeur">
										<?php $prixsous1 = (ceil($prixsouscription*$taux*100) /100);
										if($zone == 'hze')
										{
											$prixsous2 = $prixsouscription;
										}
										else
										{
											$prixsous2 = '';
										}
										?>
										<p id="slide_valeur_prixsous" <?php if($zone == 'hze') {echo 'class="hze1"'; } ?> ><?php echo $prefixe_monnaie.str_replace("." , $decimal, $prixsous1).$suffixe_monnaie; ?></p>
										
										<p id="slide_valeur_prixsous" <?php if($zone == 'hze') {echo 'class="hze2"'; } ?> ><?php echo $prefixe_monnaieref.str_replace("." , $decimal, $prixsous2).$suffixe_monnaieref; ?></p>
									</div>
								</div>
								<div>
									<img src="assets/images/bandeau-prix-souscription.jpg" />		
								</div>
							</div>
						</li>
						<?php
							}
						?>	
						<li>
							<div class="new_conteneur">
								<a href="?pg=groupe_video&ct=<?php echo $country; ?>">
									<img src="assets/images/photo_slider_1_<?php echo $langue; ?>.jpg" />		
								</a>
							</div>
						</li>	
						<li>
							<div class="new_conteneur">
								<a href="?pg=comprendre&ct=<?php echo $country; ?>">
									<img src="assets/images/photo_slider_2_<?php echo $langue; ?>.jpg" />	
								</a>
							</div>
						</li>
						<li>
							<div class="new_conteneur">
								<a href="?pg=home&ct=<?php echo $country; ?>#dates_cles">
									<img src="assets/images/photo_slider_3_<?php echo $langue.$extention_img_speciale; ?>.jpg" />	
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div> <!-- / header_diaporama -->
			
			<div class="clr"></div>
			
			<!--<br/>-->
			<!--<br/>-->
			
				<p class="center">
				<?php
					foreach ($ELEMENTS_BULLES as $el)
					{
						
						if ($el == 'souscrire')
						{
							if($country != 'italy')	// Affichage du bouton souscrire pour tous sauf Italie
							{
								//if(time() >= strtotime("23-10-2015"))  // Accès au site de souscription qu'apartir du 23 octobre
								if(1 >= 0)  // Accès au site de souscription
								{
									if($form == 'sip')
									{
										 echo '<a href="https://www.computershare.com/thalesshareplans" class="btn_couleur_turq" target="_blank">'.$lang['menu_caroussel_'.$el].'</a>';
									}
									else
									{
										echo '<a href="https://www.ors.amundi-ee.com/cp/thales2015?langue='.$langue_banque[$langue].'" class="btn_couleur_turq" target="_blank">'.$lang['menu_caroussel_'.$el].'</a>';
									}
								}
								else
								{
									$message = "The subscription Website will open on October 23rd.";
									if ($langue == 'fr') {$message = "Le site de souscription ouvrira le 23 octobre.";}
									echo '<a onclick="alert(\''.$message.'\');" class="btn_couleur_turq">'.$lang['menu_caroussel_'.$el].'</a>';
								}
							}
						}
						else
						{
							echo '<a href="?pg='.$el.'&ct='.$country.'" class="btn_couleur_turq">'.$lang['menu_caroussel_'.$el].'</a>';
						}
						
						
					}
				?>
				</p>
			
			<div class="clr"></div>
			
		<!-- 	==============         CONTENU TEXTE =================== -->
		<!-- 	==============         CONTENU TEXTE =================== -->
		<!-- 	==============         CONTENU TEXTE =================== -->
			
		<?php
			if($page == 'simuler')
			{
				include ('contenu_pages/_simulateurs/simuler.php');
			}
			elseif($page == 'groupe_video' OR $page == 'comprendre')
			{
				include ('contenu_pages/videos.php');
			}
			elseif($page == 'mentions' AND $langue == 'fr')
			{
				include ('contenu_pages/mentions_legales_fr.php');
			}
			elseif($page == 'mentions' AND $langue != 'fr')
			{
				include ('contenu_pages/mentions_legales_en.php');
			}
			elseif($page == 'contact')
			{
				//include ('contenu_pages/'.$langue.'/'.$page.'_'.$country.'.php');
				include ('contenu_pages/contact.php');
			}
			else
			{
				// 2 versions d'ALLEMAND pour pages POURTANT communes => groupe + actionnariat
				if (($langue == 'de') AND ((strpos($page,"actionnariat_") !== false) OR (strpos($page,"groupe_") !== false)))
				{
					include ('contenu_pages/'.$langue.'/'.$page.'_'.$country.'.php');
				}
				elseif (($form == 'sip') AND ((strpos($page,"actionnariat_retour") !== false)))
				{
					include ('contenu_pages/'.$langue.'/'.$page.'_'.$form.'.php');
				}
				else
				{
					include ('contenu_pages/'.$langue.'/'.$page.'.php');
				}
			}
		?>
		
				
				<br/>
				<br/>
			</div>
		
		<!-- 	==============       FIN   CONTENU TEXTE =================== -->
		<!-- 	==============       FIN   CONTENU TEXTE =================== -->
		<!-- 	==============       FIN   CONTENU TEXTE =================== -->
		
		<div class="clr"></div>
				
				<br/>
		
		</div><!--/container_940 -->
	
	<?php require_once ('inc_footer.php'); ?>

	<a href="#container_main_center" class="lien_top"></a>
		
	</div><!--/container_main_center -->

<?php require_once ('inc_footer_gan.php'); ?>
	<script type="text/javascript" src="assets/js/fonctionsjs.js"></script>
</body>
</html>
