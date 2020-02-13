<?php

// Création nouvelle session.
session_start();

ini_set('display_errors', 'on');

if(isset($_GET['ct']))
{
    $_SESSION["prixref"] = 60;
    $_SESSION["coursecheance"] = 50;
    switch ($_GET['ct'])    // Définition des variables en fonction du pays
    {
        case 'france':
            $_SESSION["country"] = "france";
            $_SESSION["country_name"] = "France";
            $_SESSION["langue"] = "fr";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'australia':
            $_SESSION["country"] = "australia";
            $_SESSION["country_name"] = "Australia";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "AUD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1.59;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'austria':
            $_SESSION["country"] = "austria";
            $_SESSION["country_name"] = "Austria";
            $_SESSION["langue"] = "de";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'belgium_nl':
        case 'belgium_fr':
            $_SESSION["country"] = "belgium";
            $_SESSION["monnaie"] = "€";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            switch ($_GET['ct'])
            {
                case 'belgium_nl':
                    $_SESSION["country_name"] = "Belgïe";
                    $_SESSION["langue"] = "nlbe";
                    break;
                case 'belgium_fr':
                    $_SESSION["country_name"] = "Belgique";
                    $_SESSION["langue"] = "fr";
                    break;
            }
            break;
        case 'brazil':
            $_SESSION["country"] = "brazil";
            $_SESSION["country_name"] = "Brazil";
            $_SESSION["langue"] = "ptbr";
            $_SESSION["monnaie"] = "BRL";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 4.338;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'canada_en':
        case 'canada_fr':
            $_SESSION["country"] = "canada";
            $_SESSION["country_name"] = "Canada";
            $_SESSION["monnaie"] = "CAD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1.485;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            switch ($_GET['ct'])
            {
                case 'canada_en':
                    $_SESSION["langue"] = "en";
                    break;
                case 'canada_fr':
                    $_SESSION["langue"] = "fr";
                    break;
            }
            break;
        case 'germany':
            $_SESSION["country"] = "germany";
            $_SESSION["country_name"] = "Germany";
            $_SESSION["langue"] = "de";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'hongkong':
            $_SESSION["country"] = "hongkong";
            $_SESSION["country_name"] = "Hong Kong";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "HKD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 8.642;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'india':
            $_SESSION["country"] = "india";
            $_SESSION["country_name"] = "India";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "INR";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 73.771;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'italy':
            $_SESSION["country"] = "italy";
            $_SESSION["country_name"] = "Italy";
            $_SESSION["langue"] = "it";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'mexico':
            $_SESSION["country"] = "mexico";
            $_SESSION["country_name"] = "Mexico";
            $_SESSION["langue"] = "esal";
            $_SESSION["monnaie"] = "MXN";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 18.672;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'netherlands':
            $_SESSION["country"] = "netherlands";
            $_SESSION["country_name"] = "Netherlands";
            $_SESSION["langue"] = "nl";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'norway':
            $_SESSION["country"] = "norway";
            $_SESSION["country_name"] = "Norway";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "NOK";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 9.513;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'poland':
            $_SESSION["country"] = "poland";
            $_SESSION["country_name"] = "Poland";
            $_SESSION["langue"] = "pl";
            $_SESSION["monnaie"] = "PLN";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 4.222;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'portugal':
            $_SESSION["country"] = "portugal";
            $_SESSION["country_name"] = "Portugal";
            $_SESSION["langue"] = "pt";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'qatar':
            $_SESSION["country"] = "qatar";
            $_SESSION["country_name"] = "Qatar";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "QAR";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 4.077;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'romania':
            $_SESSION["country"] = "romania";
            $_SESSION["country_name"] = "Romania";
            $_SESSION["langue"] = "ro";
            $_SESSION["monnaie"] = "RON";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 4.411;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'saudiarabia':
            $_SESSION["country"] = "saudiarabia";
            $_SESSION["country_name"] = "Saudi Arabia";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "SAR";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 3.75;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'singapore':
            $_SESSION["country"] = "singapore";
            $_SESSION["country_name"] = "Singapore";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "SGD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1.586;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'southafrica':
            $_SESSION["country"] = "southafrica";
            $_SESSION["country_name"] = "South Africa";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "ZAR";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 15.318;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'spain':
            $_SESSION["country"] = "spain";
            $_SESSION["country_name"] = "Spain";
            $_SESSION["langue"] = "es";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'uae':
            $_SESSION["country"] = "uae";
            $_SESSION["country_name"] = "United Arab Emirates";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "AED";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 4.112;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'uk':
            $_SESSION["country"] = "uk";
            $_SESSION["country_name"] = "UK";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "GBP";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "sip";
            $_SESSION["taux"] = 0.735;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        case 'usa':
            $_SESSION["country"] = "usa";
            $_SESSION["country_name"] = "USA";
            $_SESSION["langue"] = "en";
            $_SESSION["monnaie"] = "USD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = 1.115;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            break;
        default:
            //header("location:index.php");
            break;
    } // fin switch ct


    switch ($_SESSION["langue"])
    {
        case 'fr':
            $_SESSION["prefixe_monnaie"] = '';
            $_SESSION["suffixe_monnaie"] = ' '.$_SESSION["monnaie"];
            $_SESSION["prefixe_monnaieref"] = '';
            $_SESSION["suffixe_monnaieref"] = ' '.$_SESSION["monnaieref"];
            $_SESSION["suffixe_pourcent"] =' %';
            $_SESSION["decimal"] = ',';
            $_SESSION["millier"] = ' ';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
        case 'en':
            $_SESSION["prefixe_monnaie"] = $_SESSION["monnaie"].' ';
            $_SESSION["suffixe_monnaie"] = '';
            $_SESSION["prefixe_monnaieref"] = $_SESSION["monnaieref"].' ';
            $_SESSION["suffixe_monnaieref"] = '';
            $_SESSION["suffixe_pourcent"] ='%';
            $_SESSION["decimal"] = '.';
            $_SESSION["millier"] = ',';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
        case 'us':
            $_SESSION["prefixe_monnaie"] = $_SESSION["monnaie"].' ';
            $_SESSION["suffixe_monnaie"] = '';
            $_SESSION["prefixe_monnaieref"] = $_SESSION["monnaieref"].'';
            $_SESSION["suffixe_monnaieref"] = '';
            $_SESSION["suffixe_pourcent"] ='%';
            $_SESSION["decimal"] = '.';
            $_SESSION["millier"] = ',';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
        case 'cn':
            $_SESSION["prefixe_monnaie"] = $_SESSION["monnaie"].' ';
            $_SESSION["suffixe_monnaie"] = '';
            $_SESSION["prefixe_monnaieref"] = $_SESSION["monnaieref"].'';
            $_SESSION["suffixe_monnaieref"] = '';
            $_SESSION["suffixe_pourcent"] ='%';
            $_SESSION["decimal"] = '.';
            $_SESSION["millier"] = ',';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
        case 'esal':
            $_SESSION["prefixe_monnaie"] = $_SESSION["monnaie"].' ';
            $_SESSION["suffixe_monnaie"] = '';
            $_SESSION["prefixe_monnaieref"] = $_SESSION["monnaieref"].'';
            $_SESSION["suffixe_monnaieref"] = '';
            $_SESSION["suffixe_pourcent"] ='%';
            $_SESSION["decimal"] = '.';
            $_SESSION["millier"] = ',';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
        case 'de':
            $_SESSION["prefixe_monnaie"] = $_SESSION["monnaie"].' ';
            $_SESSION["suffixe_monnaie"] = '';
            $_SESSION["prefixe_monnaieref"] = $_SESSION["monnaieref"].'';
            $_SESSION["suffixe_monnaieref"] = '';
            $_SESSION["suffixe_pourcent"] ='%';
            $_SESSION["decimal"] = '.';
            $_SESSION["millier"] = ',';
            $_SESSION["millier_monnaie"] = $_SESSION["millier"];    // = séparateur $millier si monnaie
            break;
    } // fin switch langue
} // fin if(isset($_GET['ct']))

