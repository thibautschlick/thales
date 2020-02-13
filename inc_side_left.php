<div id="side_left">
	
	
	
	
	
	<div class="left_rappel_menu">
		
		<?php
		if (in_array($groupe,$groupes_menu))
		{
			?>
		
			
			<p class="<?php echo $couleur;?>">
				<?php echo $lang['menu_'.$groupe]; ?>
			</p>
			<div class="left_rappel_menu_liens bg_<?php echo $couleur;?>">
			
			
				<?php
				foreach ($ELEMENTS_MENU[$groupe]["sous_menu"] as $key)
				{	
				?>					
					<p class="bg_<?php echo $couleur;?>">
						<a class="white" href="?grp=<?php echo $groupe;?>&pg=<?php echo $key;?>&lg=<?php echo $lg;?>&form=<?php echo $form;?>&ct=<?php echo $country;?>"
							<?php if ($page == $key) {echo 'class="selected"';} ?>>
							> <?php echo $lang['menu_'.$key]; ?>
						</a>
					</p>				
				<?php
				} // fin foreach 
				?>
			
			</div>
	
			<?php
		}
		else
		{
			?>
			
			<?php $couleur = "gristechnip"; ?>
		
			<p class="<?php echo $couleur;?> strong">
				<?php echo $lang['widget_left_'.$groupe]; ?>
			</p>
		
			<?php
		}
		?>
	
	
	</div> <!-- / left_rappel_menu -->
		
		
		
		
		
		
	<div id="widgets_left">
		<?php	
			$showpopup = " onmouseover=\"$('#popup_doc').show();\"";
			$hidepopup = " onmouseout=\"$('#popup_doc').hide();\"";
			
		foreach ($ELEMENTS_WIDGETS_LEFT as $key_menu) // $ELEMENTS_WIDGETS_LEFT array simple
		{
			//$fichier = 'technip_'.$key;
			//$fichier = 'index'; // temporaire, pour tous les liens vers index
			?>
			<p<?php if ($key_menu == 'doc') {echo $showpopup.$hidepopup;} ?>>
				<img src="assets/images/picto_left_<?php echo $key_menu; ?>.png" />
				<a class="gristechnip" href="?grp=<?php echo $key_menu;?>&pg=<?php echo $key_menu;?>&lg=<?php echo $lg;?>&form=<?php echo $form;?>&ct=<?php echo $country;?>"
					<?php if ($page == $key_menu) {echo 'class="selected"';} ?>>
					<?php echo $lang['widget_left_'.$key_menu]; ?>
				</a>				
			</p>
			<?php if ($key_menu == 'doc')
			{
				?>
				<p id="popup_doc" class="ombre_3_3"<?php echo $showpopup.$hidepopup; ?>>
					<img src="assets/images/picto_left_<?php echo $key_menu; ?>.png" />
					<a class="gristechnip" href="?grp=<?php echo $key_menu;?>&pg=<?php echo $key_menu;?>&lg=<?php echo $lg;?>&form=<?php echo $form;?>&ct=<?php echo $country;?>"
						<?php if ($page == $key_menu) {echo 'class="selected"';} ?>>
						<?php echo $lang['widget_left_'.$key_menu]; ?>
					</a>
					<?php foreach ($DOC_SOUS_MENUS as $key_ss_menu)
					{
					?>
						<a class="gristechnip popup_doc_lien_droite_<?php echo $key_ss_menu;?>" href="?grp=<?php echo $key_menu;?>&pg=<?php echo $key_ss_menu;?>&lg=<?php echo $lg;?>&form=<?php echo $form;?>&ct=<?php echo $country;?>"
							<?php if ($page == $key_ss_menu) {echo 'class="selected"';} ?>>
							> <?php echo $lang['widget_left_doc_'.$key_ss_menu]; ?>
						</a>
					<?php
					}
					?>	
				</p>
				<?php
			}
			?>
			<?php
		} // fin foreach ($ELEMENTS_MENU as $key)
		?>
	</div>
	
	<script>
		$('#popup_doc').hide();
	</script>
	
	
	
	
</div> <!-- / side left -->