<?php
include ('languages.php'); ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<?php include ('header.php'); ?> 
<body <?php if ($url_ok!=3) echo 'style="display:none"'; ?>>
<div id="container"> 
	    <?php if ($lang['LANG']=='ar') {include_once ('header_navigation_ar.php');} else {include_once ('header_navigation.php');} ?>			
			<div id="content">		
			<?php if ($lang['LANG']=='ar') {include_once ('sidebar_left_ar.php');} else {include_once ('sidebar_left.php');} ?>			
			<div id="main_rubriques">
				<div class="bloc_texte_rubriques">
						<br/>
						<h1><?php echo $lang['EMAIL_SMS_ETREINFORME']; ?></h1>
						<br/>
						<p><?php echo $lang['EMAIL_SMS_JESOUHAITE']; ?></p>
						<br/><br/>
						<!--<form id="register" name="register" method="get" action="http://www.emailstrategie.com/com_clients/bdd/butterfly/30-11-12/save.asp"> ou  confirmation.php pour test local-->
						<form id="register" name="register" method="get" action="http://www.emailstrategie.com/com_clients/bdd/butterfly/30-11-12/save.asp">									
            
						<?php if ($lang['LANG']!='ar') { // autres que ARABE ?>
						
						      <img src="assets/images/picto_etre_informe_email.png" style="float:left;" />
									<div class="email" style="position: relative;top:12px;left:20px;line-height: 1.4em;">
												<input type="checkbox" name="register_mode_email"  /><strong> <?php echo $lang['EMAIL_SMS_PAREMAIL']; ?></strong><br />
												<div><?php echo $lang['EMAIL_SMS_MONADRESSE']; ?> <input type="text" name="register_email" /></div>
												<br /><br /><br />
                  </div>
                   <img src="assets/images/picto_etre_informe_sms.png" style="float:left;" />
									 <div class="sms" style="position: relative;top:4px;left:20px;line-height: 1.6em;">
												<input type="checkbox" name="register_mode_sms"  /><strong>  <?php echo $lang['EMAIL_SMS_PARSMS']; ?></strong><br />
												<div><?php echo $lang['EMAIL_SMS_MONNUMERO']; ?> (<?php echo $lang['EMAIL_SMS_PREFIXNUM']; ?> / <em><?php echo $lang['EMAIL_SMS_EXEMPLE']; ?></em>)<br />
													<div><input name="register_prefixe" type="text"  value='+33' size="10" /> - <input type="text" name="register_sms" /></div>
												</div>
												<br /><br />
                  </div>                  
                  <br />
									<style type="text/css">
												#button {
															border:2px solid #AE3C96;
															padding:10px;
															cursor: pointer;
															color:#AE3C96;
															background-color: #eee;
															font-weight: bold;
												}
												#button:hover {color:#0A7EC2;border:2px solid #0A7EC2;background-color: #ddd;}
									</style>
                  <input type="button" name="button" id="button" value="<?php echo $lang['EMAIL_SMS_ENVOYER']; ?>" class="btn_submit" onclick="javascript:return(emailstrategie_formulaire_go());" />
									
									<input type="hidden" name="lg" value="<?php echo $lang['LANG']; ?>" />
									<input type="hidden" name="form" value="<?php echo $form['FORM']; ?>" />									
									<?php $pays_select=htmlentities($_GET['ct']); ?>
									<input type="hidden" name="ct" value="<?php echo $pays_select; ?>" />
						
						<?php } else { // Arabe ?>
						
									 <img src="assets/images/picto_etre_informe_email.png" style="float:left;position:relative;left:490px;" />
									<div class="email" style="position: relative;top:12px;right:60px;line-height: 1.4em;">
												<input type="checkbox" name="register_mode_email"  /><strong> <?php echo $lang['EMAIL_SMS_PAREMAIL']; ?></strong><br />
												<div><?php echo $lang['EMAIL_SMS_MONADRESSE']; ?> <input type="text" name="register_email" /></div>
												<br /><br /><br />
                  </div>
                   <img src="assets/images/picto_etre_informe_sms.png" style="float:left;position:relative;left:490px;" />
									 <div class="sms" style="position: relative;top:4px;right:60px;line-height: 1.6em;">
												<input type="checkbox" name="register_mode_sms"  /><strong>  <?php echo $lang['EMAIL_SMS_PARSMS']; ?></strong><br />
												<div><?php echo $lang['EMAIL_SMS_MONNUMERO']; ?> (<?php echo $lang['EMAIL_SMS_PREFIXNUM']; ?> / <em><?php echo $lang['EMAIL_SMS_EXEMPLE']; ?></em>)<br />
													<div><input name="register_prefixe" type="text"  value='+33' size="10" /> - <input type="text" name="register_sms" /></div>
												</div>
												<br /><br />
                  </div>                  
                  <br />
									<style type="text/css">
												#button {
															border:2px solid #AE3C96;
															padding:10px;
															cursor: pointer;
															color:#AE3C96;
															background-color: #eee;
															font-weight: bold;
												}
												#button:hover {color:#0A7EC2;border:2px solid #0A7EC2;background-color: #ddd;}
									</style>
                  <input type="button" name="button" id="button" value="<?php echo $lang['EMAIL_SMS_ENVOYER']; ?>" class="btn_submit" onclick="javascript:return(emailstrategie_formulaire_go());" />
									
									<input type="hidden" name="lg" value="<?php echo $lang['LANG']; ?>" />
									<input type="hidden" name="form" value="<?php echo $form['FORM']; ?>" />									
									<?php $pays_select=htmlentities($_GET['ct']); ?>
									<input type="hidden" name="ct" value="<?php echo $pays_select; ?>" />
						<?php } ?>
						
						</form>
						
						<br/><br/><br/>
				</div>
		</div>
				
		<?php include_once ('sidebar_right.php'); ?>
				
		<div class="clr"></div>
	    
	    </div>
	    <!--/content-->

      </div>
      <!--/container-->
			
			<script type="text/javascript" src="assets/js/superfish_footer_activation.js"></script>
			
			<script langage="javascript">
			function emailstrategie_formulaire_go() {			
						pattern = /^[\w-\.]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,3}$/;			
						err='';			
						if (document.register.register_mode_email.checked==false && document.register.register_mode_sms.checked==false) {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR1']; ?>\n';}			
						if (!pattern.test(document.register.register_email.value) && document.register.register_mode_email.checked==true) {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR2']; ?>\n';}			
						if (document.register.register_mode_sms.checked==true && document.register.register_sms.value=='' && document.register.register_prefixe.value=='') {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR3']; ?>\n';}
						if (document.register.register_mode_sms.checked==true && !document.register.register_sms.value=='' && document.register.register_prefixe.value=='') {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR4']; ?>\n';}
						if (document.register.register_mode_sms.checked==true && document.register.register_sms.value=='' && !document.register.register_prefixe.value=='') {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR5']; ?>\n';}
						if (isNaN(document.register.register_sms.value) && document.register.register_mode_sms.checked==true) {err = err + '<?php echo $lang['EMAIL_SMS_ERREUR6']; ?>\n';}
						if (err!='') {			
										err = "<?php echo $lang['EMAIL_SMS_ERREUR_VEUILLEZ']; ?>\n\n" + err;			
						alert(err);			
													 return(false);			
						} else {			
													 document.register.submit();
						}			
			}			
			</script>
	
</body>
</html>