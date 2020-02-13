<?php
// Détruit la session si existante
	session_unset();
// *********************************

require_once 'contenu_pages/_communs/lang.en.php';
$page='index';
?>
<!DOCTYPE HTML > 
<!--<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>-->
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<?php require_once ('inc_meta.php'); ?>
</head>

<body>
		
	<div id="container_main_center"> <!-- 1600 ou 1000 selon screen -->
	
	
		<div id="container_940">
			<div id="header_logo_thales_2017_index"></div>
			<ul id="menu_top">
			</ul>
		
			<div id="header_diaporama">
				
				<script charset="utf-8" type="text/javascript">
				   $(window).load(function() {
					  $('.flexslider').flexslider();
					  //  pour inactif :  slide = controlNav: false, et slideshow: false,   dans jquery.flexslider.js
				   });
				</script>		
				
				<!--<div class="flexslider" style="background: url('assets/images/photo_home_banniere.jpg') top left no-repeat;position: relative;top:-40px;">		-->
				<div class="flexslider" style="background: url('') top left no-repeat;position: relative;top:-40px;">		
					<div class="bandeau_blanc_photo">
						<h1 class="bleuclair catchphrase">
							Welcome to SharingThales 2017 dedicated website
						</h1>
						<p class="center futura_light big3">
							SharingThales 2017 is an exclusive offer for Thales employees that enables you to become a Group shareholder.
						</p>
					</div>
				</div>
				
			</div> <!-- / header_diaporama -->
			
			<br/>
			<br/>
			
			<div class="filet_violet_deg_right"></div>
			
			<div class="clr"></div>
			
			<div class="bg_gris relative">
				
				<br/>
				<p class="center gris3 futura_light">
					<br/>
					<span class="big3 strong">
						PLEASE CHOOSE YOUR COUNTRY:
					</span>
					<br/>
					<br/>
					<div id="container_countries_lists">
					
						<div class="colonne_zone">
							<h2 class="vert">
								&bull; AMERICAS &bull; 
							</h2>
							<p>
								<a class="lien_country_flag" href="site.php?pg=home&ct=brazil">Brazil</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=canada_en">Canada (English)</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=canada_fr">Canada (French)</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=mexico">Mexico</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=usa">United States</a>
							</p>							
						</div>
						
						<div class="colonne_zone">
							<h2 class="vert">
								&bull; ASIA PACIFIC &bull; 
							</h2>						
							<p>
								<a class="lien_country_flag" href="site.php?pg=home&ct=australia">Australia</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=china">China</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=hongkong">Hong Kong</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=india">India</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=singapore">Singapore</a>
							</p>							
						</div>
					
						<div class="colonne_zone">
							<h2 class="vert">
								&bull; EUROPE &bull; 
							</h2>
							<p>
								<a class="lien_country_flag" href="site.php?pg=home&ct=austria">Austria</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=belgium_nl">Belgium (Flemish)</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=belgium_fr">Belgium (French)</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=france">France</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=germany">Germany</a>	
								<a class="lien_country_flag" href="site.php?pg=home&ct=italy">Italy</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=netherlands">Netherlands</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=norway">Norway</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=poland">Poland</a>							
								<a class="lien_country_flag" href="site.php?pg=home&ct=portugal">Portugal</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=romania">Romania</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=spain">Spain</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=uk">United Kingdom</a>
							</p>							
						</div>
						
						<div class="colonne_zone" style="width:250px;">
							<h2 class="vert">
								&bull; MIDDLE EAST & AFRICA &bull;
							</h2>
							<p>
								<a class="lien_country_flag" href="site.php?pg=home&ct=qatar">Qatar</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=saudiarabia">Saudi Arabia</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=southafrica">South Africa</a>
								<a class="lien_country_flag" href="site.php?pg=home&ct=uae">United Arab Emirates</a>
							</p>							
						</div>
						
						<div class="clr"></div>
						
					</div> <!-- / container_countries_lists -->
					<br/>
					<br/>
				</p>
				
			</div> <!--     FIN      bg_gris        -->
		
		
			<div class="filet_violet_deg_left"></div>
			<br/>
			<br/>
			<div class="clr"></div>
		
		</div><!--/container_940 -->

	</div><!--/container_main_center -->
	
	<?php require_once ('inc_footer.php'); ?>
	
	<!--<div class="sub_footer_index"></div>-->
	

	<a href="#container_main_center" class="lien_top"></a>
	
		<script src="assets/js/jquery.roundabout.js"></script>
		<script src="assets/js/jquery.event.drag-2.2.js"></script>
		<script src="assets/js/jquery.event.drop-2.2.js"></script> 
		<script src="assets/js/jquery.roundabout-shapes.js"></script> 
		<script>
			$(document).ready(function() {				
				function redirectPage() {
					window.location = linkLocation;
				}
				var screen_width=screen.width;
				$('#caroussel ul').roundabout({
					btnNext: ".fleche_next",
					btnPrev: ".fleche_prev",
					duration: 600,
					reflect: true,
					enableDrag: true,
					shape: "lazySusan",
					tilt:15, //15 ou screen_width/100
					minOpacity:1,
					maxOpacity:1,
					minScale:0.3,
					maxScale:1,
					debug: false,
				});
			});			
		 </script>
		
		<img src="assets/images/worldmap_amea.png" style="display:none;" />
		<img src="assets/images/worldmap_europe.png" style="display:none;" />
		<img src="assets/images/worldmap_america.png" style="display:none;" />
		<img src="assets/images/worldmap_australia.png" style="display:none;" />

<?php require_once ('inc_footer_gan.php'); ?>

</body>
</html>
