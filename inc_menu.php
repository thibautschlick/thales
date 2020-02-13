	<a href="#" class="header_icon" id="header_icon"></a>
	<ul id="menu_top">
		<?php
		foreach ($ELEMENTS_MENU as $key_menu => $value)
		{
			if (!in_array($key_menu,$ELEMENTS_MENU_HIDDEN))
			{
					
				//$fichier_menu = $value["sous_menu"][1];
				//$fichier = 'index' // temporaire, pour tous les liens vers index			
				$fleche_deroule = true;
				if (empty($value["sous_menu"]))
				{
					$fleche_deroule = false;
				}
				?>
				<li class="lien_menu">
					<a <?php if (empty ($value["sous_menu"])) {echo 'href="?pg='.$key_menu.'&ct='.$country.'"';}?>
						class="clic_deroule<?php if ($group == $key_menu) {echo ' selected';} ?> <?php if ($fleche_deroule) {echo ' fleche_deroule';} ?>"><?php
						echo $lang['menu_'.$key_menu]; ?><?php if (!empty ($value["sous_menu"]))
						{
							//echo '<img src="assets/images/menu_fleche_bas.png" />';
						}
						?></a>
					
					<?php
					if (!empty ($value["sous_menu"]))
					{
						?>					
						<ul class="sub_nav bg_white ombre_menu_haut">
								<?php				
								foreach ($value["sous_menu"] as $key_ss_menu)
								{
								
									if (!empty ($lang['menu_'.$key_ss_menu])) // Affichage sous-menu que s'il existe (different de vide) 
									{
                                        if($country != "france" AND $key_ss_menu == "modalites_comment_regler")
                                        {
                                        }
                                        else
                                        { 
                                ?>
											<li>
												<a href="?pg=<?php echo $key_ss_menu;?>&ct=<?php echo $country;?>"
													<?php if ($page == $key_ss_menu) {echo 'class="selected"';} ?>>
													<?php echo $lang['menu_'.$key_ss_menu]; ?>
												</a>
											</li>
								<?php
                                        }
                                        
								    }
								}
								?>
						</ul>
					<?php
					}
				?>
				</li>
				<?php
			}
		}
		?>
	</ul>
	<div class="clr"></div>