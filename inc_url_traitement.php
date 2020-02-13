<?php


if(isset($_GET['pg']))
{
	$page = htmlspecialchars($_GET['pg']);
	foreach ($ELEMENTS_MENU as $grp_nom => $grp_data)
	{
		if (empty($grp_data['sous_menu']) AND $grp_nom == $page)
		{
			$group = $page;
		}
		elseif (in_array($page,$grp_data['sous_menu']))
		{
			$group = $grp_nom;
		}
		//else {$groupe = 'NONE';}
	}
	if(in_array($page,$ELEMENTS_BULLES))
	{
		$group = '';
	}

	if (!isset($group))
	{
		//echo $group;
		//echo $page;
		//var_dump($ELEMENTS_BULLES);
		header("location:index.php");
	}
}

require_once 'contenu_pages/_communs/lang.'.$langue.'.php';

if ($langue == 'fr') {$URL_SITE_GROUPE_INVESTISSEURS = 'https://www.thalesgroup.com/fr/homepage/worldwide/investisseurs';} // FR
else {$URL_SITE_GROUPE_INVESTISSEURS = 'https://www.thalesgroup.com/en/worldwide/investors';} // EN

if ($country=='france')
{
	$extention_img_speciale = "_france";
}
elseif ($form=='sip')
{
	$extention_img_speciale = "_sip";
}
else
{
	$extention_img_speciale = "";
}

?>