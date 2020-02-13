			
				
		<?php if (isset($page) AND $page != 'index')
		{
			?>
			<div id="footer_plus_info_conteneur"> <!-- fond violet 100% large -->
				<div id="footer_plus_info">
					<div class="footer_haut_gauche">
						<p class="texte1_footer white big3">
							<?php echo $lang['footer_vous_souhaitez']; ?>
						</p>
					</div>
					<p class="texte2_footer">
						<?php echo $lang['footer_des_corre']; ?>
					</p>				
					<a href="?pg=contact&ct=<?php echo $country; ?>" class="btn_trouvez_corres"><?php echo $lang['footer_trouvez_votre_corres']; ?></a>
				</div>
			</div>
		
			<?php
		}
		?>
				
				
			<div id="footer"
				<?php if (isset($page) AND $page == 'index') {echo 'class="footer_index"';} ?>>
				<div class="conteneur_liens_footer">
					<div class="liens_footer">
						<?php if(isset($country))
						{
						?>
							<a href="?pg=contact&ct=<?php echo $country; ?>" id="lien_contacts">						
								<?php echo $lang['footer_contact']; ?>
							</a>
							 - 
							<a href="?pg=mentions&ct=<?php echo $country; ?>" id="lien_mentions">
								<?php						
									if ($country == 'france') {echo 'Mentions légales';} else {echo 'Terms of use';}
								?>
							</a>
						<?php
						}
						else
						{
						?>	
							<a href="mailto:employee.shareholding@thalesgroup.com" id="lien_contacts">						
								<?php echo $lang['footer_contact']; ?>
							</a>
						<?php
						}
						?>
					</div>				
					<div class="liens_footer">
						<a href="http://www.thalesgroup.com/<?php if (isset($langue)) {echo $langue;} else {echo 'en';} ?>" id="lien_thalesgroup" target="_blank">
							www.thalesgroup.com
						</a>
					</div>
				</div>
				
			</div> <!-- / footer -->