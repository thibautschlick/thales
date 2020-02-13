<div id="header" <?php //if ($langue!='fr') {echo 'style="background: url(\'assets/images/header_en.png\') top center no-repeat;"';} ?>>

	<div id="header_logo_thales_2017"></div>
	<div id="header_trait_noir"></div>

	
	<?php require_once ('inc_menu.php'); ?>
	<div id="header_logo_thales"></div>
	<p id="header_country">
		<a href="index.php">
			<?php //echo $country; ?> <!--(CHOOSE ANOTHER COUNTRY)-->
			<img src="assets/images/flags/<?php echo strtolower($country); ?>.png" width=24 />
		</a>
	</p>

	<!--	
	<div id="espace_ecollab">
		<p>
			<a href="http://technipcapital.technip.com/ecollaboration" target="_blank">
					<?php echo $lang['espace_reserve']; ?>
			</a>
		</p>
		<img src="assets/images/picto_ecollab.png" width=30 height=30 />
	</div>
	-->
</div>