<?php
include ('languages.php');
include ('inc_var_globales.php');
$groupe='simuler';
$page='simuler';
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<?php include ('inc_meta.php'); ?>
</head>

<body <?php if ($url_ok!=3) echo ' style="display:none" '; ?><?php if($lang['LANG'] == 'ar') {echo ' dir="rtl" ';} ?> >
		
	<div id="container_1000">		
		
		<?php include ('inc_header.php'); ?>	

		<?php //include ('inc_menu_left.php'); ?>
	
		<!--<div class="contenu_930px">		-->
			
			<?php //include ('inc_side_left.php'); ?>
				
							<div style="width:100%">
								<br/>
								<h3 class="bleufonce" style="width:100%">
									<?php echo $lang['sim_titre']; ?>
								</h3>
								<br/>
								
								<p class="arial size13">									
									<?php echo $lang['sim_mode_emploi']; ?>
								</p>
							</div>
							
							
			<div id="colonne_centre">
				
				
				<div class="contenu_texte_centre">
					
								
								
								
								<?php
								
						if ($lang['LANG_HEADER']=='fr'
							OR $lang['LANG_HEADER']=='cs'
							OR $lang['LANG_HEADER']=='es'
							OR $lang['LANG_HEADER']=='de'
							OR $lang['LANG_HEADER']=='th'
							OR $lang['LANG_HEADER']=='jp'
							OR $lang['LANG_HEADER']=='ro'
							OR $lang['LANG_HEADER']=='sr'
							OR $lang['LANG_HEADER']=='id'
							OR $lang['LANG_HEADER']=='it'
							OR $lang['LANG_HEADER']=='no'
							OR $lang['LANG_HEADER']=='pl'
							OR $lang['LANG_HEADER']=='sk'
							OR $lang['LANG_HEADER']=='tr'
							OR $lang['LANG_HEADER']=='hu') {
							$prefixe_monnaie='';
							$prefixe_euro='';
							$prefixe_pourcent='';
							
							$suffixe_euro=' <strong>€</strong>';				
							if ($ze) {$suffixe_monnaie=' <strong>€</strong>';}
							else {$suffixe_monnaie=' <strong>'.$monnaie[$country].'</strong>';}				
							$suffixe_pourcent=' <strong>&nbsp;%</strong>';
						}
						if ($lang['LANG_HEADER']=='en'
							OR $lang['LANG_HEADER']=='nl'
							OR $lang['LANG_HEADER']=='pt'
							OR $lang['LANG_HEADER']=='mx'
							OR $lang['LANG_HEADER']=='ar'
							OR $lang['LANG_HEADER']=='us') {
							
							$suffixe_euro='';
							$suffixe_monnaie='';
							
							$prefixe_euro='<strong>€</strong>';
							if ($ze) {$prefixe_monnaie='<strong>€</strong>';}
							else {$prefixe_monnaie='<strong>'.$monnaie[$country].'</strong>';}				
							
							$prefixe_pourcent='';
							$suffixe_pourcent='<strong>%</strong>';
						}
						?>
								
								
						
							<?php
							
							//echo $form['FORM'];
							
								if ($country == 'FRANCE') {include ('technip_simuler_france.php');}
								
								//$form_ok = array('fcpe_ze','fcpe_hze','sar_ze','sar_hze');
								
								else if ($country == 'BELGIUM') {include ('technip_simuler_belgium.php');}
								else if ($form['FORM'] == 'fcpe_ze') {include ('technip_simuler_fcpe_ze.php');}
								else if ($form['FORM'] == 'fcpe_hze') {include ('technip_simuler_fcpe_hze.php');}
								else if ($form['FORM'] == 'sar_ze') {include ('technip_simuler_sar_ze.php');}
								else if ($form['FORM'] == 'sar_hze') {include ('technip_simuler_sar_hze.php');}
							
							?>
							
							
						
					
				</div> <!-- / contenu_texte_centre -->
				
			</div> <!-- / colonne_centre -->
			
			
					
			
			<?php //include ('inc_side_right.php'); ?>
			
			<div class="clr"></div>
			
			<br/>
			
			<?php include ('inc_footer.php'); ?>
			
			
			
			
		<!--</div>--><!--/contenu_930px -->
		
		
		
		
			
			
		
		<?php include ('inc_cours_bourse.php'); ?>
		
	</div><!--/container 1000-->
	
	<br/>
	<br/>
	<br/>
	<br/>

	
<a href="#header" class="lien_top"></a>
<?php include ('inc_footer_gan.php'); ?>

</body>
</html>