if (!isset($_GET['ct']) && !isset($_SESSION["country"]))
{
    header("location:index.php");
}


// éléments des menus, avec un array d'arrays => en [0] la tête de menu, ensuite les sous-menus
$ELEMENTS_MENU = array( // nom groupe + couleur groupe + pages groupe
	"home" => array(
		"couleur" => 'violet',
		"sous_menu" => array()),
	"groupe" => array(
		"couleur" => 'bleuclair',
		"sous_menu" => array('groupe_video','groupe_thales_2015','groupe_chiffres')),
	"actionnariat" => array(
		"couleur" => 'bleufonce',
		"sous_menu" => array('actionnariat_au_coeur','actionnariat_retour')),
	"offre" => array(
		"couleur" => 'rose',
		"sous_menu" => array('offre_caracteristiques','offre_avantages')),
	"modalites" => array(
		"couleur" => 'taupe',
		"sous_menu" => array('modalites_qui_peut','modalites_combien','modalites_comment_souscrire','modalites_comment_regler','modalites_sursouscription')),
	"doc" => array(
		"couleur" => 'marron',
		"sous_menu" => array()),
	"faq" => array(
		"couleur" => 'marron',
		"sous_menu" => array()),
	"contact" => array(
		"couleur" => 'marron',
		"sous_menu" => array()),
	"mentions" => array(
		"couleur" => 'marron',
		"sous_menu" => array())
);

// NON affichés dans le menu en haut
$ELEMENTS_MENU_HIDDEN = array('contact','mentions');


$ELEMENTS_BULLES = array(
    'comprendre',
    'simuler',
    'souscrire'
);
$ELEMENTS_BULLES_COULEURS = array(
    'comprendre'=>'bleu',
    'simuler'=>'orange',
    'souscrire'=>'vert'
);

// langues sur le site de la banque en fonction des langues du site
$langue_banque = array(
    'de'=>'de',
    'en'=>'en',
    'es'=>'es',
    'esal'=>'es',
    'fr'=>'fr',
    'gr'=>'en',
    'it'=>'it',
    'nl'=>'nl',
    'nlbe'=>'nl',
    'pt'=>'pt',
    'ptbr'=>'pt',
    'th'=>'en'
);


	
extract($_SESSION);	
	
?>