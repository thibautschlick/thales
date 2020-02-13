<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
	<meta name='robots' content='noindex,nofollow' />
	
  <link rel="stylesheet" type="text/css" href="assets/css/MyFontsWebfontsKit.css">
  
  
 <!-- <meta http-equiv="refresh" content="60; url=#" /> redirection pour countdown -->
  
	<!--[if lte IE 7]><link rel="stylesheet" href="assets/css/ie7.css" /><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
	<script type="text/javascript" src="assets/js/jquery1.8.2.js"></script><!--
	<script type="text/javascript" src="assets/js/superfish.js"></script>
	<script type="text/javascript" src="assets/js/superfish_action.js"></script>-->
	<script type="text/javascript" src="assets/js/showhide.js"></script>
	<script type="text/javascript" src="assets/js/jquery-fcshow.js"></script>
	<script type="text/javascript" src="assets/js/AC_RunActiveContent.js"></script>
	
	
	<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script> <!-- fichier bibliothèque JQuery -->
	


  <?php
  
  
	//if (isset($page) AND $page=='modalites_calendrier') {
	  echo '<link rel="stylesheet" href="assets/css/flexslider.css">';
	//}
	
	
	if (isset($page) AND $page=='simuler') {
	  echo '<link rel="stylesheet" href="assets/css/simulateur.css">';
	}
  ?>
	
	<link rel="stylesheet" type="text/css" href="assets/icon-font/style.css" />
	
	
	
	<?php
		if (isset($langue) && $langue == 'ar')
		{
			echo '<link rel="stylesheet" href="assets/css/styles_ar.css" />';
		}
		else
		{
			echo '<link rel="stylesheet" href="assets/css/styles_170928.css" />';			
		}
	
		if (isset($langue))
		{	
			$langues_arial = array('sk','cs','hu','ar','pl','ro','tr');
			if (in_array($langue,$langues_arial))
			{
				echo '<link rel="stylesheet" href="assets/css/styles_arial.css" />';
			}
		}
	?>
  

