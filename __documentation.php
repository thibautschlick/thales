<?php
include ('languages.php'); ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<?php include ('inc_meta.php'); ?>
	<meta http-equiv="cache-control" content="no-cache">
</head>

<body <?php if ($url_ok!=3) echo 'style="display:none"'; ?>>

		
	<div id="container_1000">
		
		
		<?php include ('inc_header.php'); ?>
	

		<?php include ('inc_menu_left.php'); ?>

	
		<div id="contenu_texte">
		
			<h1 class="rouge_doc" style="font-weight:normal;">
				<?php echo $menu_doc; ?>
			</h1>
			
			
			
			
			
			<a href="#" class="btn_prev"></a>
			<a href="#" class="btn_next"></a>
	
        <!-- class="img_carousel"-->
		
		
		
		
		<?php
		
		
		
		
			$countries_sl_ok = array(
				"brazil",
				"brunei",
				"cambodia",
				"fiji",
				"germany",
				"poland",
				"italy"
			);
		
		
		
		
		
		
		
		
		
		
		
		
			$pays_cla_im_en = array(
				"brunei",
				"cambodia",
				"finland",
				"ghana",
				"india",
				"japan",
				"southkorea",
				"liberia",
				"libya",
				"malta",
				"myanmar",
				"oman",
				"pakistan",
				"papuanewguinea",
				"saudiarabia",
				"serbia",
				"sierraleone",
				"tanzania",
				"thailand",
				"uganda",
				"zambia"				
			);
			
			if (in_array($country,$pays_cla_im_en))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					
						<?php if ($country == 'cambodia') { ?>
						<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-KH15.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_BRESA-CLA-IM-KH15.png" class="img_carousel" /><br/><br/>
							Reservation and subscription form - KH
						</a>
						</li>
						<?php } ?>
						
						
					<li><a href="total_documentation_count.php?doc=BREV-CLA-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					
					
						<?php if ($country == 'cambodia') { ?>
						<li><a href="total_documentation_count.php?doc=BREV-CLA-IM-KH15.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_BREV-CLA-IM-KH15.png" class="img_carousel" /><br/><br/>
							Cancellation Form - KH
						</a>
						</li>
						<?php } ?>
						
						
					<li><a href="total_documentation_count.php?doc=OEB-CLA-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					
					
						<?php if ($country == 'cambodia') { ?>
						<li><a href="total_documentation_count.php?doc=OEB-KH15.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_OEB-KH15.png" class="img_carousel" /><br/><br/>
							The offer at a glance - KH
						</a>
						</li>
						<?php } ?>
					
					
						<?php if ($country == 'cambodia') { ?>
						<li><a href="total_documentation_count.php?doc=cambodge_poster_KH.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_cambodge_poster_KH.png" class="img_carousel" /><br/><br/>
							Poster - KH
						</a>
						</li>
						<?php } ?>
						
						
						
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					
					
						<?php if ($country == 'cambodia') { ?>
						<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
							Country supplement
						</a>
						</li>
						<?php } ?>
						
						<?php if ($country == 'brunei') { ?>
						<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_fr'; ?>.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
							Supplément local (FR)
						</a>
						</li>
						<?php } ?>
						
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		<?php
			$pays_cla_im_fr = array(
"burkinafaso",
"congorepdemo",
"haiti",
"madagascar",
"mauritania",
"togo",
"tunisia"
			
			);
			
			if (in_array($country,$pays_cla_im_fr))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
	
	 <?php
			if ($country == 'belgium' AND $lang['LANG'] == 'fr')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=belgium_prosp_actions_perso_fr.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_belgium_infos_fr.png" class="img_carousel" /><br/><br/>
						Document d’informations additionnelles - Belgique
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		
	 <?php
			if ($country == 'belgium' AND $lang['LANG'] == 'nl')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reserverings- en intekeningsformulier
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Herroepingsformulier
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Het aanbod in het kort

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Essentiële beleggersinformatie (French + English)
					</a>
					</li>					
					
					<li><a href="total_documentation_count.php?doc=belgium_prosp_actions_perso_nl.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_belgium_infos_nl.png" class="img_carousel" /><br/><br/>
						Bijkomend informatiedocument - België
					</a>
					</li>	
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>				
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Landensupplement
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		
		
		 <?php
			if ($country == 'portugal')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochura
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de reserva e subscrição
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de retratação
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						A oferta em resumo

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento de País
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		<?php
			$pays_cla_im_es = array(
				"bolivia",
				"colombia"				
			);
			
			if (in_array($country,$pays_cla_im_es))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-IM-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Folleto
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-IM-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de reserva y de suscripción
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de cancelación
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Resumen de la oferta

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento nacional
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
		<?php
			$pays_cla_dif_en = array(
"australia", 
"denmark", 
"eritrea", 
"greece", 
"jamaica", 
"malawi", 
"slovenia", 
"sweden", 
"yemen",
"zimbabwe",
				
			);
			
			if (in_array($country,$pays_cla_dif_en))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
	
	<?php
			$pays_cla_dif_fr = array(
"centralafricanrep", 
"chad", 
"djibouti", 
"gabon", 
"guineaconacry", 
"morocco", 
"niger"
				
			);
			
			if (in_array($country,$pays_cla_dif_fr))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
		<?php
			$pays_cla_dif_es = array(
"dominicanrep",
"puertorico",
"uruguay",
"venezuela"
				
			);
			
			if (in_array($country,$pays_cla_dif_es))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-DIF-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Folleto
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-DIF-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de reserva y de suscripción
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de cancelación
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Resumen de la oferta

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento nacional
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
	
	 <?php
			if ($country == 'mozambique')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-CLA-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochura
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-CLA-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de reserva e subscrição
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-CLA-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de retratação
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CLA-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						A oferta em resumo

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI_RGLT_TAIC_Compart_A_FR_EN.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_classic.png" class="img_carousel" /><br/><br/>
						TAIC Compartiment A (french + english)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento de País
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		<?php
			$pays_fcpe_im_en = array(
"china",
"cyprus", 
"egypt", 
"fiji", 
"hongkong", 
"hungary", 
"indonesia", 
"jordan", 
"kazakhstan", 
"kenya", 
"kuwait", 
"lithuania", 
"malaysia", 
"newzealand", 
"nigeria", 
"qatar", 
"romania", 
"russia", 
"singapore", 
"slovakia", 
"taiwan",
"unitedarabemirates"

				
			);
		
			if (in_array($country,$pays_fcpe_im_en))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance (EN)
					</a>
					</li>
					
					<?php if ($country == 'china') { ?>
						<li><a href="total_documentation_count.php?doc=OEB-CN15.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_offre_cn.png" class="img_carousel" /><br/><br/>
							The offer at a glance (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=PPT_CN.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_PPT_CN.png" class="img_carousel" /><br/><br/>
							PPT (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=BRO_CN.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_BRO_CN.png" class="img_carousel" /><br/><br/>
							Brochure (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=QA_cn.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_QA_cn.png" class="img_carousel" /><br/><br/>
							Q&A (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=SL_china_cn.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_SL_china_cn.png" class="img_carousel" /><br/><br/>
							Country supplement (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=China_Employee_entrusting_employer.doc" class="transition" target="_blank">
							<img src="assets/images/doc_China_Employee_entrusting_employer.png" class="img_carousel" /><br/><br/>
							Employee Entrusting Employer  (Chinese)
						</a>
						</li>
						
						<li><a href="total_documentation_count.php?doc=china_FORM_Samples.pdf" class="transition" target="_blank">
							<img src="assets/images/doc_china_FORM_Samples.png" class="img_carousel" /><br/><br/>
							Form samples (Chinese)
						</a>
						</li>
						
					<?php } ?>
					
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
		
		
		
		<?php
			
	
		
			if ($country == 'unitedkingdom')
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-UK15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=2015_Capital_Increase_Scheme_Note_UK_Employees.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_uk_scheme.png" class="img_carousel" /><br/><br/>
						Scheme share offer
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
		
		
	<?php
			$pays_fcpe_im_fr = array(
"congo",
"frenchguiana", 
"frenchpolynesia"


				
			);
			
			if (in_array($country,$pays_fcpe_im_fr))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>	
	
	
	<?php
			$pays_fcpe_im_es = array(
"chile", 
"costarica", 
"mexico", 
"spain", 
"peru"



				
			);
			
			if (in_array($country,$pays_fcpe_im_es))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Folleto
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de reserva y de suscripción
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de cancelación
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Resumen de la oferta

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento nacional
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>		
	
	<?php
			if ($country == 'poland')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-POL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Broszura
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-POL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Formularz rezerwacji i subskrypcji
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-POL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Formularz odwołania rezerwacji
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-POL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Oferta w skrócie

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplement lokalny
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		<?php
			if ($country == 'brazil')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Folheto
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de reserva e subscrição
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de retratação
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						A oferta em resumo

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento de País
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		<?php
			if ($country == 'austria')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Broschüre
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservierungs- und Zeichnungsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Widerrufsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Das angebot in kürze

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Länderspezifisches Merkblatt
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		<?php
			if ($country == 'czechrepublic')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-CS15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brožura
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-CS15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Rezervační a úpisový list
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-CS15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Odvolací list
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-CS15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Nabídka ve zkratce

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Klíčové informace pro investory - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Klíčové informace pro investory - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Specifické podmínky pro jednotlivé země
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		<?php
			if ($country == 'netherlands')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-IM-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-IM-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reserverings- en intekeningsformulier
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Herroepingsformulier
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-NL15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Het aanbod in het kort

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Essentiële beleggersinformatie - FCPE
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Essentiële beleggersinformatie - Relais
					</a>
					</li>
					
					
					</li>
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Brochure_November_2014_Dutch_Final.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_netherlands_bro_def.png" class="img_carousel" /><br/><br/>
						Brochure in DUTCH - final
					</a>
					</li>
					</li>
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Brochure_November_2014_English_Final.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_netherlands_bro_def.png" class="img_carousel" /><br/><br/>
						Brochure in ENGLISH - final
					</a>
					</li>
					
					
					<li><a href="total_documentation_count.php?doc=Aandelenplan_TOTAL2015_BelastingberekeningV1.xlsx" class="transition" target="_blank">
						<img src="assets/images/doc_Aandelenplan_TOTAL2015_BelastingberekeningV1.png" class="img_carousel" /><br/><br/>
						Aandelenplan TOTAL 2015 Belastingberekening
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=Attachment_fiscal_TOTAL2015_Netherlands_English.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_Attachment_fiscal_TOTAL2015_Netherlands_English.png" class="img_carousel" /><br/><br/>
						Attachment fiscal Netherlands (English)
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=Attachment_fiscal_TOTAL2015_Netherlands.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_Attachment_fiscal_TOTAL2015_Netherlands.png" class="img_carousel" /><br/><br/>
						Attachment fiscal Netherlands
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Appendix_A.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_CapitalIncrease2015_NL_Appendix_A.png" class="img_carousel" /><br/><br/>
						Appendix A
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Appendix_B.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_CapitalIncrease2015_NL_Appendix_B.png" class="img_carousel" /><br/><br/>
						Appendix B
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Bijlage_A.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_CapitalIncrease2015_NL_Bijlage_A.png" class="img_carousel" /><br/><br/>
						Bijlage A
					</a>
					</li>	
					<li><a href="total_documentation_count.php?doc=CapitalIncrease2015_NL_Bijlage_B.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_CapitalIncrease2015_NL_Bijlage_B.png" class="img_carousel" /><br/><br/>
						Bijlage B
					</a>
					</li>					
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Landensupplement
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		<?php
			if ($country == 'france')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-FR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-FR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-FR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-FR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-FRANCE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - FCPE
					</a>
					</li>
					
					
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-FRANCE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - Relais
					</a>
					</li>
					
					
					<li><a href="total_documentation_count.php?doc=DICI-RGLT_TAF.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - TOTAL ACTIONNARIAT France
					</a>
					</li>
					
					
					<li><a href="total_documentation_count.php?doc=SEPA_210x99.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_mandat_sepa.png" class="img_carousel" /><br/><br/>
						Mandat SEPA
					</a>
					</li>
					
					
					<li><a href="total_documentation_count.php?doc=FRANCE_memo_retraites.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_FRANCE_memo_retraites.png" class="img_carousel" /><br/><br/>
						Conditions relatives aux retraités
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		<?php
			$pays_fcpe_dif_en = array(
"azerbaijan", 
"botswana", 
"bulgaria", 
"ireland", 
"lesotho", 
"namibia", 
"norway", 
"philippines", 
"southafrica", 
"swaziland"


				
			);
			
			if (in_array($country,$pays_fcpe_dif_en))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					<!---->
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		<?php
			$pays_fcpe_dif_fr = array(
"cameroon",
"ivorycoast",
"lebanon", 
"luxembourg",
"mali", 
"mauritius", 
"senegal"


				
			);
			
			if (in_array($country,$pays_fcpe_dif_fr))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - FCPE

					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
        <?php
			if ($country == 'angola')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochura
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de reserva e subscrição
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletim de retratação
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-PT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						A oferta em resumo

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informações fundamentais destinadas aos investidores - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento de País
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		<?php
			$pays_fcpe_dif_es = array(
"panama"


				
			);
			
			if (in_array($country,$pays_fcpe_dif_es))
			{
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Folleto
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de reserva y de suscripción
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Boletín de cancelación
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-ES15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Resumen de la oferta

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						DICI - FCPE
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Suplemento nacional
					</a>
					</li>
					<?php } ?>
				 </ul>			
		<?php
			}
		?>
		
		
		
		
		
		
		
		
		
		 <?php
			if ($country == 'luxembourg' AND $lang['LANG'] == 'de')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Broschüre
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservierungs- und Zeichnungsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Widerrufsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Das angebot in kürze

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Länderspezifisches Merkblatt
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		
		
		 <?php
			if ($country == 'turkey')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-DIF-TUR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Broşür
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-DIF-TUR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Rezervasyon ve satın alma formu
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-TUR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						İptal Etme Formu
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-TUR15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Kisaca teklif

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Yatırımcı için önemli bilgiler - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Yatırımcı için önemli bilgiler - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Ülke Eki
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'switzerland' AND $lang['LANG'] == 'fr')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-NP-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-NP-IM-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-NP-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - FCPE
					</a>
					</li>
					<!--<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - Relais
					</a>
					</li>-->
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'switzerland' AND $lang['LANG'] == 'en')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-NP-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-NP-IM-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-NP-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'canada' AND $lang['LANG'] == 'en')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-NP-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-NP-DIF-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-EN15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-NP-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'canada' AND $lang['LANG'] == 'fr')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-FCPE-NP-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-FCPE-NP-DIF-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de réservation et de souscription
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-FCPE-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Bulletin de rétractation
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-FRINT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Offre en bref
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-NP-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Informations clés pour l'investisseur - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Notice Spécificités Pays
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'italy')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-AD-IM-IT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_BRO-AD-IM-IT15.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_MODULO_PRENOTAZIONE_SOTTOSCRIZIONE.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_IT_MODULO_PRENOTAZIONE_SOTTOSCRIZIONE.png" class="img_carousel" /><br/><br/>
						Modulo di prenotazione/sottoscrizione
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_MODULO_SOTTOSCRIZIONE.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_IT_MODULO_SOTTOSCRIZIONE.png" class="img_carousel" /><br/><br/>
						Modulo di Sottoscrizione
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-AD-IT15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_BREV-AD-IT15.png" class="img_carousel" /><br/><br/>
						Modulo di Revoca
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-RELAIS-IT-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_DICI-RELAIS-IT-15.png" class="img_carousel" /><br/><br/>
						Informazioni chiave per l'investitore - Relais
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_ATTESTATO_ESONERO_BELGIO.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_IT_ATTESTATO_ESONERO_BELGIO.png" class="img_carousel" /><br/><br/>
						Attestato di esonero dalla trattenuta mobiliare
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_kit_documenti_BNP_Paribas_Securities_Services.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_IT_kit_documenti_BNP_Paribas_Securities_Services.png" class="img_carousel" /><br/><br/>
						Contratto di Sottoscrizione e/o Collocamento con l’Intermediario e Schede Informative
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_VADEMECUM.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_IT_VADEMECUM.png" class="img_carousel" /><br/><br/>
						Vademecum per le operazioni di sottoscrizione delle azioni
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=IT_AC2015_PRESENTAZIONE_TAI.pptx" class="transition" target="_blank">
						<img src="assets/images/doc_IT_AC2015_PRESENTAZIONE_TAI.png" class="img_carousel" /><br/><br/>
						PPT : Riunione di informazione
					</a>
					</li>
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Guida locale
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'germany')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-AD-DIF-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Broschüre
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BRESA-AD-DIF-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservierungs- und Zeichnungsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-AD-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Widerrufsformular
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=OEB-AD-DE15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Das angebot in kürze

					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - FCPE
					</a>
					</li>
					<!----><li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Wichtige Anlegerinformationen - Relais
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=Free_Share_Plan_Rules_EN_FR.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_freesharesplanrules.png" class="img_carousel" /><br/><br/>
						Free Share Plan – Plan Rules (EN + FR)
					</a>
					</li>
					
					<!-- suppléments 3 docs pour germany -->
					<li><a href="total_documentation_count.php?doc=GERMANY_Ansassigkeitsbescheinigung.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Ansässigkeitsbescheinigung
					</a>
					</li>					
					<li><a href="total_documentation_count.php?doc=GERMANY_Einzugsermachtigung.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Einzugsermächtigung
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=GERMANY_Darlehensvertrag.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Darlehensvertrag
					</a>
					</li>
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Länderspezifisches Merkblatt
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		 <?php
			if ($country == 'unitedstates')
			{		
		?>
		
				<ul style="position:relative;top:190px;left:0;width:500px;margin-left:45px;list-style: none;">
					<li><a href="total_documentation_count.php?doc=BRO-US15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_brochure_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Total Capital 2015<br/>Brochure
					</a>
					</li>
					
					<!---->
					<li><a href="total_documentation_count.php?doc=BRESA-US15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_resa_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Reservation and subscription form
					</a>
					</li>
					<li><a href="total_documentation_count.php?doc=BREV-US15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_revo_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Cancellation Form
					</a>
					</li>
					
					
					
					<li><a href="total_documentation_count.php?doc=OEB-US15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_offre_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						The offer at a glance
					</a>
					</li>
					
					<li><a href="total_documentation_count.php?doc=US_Prospectus.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_US_Prospectus.png" class="img_carousel" /><br/><br/>
						Information booklet and prospectus
					</a>
					</li>
					
					
					<!--
					<li><a href="total_documentation_count.php?doc=DICI-FCPE-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - FCPE
					</a>
					</li>
					-->
					<!--<li><a href="total_documentation_count.php?doc=DICI-RELAIS-15.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_dici_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Key investor information - Relais
					</a>
					</li>-->
					
					<!--
					
					
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_beneficiary_<?php echo $lang['LANG']; ?>.png" class="img_carousel" /><br/><br/>
						Designation of beneficiary
					</a>
					</li>
					-->
					
					
					
					<?php if (in_array($country,$countries_sl_ok)) { ?>
					<li><a href="total_documentation_count.php?doc=SL_<?php echo $country.'_'.$lang['LANG']; ?>.pdf" class="transition" target="_blank">
						<img src="assets/images/doc_countrysupp.png" class="img_carousel" /><br/><br/>
						Country supplement
					</a>
					</li>
					<?php } ?>
				 </ul>		
			
		<?php
			}
		?>
		
		
		
		
		
		
			
		</div><!--/contenu_texte-->
		
	</div><!--/container 1000-->
      
      
		
		<script src="assets/js/jquery-1.11.0.min.js"></script>
		<script src="assets/js/jquery.roundabout.js"></script>
		<script src="assets/js/jquery.event.drag-2.2.js"></script>
		<script src="assets/js/jquery.event.drop-2.2.js"></script> 
		<script src="assets/js/jquery.roundabout-shapes.js"></script> 
		<script>
			$(document).ready(function() {
				//$("body").css("display", "none");
				//
				//$("body").fadeIn(1000);
			 
             
                $("ul").css({top:"100%"})
                $("ul").animate({top:"190px"},1000,'swing')
             
             
				//$("a.transition").click(function(event){
				//	event.preventDefault();
				//	linkLocation = this.href;
				//	//$("body").fadeOut(1000, redirectPage);
				//	$("ul").animate({bottom:"-900px"},1000,'swing', redirectPage)
				//});
				
				function redirectPage() {
					window.location = linkLocation;
				}
				var screen_width=screen.width;
				$('ul').roundabout({
					btnNext: ".btn_next",
					btnPrev: ".btn_prev",
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
		
		
		
		
		
		
       
	

	
<?php include ('inc_footer_gan.php'); ?>

</body>
</html>
