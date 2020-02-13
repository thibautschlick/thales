	<div id="cours_action">
		<p dir="ltr" >			
			<?php
				//$URL_a_afficher = 'http://(ipserveur)/TECHNIP/Internet/Variations.asp';
				//$ch = curl_init();
				//curl_setopt($ch, CURLOPT_URL, $URL_a_afficher);
				//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				//curl_setopt($ch, CURLOPT_USERAGENT, 'Cours de bourse GDF SUEZ');
				//$resultat = curl_exec ($ch);
				//curl_close($ch);
				//$source = $resultat;				
				//$pattern = '`<DernierCours>(.*)</DernierCours>`U';
				//$subject = $resultat;				
				//preg_match_all($pattern, $subject, $matches);
				//if (isset ($matches[0][0]))
				//{
				//	$derniercours = $matches[0][0]; // 0 car 1er tableau rempli avec occurences trouvées, 0 car 1ère occurence
				//}
				//else{
				//	$derniercours = 0;
				//}				
				//$pattern = '`<Variation>(.*)</Variation>`U';
				//preg_match_all($pattern, $subject, $matches);
				//if (isset ($matches[0][0]))
				//{
				//	$variation = $matches[0][0]; // 0 car 1er tableau rempli avec occurences trouvées, 0 car 1ère occurence
				//}
				//else{
				//	$variation = 0;
				//}				
				//$variation_negative = strpos($variation, '-'); // true si a trouvé le 'moins'
				//$derniercours = str_replace('<DernierCours>','<DernierCours id="derniercours">',$derniercours);
				//
				
				
				
				// pour test, désactivation
				$derniercours = "<DernierCours id='derniercours'>18.620</DernierCours>";
				$derniercours = "<DernierCours id='derniercours'>0</DernierCours>";
				$variation = "<Variation>+0.23</Variation>";
				$variation_negative = false;
			
			if ($derniercours != "<DernierCours id='derniercours'>0</DernierCours>")
			{
				
			
			?>
			
			
			
				<span class="gris strong">
					GSZ
				</span>
					<?php echo $derniercours; ?> €
				<?php
					if($variation_negative) { ?>	<img src="assets/images/fleche_action_bas.png" /><?php }
					else { ?><img src="assets/images/fleche_action_haut.png" /><?php }
				?>
				<?php
					if($variation_negative) { ?>	<span class="rouge_action">	<?php }
					else { ?><span class="vertfonce">	<?php }
				?>				
					(<?php echo $variation; ?>&nbsp;%)
							</span>
					
			<?php
			}
			else
			{
				echo '<span style="visibility:hidden;">'.$derniercours.'</span>';
			}
			?>
			
		</p>
	</div>