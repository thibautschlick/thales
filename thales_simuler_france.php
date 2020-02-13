<!--<p>
	(FRANCE)
</p>-->
			<?php
				
				


			if ($lang['LANG_HEADER']=='fr' OR $lang['LANG_HEADER']=='es' OR $lang['LANG_HEADER']=='de' OR $lang['LANG_HEADER']=='th' OR $lang['LANG_HEADER']=='jp' OR $lang['LANG_HEADER']=='ro' OR $lang['LANG_HEADER']=='sr') {
				$prefixe_euro='';
				$suffixe_euro=' <strong>€</strong>';
				$prefixe_pourcent='';
				$suffixe_pourcent=' <strong>&nbsp;%</strong>';
			}
			if ($lang['LANG_HEADER']=='en' OR $lang['LANG_HEADER']=='nl' OR $lang['LANG_HEADER']=='pt' OR $lang['LANG_HEADER']=='mx') {
				$prefixe_euro='<strong>€</strong>';
				$suffixe_euro='';
				$prefixe_pourcent='';
				$suffixe_pourcent=' <strong>&nbsp;%</strong>';
			}
			?>
			
			<p id="sim_message_1" style="display: none;"><?php echo $lang['sim_message_1']; ?></p>
			<p id="sim_message_2" style="display: none;"><?php echo $lang['sim_message_2']; ?></p>
			<p id="sim_message_3" style="display: none;"><?php echo $lang['sim_message_3']; ?></p>
			<p id="sim_message_4" style="display: none;"><?php echo $lang['sim_message_4']; ?></p>
			<p id="sim_message_5" style="display: none;"><?php echo $lang['sim_message_5']; ?></p>
			
			<br/>
			<div class="SimContener">            
                <form method="post" action="#" onsubmit="return false;">
                    <table>
					<!-- SOUSCRIPTION EN  EURO -->
						<!-- TITRE -->
						<!--<tr> 
							<td colspan=3 class="noir bg_blanc left big">
								<?php echo $lang['souscription_euro']; ?>
								<br/>
							</td>
						</tr>-->
						
					<!-- REMUNERATION -->
					
					
						<tr> 
							<td colspan=6 class="bleufonce bg_blanc left big border_top_bleufonce" id="mon_investissement">
								<br/>
								0- Ma rémunération et mes versements volontaires
								<br/>
								<br/>
							</td>
						</tr>
						
						<tr> <!-- FOND GRIS -->
							<td width=550 class="noir  bg_gris border_white left">
									<?php echo $lang['s1b7']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td width=200 class="noir  border_dotted  strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g7" class="champ center"/>
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						<tr> <!-- FOND GRIS -->
							<td class="noir  bg_gris border_white left">
									<?php echo $lang['s1b13']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td width=200 class="noir  border_dotted  strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g13" class="champ center"/>
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>	
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						<tr> <!-- noir FOND blanc -->
							<td class="noir  bg_gris border_white left strong">
									<?php echo $lang['s1b15']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir bg_gris strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g15" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
					</table>
					
					
					
					
						
						
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->	
					<!-- =========            SIMULATEUR 1     ====================       -->
					
					
					<br/>
					<br/>
					
					
			<!-- 	TABLE 2 largeur 6 col-->	
					<table>
						
						
						
					<!-- VERSEMENTS VOLONTAIRES -->
								
						<tr>
							<td width=200>&nbsp;</td>
							<td  class="center bg_multiple blanc border_white_sides border_bottom_white">
								<?php echo $lang['s1c18']; ?>
							</td>
							<td  class="center bg_securite blanc border_white_sides border_bottom_white ">
								<?php echo $lang['s1e18']; ?>
							</td>
							<td   class="center bg_classique blanc border_white_sides border_bottom_white ">
								<?php echo $lang['s1g18']; ?>
							</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td  class="center bg_multiple border_white_sides">
								<span class="small9">
									<?php echo $lang['s1c20']; ?>
								</span>
							</td>
							<td   class="center bg_securite border_white_sides">
								<span class="small9">
								<?php echo $lang['s1e20']; ?>
								</span>
							</td>
							<td   class="center bg_classique border_white_sides">
								<span class="small9">
								<?php echo $lang['s1g20']; ?>
								</span>
							</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td class="left strong">
								<?php echo $lang['s1b22']; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1c22" class="champ center" readonly="readonly"/>
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1e22" class="champ center" readonly="readonly"/>
								<?php //echo $suffixe_euro; ?>
							</td>											
							<td>
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g22" class="champ center" readonly="readonly"/>
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>&nbsp;</td>
							<td class="strong border_bottom_black">
								<?php echo $lang['s1i22']; ?>
							</td>
						</tr>
						
					<!-- VERSEMENTS VOLONTAIRES A COMPLETER -->
					
						<tr>
							<td class="left"><?php echo $lang['s1b24']; ?></td>
							<td class="border_dotted strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1c24" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="border_dotted strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1e24" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="border_dotted strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g24" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>&nbsp;</td>								
							<td class="bg_gris strong border_black">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1i24" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>	
						</tr>
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						<tr>
							<td class="left"><?php echo $lang['s1b26']; ?></td>
							<td class="bg_multiple border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1c26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_securite border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1e26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_classique border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>&nbsp;</td>								
							<td>
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1i26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>	
						</tr>		
						<tr>
							<td class="left"><?php echo $lang['s1b27']; ?></td>
							<td class="bg_multiple border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1c27" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_securite border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1e27" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_classique border_white_sides border_bottom_white">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g27" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>&nbsp;</td>								
							<td>
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1i27" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>	
						</tr>		
						<tr>
							<td class="left"><?php echo $lang['s1b29']; ?></td>
							<td class="bg_multiple border_white_sides border_bottom_white strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1c29" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_securite border_white_sides border_bottom_white strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1e29" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td class="bg_classique border_white_sides border_bottom_white strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1g29" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>								
							<td>&nbsp;</td>		
							<td class="bg_gris strong border_black">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1i29" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>	
						</tr>
						
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						<tr>
							<td colspan=4 class="left bg_gris  strong">
								<?php echo $lang['s1b32']; ?>
							</td>							
							<td>&nbsp;</td>			
							<td class="bg_gris strong border_black">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s1i32" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>	
						</tr>
						
						<tr><td colspan=6 class="separateur_horizontal">
							<br/>
							<br/>
						</td></tr>
					</table>
						
						
						
						
						
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
					<!-- =========            SIMULATEUR 2     ====================       -->	
						
						
						
						
						
					<table> <!-- 3 colonnes -->
						
					<!-- 1- Mon investissement initial -->						
						<tr> 
							<td colspan=3 class="bleufonce bg_blanc left big border_top_bleufonce" id="mon_investissement">
								<br/>
								<?php echo $lang['s2a3']; ?>
								<br/>
								<br/>
							</td>
						</tr>				
						<tr> <!-- FOND VIOLET -->
							<td class="noir  bg_gris left">
									<?php echo $lang['s2a6']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir  bg_gris right">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2c6" class="champ noinput no_bg " readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr><td colspan=3 class="separateur_horizontal"></td></tr>	
						<tr> <!-- FOND VIOLET -->
							<td class="noir  bg_gris left">
									<?php echo $lang['s2a8']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir  bg_gris right">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2c8" class="champ noinput no_bg " readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>	
						<tr><td colspan=3 class="separateur_horizontal"></td></tr>			
						<tr> <!-- FOND VIOLET -->
							<td class="noir  bg_gris left">
									<?php echo $lang['s2a10']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir  bg_gris right">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2c10" class="champ noinput no_bg " readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>	
						<tr><td colspan=3 class="separateur_horizontal"></td></tr>			
						<tr> <!-- FOND VIOLET -->
							<td class="noir  bg_gris left strong">
									<?php echo $lang['s2a12']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir  bg_gris right strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2c12" class="champ noinput no_bg " readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						
						
						
						
						
						
						
						
						
						
						
						<tr><td colspan=3 class="separateur_horizontal">							
							<br/>
								<br/>
						</td></tr>	
						
						
						
						<!-- 2- Cours de l’action TECHNIP -->						
						<tr> 
							<td colspan=3 class="bleufonce bg_blanc border_top_bleufonce left big">
								<br/>
								<?php echo $lang['s2g3']; ?>
								<br/>
							</td>
						</tr>			
						<tr> 
							<td colspan=3 class="right strong rouge">
								<?php echo $lang['s2g6_comment']; ?>
							</td>
						</tr>		
						<tr> 
							<td class="noir  bg_gris left strong">
									<?php echo $lang['s2g6']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir  bg_blanc right border_dotted strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2i6" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="noir bg_blanc left strong ">
									<?php echo $lang['s2g8']; ?>
							</td>
							<td class="separateur_vertical"></td>
							<td class="noir bg_blanc right strong">
								<?php //echo $prefixe_euro; ?>
									<input onchange='calc()' type="text" name="s2i8" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>						
					</table>
					
					
					
					
					
						
						
						<tr><td colspan=3 class="separateur_horizontal">							
							<br/>						
							<br/>
						</td></tr>	
					
					
					
					
					
					
					
					
			<!-- 	TABLE 2 largeur 6 col-->
			
					<table>
						
					<!-- 3- Je perçois à l’échéance des 5 ans -->
					
					
					
					
					
						<tr> 
							<td colspan=6 class="bleufonce bg_blanc border_top_bleufonce left big">
								<br/>
								<?php echo $lang['s2a16']; ?>
								<br/>
								<br/>
							</td>
						</tr>
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						
						
					
						<!-- TECHNIP MULTIPLE & SÉCURITÉ -->
						
						
						<tr> 
							<td class="strong bg_gris">
								<?php echo $lang['s2a18']; ?>
							</td>
							<td colspan=3  class="center border_bottom_black">
								<?php echo $lang['s2c18']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td   class="center border_bottom_black strong">
								<?php echo $lang['s2i18']; ?>
							</td>
						</tr>
						<tr> 
							<td>&nbsp;</td>
							<td colspan=3>
								<?php echo $lang['s2c19']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr> 
							<td class="strong">
								<?php echo $lang['s2a20']; ?>
							</td>
							<td class="strong">
								<?php echo $lang['s2c20']; ?>
							</td>
							<td class="strong">
								<?php echo $lang['s2e20']; ?>
							</td>
							<td class="strong">
								<?php echo $lang['s2g20']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td  class="strong">
								<?php echo $lang['s2i20']; ?>
							</td>
						</tr>
						<tr> 
							<td>&nbsp;</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2c21" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2e21" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2g21" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2i21" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
						</tr>
						<tr>							
							<td colspan=6 class="right strong rouge">
								<?php echo $lang['s2i22_comment']; ?>
							</td>
						</tr>
						<tr> 
							<td class="strong">
								<?php echo $lang['s2a22']; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c22" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e22" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g22" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris bg_blanc">&nbsp;</td>
							<td class="border_dotted strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i22" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						<tr><td colspan=6 class="separateur_horizontal bg_multiple"></td></tr>
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						
						
						<tr> 
							<td class="left"><?php echo $lang['s2a24']; ?></td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c24" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e24" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g24" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i24" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left"><?php echo $lang['s2a25']; ?></td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c25" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e25" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g25" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i25" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left  strong"><?php echo $lang['s2a26']; ?></td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i26" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left bg_multiple strong"><?php echo $lang['s2a28']; ?></td>
							<td class="bg_multiple strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c28" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_multiple strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e28" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_multiple strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g28" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="bg_multiple strong" >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i28" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						<tr><td colspan=6 class="separateur_horizontal bg_securite"></td></tr>
						<tr><td colspan=6 class="separateur_horizontal "></td></tr>
						
						<tr> 
							<td class="left"><?php echo $lang['s2a31']; ?></td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c31" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e31" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g31" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i31" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left"><?php echo $lang['s2a32']; ?></td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c32" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e32" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td>
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g32" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i32" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left  strong"><?php echo $lang['s2a33']; ?></td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c33" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e33" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g33" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td  class=" strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i33" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left bg_securite strong"><?php echo $lang['s2a35']; ?></td>
							<td class="bg_securite strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c35" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_securite strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e35" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_securite strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g35" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="bg_securite strong" >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i35" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr>
							<td colspan=6 ></td>
						</tr>
						
						
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						
						
						
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						
						<!-- TECHNIP CLASSIQUE -->
					
						<tr> 
							<td class="strong bg_gris">
								<?php echo $lang['s2a38']; ?>
							</td>
							<td colspan=3 class="border_bottom_black">
								<?php echo $lang['s2c38']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="border_bottom_black strong" >
								<?php echo $lang['s2i38']; ?>
							</td>
						</tr>
						<tr> 
							<td>&nbsp;</td>
							<td colspan=3>
								<?php echo $lang['s2c39']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr> 
							<td class="">
								<?php echo $lang['s2a40']; ?>
							</td>
							<td>
								<?php echo $lang['s2c40']; ?>
							</td>
							<td>
								<?php echo $lang['s2e40']; ?>
							</td>
							<td>
								<?php echo $lang['s2g40']; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php echo $lang['s2i40']; ?>
							</td>
						</tr>
						<tr> 
							<td>&nbsp;</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2c41" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2e41" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td>
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2g41" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td >
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2i41" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
						</tr>
						<tr> 
							<td colspan=6 class="right strong rouge">
								<?php echo $lang['s2i42_comment']; ?>
							</td>
						</tr>
						<tr> 
							<td>								
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c42" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e42" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g42" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris bg_blanc">&nbsp;</td>
							<td class="strong border_dotted">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i42" class="champ center" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						
						<!--
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						<tr><td colspan=6 class="separateur_horizontal bg_classique"></td></tr>
						
						
						
						-->
						
						<tr><td colspan=6 class="separateur_horizontal "></td></tr>
						
						
						
						<tr> 
							<td class="left bg_classique strong">
								<?php echo $lang['s2a44']; ?>
							</td>
							<td class="bg_classique strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c44" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_classique strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e44" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_classique strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g44" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="bg_classique strong" >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i44" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						
						
						
						<tr>
							<td colspan=6 ></td>
						</tr>
						
						
						
						
						<!-- votre investissement à l'échéance -->
						
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						
						
						
						<tr>
							<td colspan=6 class="left strong border_bottom_black">
								<?php echo $lang['s2a49']; ?>
							</td>
						</tr>
						
						
						<tr><td colspan=6 class="separateur_horizontal ">
							<br/>
						</td></tr>
						

						<tr> 
							<td class="left bg_gris strong"><?php echo $lang['s2a51']; ?></td>
							<td class="bg_gris strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c51" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_gris strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e51" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_gris strong">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g51" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="bg_gris strong" >
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i51" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left bg_gris"><?php echo $lang['s2a53']; ?></td>
							<td class="bg_gris">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2c53" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_gris">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2e53" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="bg_gris">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2g53" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td  class="bg_gris">
								<?php //echo $prefixe_euro; ?>
								<input onchange='calc()' type="text" name="s2i53" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_euro; ?>
							</td>
						</tr>
						<tr> 
							<td class="left strong"><?php echo $lang['s2a55']; ?></td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2c55" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2e55" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2g55" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="strong" >
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2i55" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
						</tr>
						<tr> 
							<td class="left strong">
								<?php echo $lang['s2a57']; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2c57" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2e57" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="strong">
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2g57" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
							<td class="separateur_vertical_gris">&nbsp;</td>
							<td class="strong" >
								<?php //echo $prefixe_pourcent; ?>
								<input onchange='calc()' type="text" name="s2i57" class="champ center noinput" readonly="readonly" />
								<?php //echo $suffixe_pourcent; ?>
							</td>
						</tr>
						
						<tr><td colspan=6 class="separateur_horizontal">
							<br/>
							<br/>
						</td></tr>
						
						<tr> <!-- TEXTE NOIR PETIT -->
							<td colspan=6 class="bg_blanc left smallsmall gris">
								<br/>
								<?php echo $lang['sim_mentions']; ?>
								<br/>
							</td>
						</tr>
						
						
						<tr><td colspan=6 class="separateur_horizontal"></td></tr>
						
						
						
					</table>
					
                    <br/>
                    <br/>
                    <br/>
                </form>				
            </div> <!-- #SimContener -->