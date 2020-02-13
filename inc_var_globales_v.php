<?php

// Création nouvelle session.
session_start();

//var_dump($_SESSION);
//$FORM_OK = array('fcpe_ze','fcpe_hze','sar_ze','sar_hze');
$COUNTRY_OK = array('AUSTRALIA','AUSTRIA','BELGIUM','BRAZIL','CANADA','CHILE','CZECHREPUBLIC','FRANCE','FRENCHPOLYNESIA','GERMANY','HUNGARY','INDIA','INDONESIA','ITALY','LUXEMBOURG','MEXICO','MONACO','NETHERLANDS','NEWCALEDONIA','NORWAY','OMAN','PERU','POLAND','PORTUGAL','ROMANIA','SLOVAKIA','SPAIN','SWITZERLAND','TURKEY','UAE','UK','USA');
$LG_OK = array('ar','cs','de','en','es','esal','fr','hu','id','it','nlbe','nlpb','no','pl','pt','ptbr','ro','sk','tr','us');

$COUNTRIES = array(
    "AMERICA"=>array(
        'Brazil',
        'Canada (English)',
        'Canada (French)',
        'Mexico',
        'United States'),
    "ASIA PACIFIC"=>array(
        'Australia',
        'Hong Kong',
        'India',
        'Singapore'),
    "EUROPE"=>array(
        'Austria',
        'Belgium (Flemish)',
        'Belgium (French)',
        'France',
        'Germany',
        'Italy',
        'Netherlands',
        'Norway',
        'Poland',
        'Portugal',
        'Romania',
        'Spain',
        'United Kingdom'),
    "MIDDLE EAST & AFRICA"=>array(
        'Qatar',
        'Saudi Arabia',
        'South Africa',
        'United Arab Emirates')
);

if(isset($_GET['ct']))
{
    $_SESSION["prixref"] = 60;
    switch ($_GET['ct'])    // Définition des variables en fonction du pays
    {
        case 'france':
            $_SESSION["country"] = "france";
            $_SESSION["country_name"] = "France";
            $_SESSION["langue"] = $langue = "fr";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'belgium':
            switch ($_GET['lg'])    // Définition de la langue
            {
               case 'fr':
                    $_SESSION["country_name"] = "Belgique";
                    $_SESSION["langue"] = $langue = "fr";
                    break;
                case 'nlbe':
                    $_SESSION["country_name"] = "Belgïe";
                    $_SESSION["langue"] = $langue = "nlbe";
                    break;
            }
            $_SESSION["country"] = "belgium";
            $_SESSION["monnaie"] = "€";
            $_SESSION["monnaieref"] = "";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'canada':
            switch ($_GET['lg'])    // Définition de la langue
            {
               case 'fr':
                    $_SESSION["langue"] = $langue = "fr";
                    break;
                case 'en':
                    $_SESSION["langue"] = $langue = "en";
                    break;
            }
            $_SESSION["country_name"] = "Canada";
            $_SESSION["country"] = "canada";
            $_SESSION["monnaie"] = "CAD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "fcpe";
            $_SESSION["taux"] = 1.47;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 50;
            break;
        case 'germany':
            $_SESSION["country"] = "Germany";
            $_SESSION["langue"] = $langue = "de";
            $_SESSION["monnaie"] = "€";
            $monnaieref = "€";
            $_SESSION["form"] = "fcpe";
            $taux = 1;
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'brazil':
            $_SESSION["country"] = "Brazil";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "BRL";
            $monnaieref = "€";
            $_SESSION["form"] = "fcpe";
            $taux = "3.5";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'india':
            $_SESSION["country"] = "India";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "INR";
            $monnaieref = "€";
            $_SESSION["form"] = "fcpe";
            $taux = "70";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'italy':
            $_SESSION["country"] = "italy";
            $_SESSION["country_name"] = "Italy";
            $_SESSION["langue"] = $langue = "it";
            $_SESSION["monnaie"] = "EUR";
            $_SESSION["$monnaieref"] = "";
            $_SESSION["form"] = "ad";
            $_SESSION["$taux"] = "1";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'malaysia':
            $_SESSION["country"] = "Malaysia";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "MYR";
            $monnaieref = "€";
            $_SESSION["form"] = "sharessar";
            $taux = "4.20";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
        case 'mexico':
            $_SESSION["country"] = "Mexico";
            $_SESSION["langue"] = $langue = "esal";
            $_SESSION["monnaie"] = "MXN";
            $monnaieref = "€";
            $_SESSION["form"] = "fcpe";
            $taux = "17.5";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'singapore':
            $_SESSION["country"] = "Singapore";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "SGD";
            $monnaieref = "€";
            $_SESSION["form"] = "sharessar";
            $taux = "1.5";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'uae':
            $_SESSION["country"] = "UAE";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "AED";
            $monnaieref = "€";
            $_SESSION["form"] = "fcpe";
            $taux = "4";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'uk':
            $_SESSION["country"] = "UK";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "GBP";
            $monnaieref = "€";
            $_SESSION["form"] = "sip";
            $taux = "0.70";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        case 'usa':
            $_SESSION["country"] = "USA";
            $_SESSION["langue"] = $langue = "en";
            $_SESSION["monnaie"] = "USD";
            $_SESSION["monnaieref"] = "€";
            $_SESSION["form"] = "ad";
            $_SESSION["taux"] = "1.1";
            $_SESSION["salaire"] = 50000;
            $_SESSION["nbactioninv"] = 5;
            $_SESSION["coursecheance"] = 36;
            break;
        default:
            header("location:index.php");
            break;
    }
}
else
{
    header("location:index.php");
}


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
        }
}


// éléments des menus, avec un array d'arrays => en [0] la tête de menu, ensuite les sous-menus
$ELEMENTS_MENU = array( // couleur + groupe + pages...
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
		"sous_menu" => array())
);



//$ELEMENTS_BULLES = array(
//    'comprendre',
//    'simuler',
//    'souscrire',
//    'video',
//    'documentation',
//    'qa'
//);

$ELEMENTS_BULLES = array(
    //'message_pc',
    'comprendre',
    'simuler',
    'souscrire'
);
$ELEMENTS_BULLES_COULEURS = array(
    //'message_pc',
    'comprendre'=>'bleu',
    'simuler'=>'orange',
    'souscrire'=>'vert'
);


$ELEMENTS_WIDGETS_LEFT = array(
	'doc',
	'faq',
	'alertes',
	'contact'
);

$DOC_SOUS_MENUS = array(
	'kitsouscription',
	'docjuridique'
);

$ELEMENTS_WIDGETS_RIGHT = array(
	'video_formules',
	'video_hausse',
	'simulez',
	'souscrire'
);



	
extract($_SESSION);	
	
?>