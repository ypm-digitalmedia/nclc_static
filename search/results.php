<?php

$anyPost = false;
	
$data = $_POST['Slideindex'];
	
if( !empty($data['slide_id']) || 
 	!empty($data['family']) || 
 	!empty($data['genus']) || 
 	!empty($data['species']) || 
 	!empty($data['subspecies']) || 
 	!empty($data['author']) || 
 	!empty($data['other_authors']) || 
 	!empty($data['identifier']) || 
 	!empty($data['collector']) || 
 	!empty($data['country']) || 
 	!empty($data['state_province']) || 
 	!empty($data['county']) || 
 	!empty($data['locality']) || 
 	!empty($data['elevation']) || 
 	!empty($data['remark']) || 
 	!empty($data['herbarium_code']) || 
 	!empty($data['herbarium_specimen_number']) ) {
	
		$anyPost = true;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0;" />
<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../assets/557c8b79/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="../themes/clearleaf/css/style.css" />
<link rel="stylesheet" type="text/css" href="../themes/clearleaf/css/form.css" />
<link rel="stylesheet" type="text/css" href="../themes/clearleaf/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="../assets/a664bde1/eflatmenu.css" />
<script type="text/javascript" src="../assets/c9428dfa/jquery.min.js"></script>
<script type="text/javascript" src="../assets/557c8b79/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../assets/a664bde1/eflatmenu.js"></script>
<script type="text/javascript" src="../js/lodash.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
 <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="/nclc/themes/clearleaf/css/ie.css" />
<![endif]-->
<title>Search Results | National Cleared Leaf Collection - Yale Peabody Museum of Natural History</title>	
</head>
<body> 

	<div class="content">
		<div class="block">
			<div class="logos">
					<a target="_blank" class="align-left" href="https://www.mnh.si.edu/"><img src="../images/smithsonian.png" alt="Smithsonian" /></a>					<a target="_blank" class="align-right" href="http://peabody.yale.edu"><img src="../images/peabody.png" alt="Yale Peabody Museum of Natural History" /></a>			</div>
			<div class="rightleaf">
	    		<img src="../images/right-leaf.png" alt="" />	        </div>
	    	<div class="sidebar">
	    		<img src="../images/sidebar.png" alt="" />	        </div>
	        <div class="header">
	    		<img src="../images/header.png" alt="" />	    	</div>
		</div>
	    <div class="menu">
	    		<a id="touch-menu" class="mobile-menu" href="index.html#"><i class="fa fa-bars"></i>Menu</a>
<nav>
    <ul class="eflat-menu">

        <li /><a href="../">Home</a></li><li /><a href="../about">About</a></li><li /><a href="../leo-hickey">Leo Hickey</a></li><li /><a href="../search">Search</a></li><li /><a href="../saved">Saved Results</a></li><li /><a href="../contact">Contact Us</a></li>    </ul>
</nav>	    </div>
	    <div class="block">
	    	<div class="bodycontent">
	    	<div class="contentarea">
	        	<div id="content">
<!--<button class="btn" id="searchAgain">Search Again</button>					-->
	
<form type="form" id="findslides" action="results.php" method="post" style="display: none">
<fieldset>
<legend><h2>Search for Slides</h2></legend>

<div class="row field_slide_id">
<label for="Slideindex_slide_id">Slide</label>
<input maxlength="6" size="30" name="Slideindex[slide_id]" id="Slideindex_slide_id" type="text" value="<?= $data['slide_id'] ?>" />

</div>
<div class="row field_family_id">
<label for="Slideindex_family_id">Family</label>
<select name="Slideindex[family]" id="Slideindex_family">
	<option value="">---Select One---</option>
	
	<option value="Acanthaceae">Acanthaceae</option>
	<option value="Aceraceae">Aceraceae</option>
	<option value="Achariaceae">Achariaceae</option>
	<option value="Achatocarpaceae">Achatocarpaceae</option>
	<option value="Actinidiaceae">Actinidiaceae</option>
	<option value="Adoxaceae">Adoxaceae</option>
	<option value="Aextoxicaceae">Aextoxicaceae</option>
	<option value="Agdestidaceae">Agdestidaceae</option>
	<option value="Aizoaceae">Aizoaceae</option>
	<option value="Akaniaceae">Akaniaceae</option>
	<option value="Alangiaceae">Alangiaceae</option>
	<option value="Alismataceae">Alismataceae</option>
	<option value="Alseuosmiaceae">Alseuosmiaceae</option>
	<option value="Amaranthaceae">Amaranthaceae</option>
	<option value="Amborellaceae">Amborellaceae</option>
	<option value="Anacardiaceae">Anacardiaceae</option>
	<option value="Anacardiaceae/Julianaceae">Anacardiaceae/Julianaceae</option>
	<option value="Ancistrocladaceae">Ancistrocladaceae</option>
	<option value="Annonaceae">Annonaceae</option>
	<option value="Apiaceae">Apiaceae</option>
	<option value="Apocynaceae">Apocynaceae</option>
	<option value="Aptandraceae">Aptandraceae</option>
	<option value="Aquifoliaceae">Aquifoliaceae</option>
	<option value="Araceae">Araceae</option>
	<option value="Araliaceae">Araliaceae</option>
	<option value="Aralidiaceae">Aralidiaceae</option>
	<option value="Araucariaceae">Araucariaceae</option>
	<option value="Arecaceae">Arecaceae</option>
	<option value="Aristolochiaceae">Aristolochiaceae</option>
	<option value="Asclepiadaceae">Asclepiadaceae</option>
	<option value="Asparagaceae">Asparagaceae</option>
	<option value="Asteraceae">Asteraceae</option>
	<option value="Asteropeiaceae">Asteropeiaceae</option>
	<option value="Atherospermataceae">Atherospermataceae</option>
	<option value="Austrobaileyaceae">Austrobaileyaceae</option>
	<option value="Averrhoaceae">Averrhoaceae</option>
	<option value="Balanitaceae">Balanitaceae</option>
	<option value="Balanophoraceae">Balanophoraceae</option>
	<option value="Balanopsidaceae">Balanopsidaceae</option>
	<option value="Balsaminaceae">Balsaminaceae</option>
	<option value="Barbeyaceae">Barbeyaceae</option>
	<option value="Basellaceae">Basellaceae</option>
	<option value="Bataceae">Bataceae</option>
	<option value="Begoniaceae">Begoniaceae</option>
	<option value="Berberidaceae">Berberidaceae</option>
	<option value="Betulaceae">Betulaceae</option>
	<option value="Biebersteiniaceae">Biebersteiniaceae</option>
	<option value="Bignoniaceae">Bignoniaceae</option>
	<option value="Bixaceae">Bixaceae</option>
	<option value="Bombacaceae">Bombacaceae</option>
	<option value="Bonnetiaceae">Bonnetiaceae</option>
	<option value="Boraginaceae">Boraginaceae</option>
	<option value="Brassicaceae">Brassicaceae</option>
	<option value="Bretschneideraceae">Bretschneideraceae</option>
	<option value="Brexiaceae">Brexiaceae</option>
	<option value="Brunelliaceae">Brunelliaceae</option>
	<option value="Bruniaceae">Bruniaceae</option>
	<option value="Buddlejaceae">Buddlejaceae</option>
	<option value="Burseraceae">Burseraceae</option>
	<option value="Buxaceae">Buxaceae</option>
	<option value="Byblidaceae">Byblidaceae</option>
	<option value="Cactaceae">Cactaceae</option>
	<option value="Calycanthaceae">Calycanthaceae</option>
	<option value="Calyceraceae">Calyceraceae</option>
	<option value="Campanulaceae">Campanulaceae</option>
	<option value="Canellaceae">Canellaceae</option>
	<option value="Cannabaceae">Cannabaceae</option>
	<option value="Caprifoliaceae">Caprifoliaceae</option>
	<option value="Caricaceae">Caricaceae</option>
	<option value="Caryocaraceae">Caryocaraceae</option>
	<option value="Caryophyllaceae">Caryophyllaceae</option>
	<option value="Celastraceae">Celastraceae</option>
	<option value="Cephalotaceae">Cephalotaceae</option>
	<option value="Ceratophyllaceae">Ceratophyllaceae</option>
	<option value="Cercidiphyllaceae">Cercidiphyllaceae</option>
	<option value="Chenopodiaceae">Chenopodiaceae</option>
	<option value="Chlaenaceae">Chlaenaceae</option>
	<option value="Chloranthaceae">Chloranthaceae</option>
	<option value="Chrysobalanaceae">Chrysobalanaceae</option>
	<option value="Circaeasteraceae">Circaeasteraceae</option>
	<option value="Cistaceae">Cistaceae</option>
	<option value="Clethraceae">Clethraceae</option>
	<option value="Clusiaceae">Clusiaceae</option>
	<option value="Cneoraceae">Cneoraceae</option>
	<option value="Cochlospermaceae">Cochlospermaceae</option>
	<option value="Combretaceae">Combretaceae</option>
	<option value="Commelinaceae">Commelinaceae</option>
	<option value="Compositae">Compositae</option>
	<option value="Connaraceae">Connaraceae</option>
	<option value="Convolvulaceae">Convolvulaceae</option>
	<option value="Coriariaceae">Coriariaceae</option>
	<option value="Cornaceae">Cornaceae</option>
	<option value="Crassulaceae">Crassulaceae</option>
	<option value="Crossosomataceae">Crossosomataceae</option>
	<option value="Cruciferae">Cruciferae</option>
	<option value="Crypteroniaceae">Crypteroniaceae</option>
	<option value="Ctenolophonaceae">Ctenolophonaceae</option>
	<option value="Cucurbitaceae">Cucurbitaceae</option>
	<option value="Cunoniaceae">Cunoniaceae</option>
	<option value="Cyatheaceae">Cyatheaceae</option>
	<option value="Cyclanthaceae">Cyclanthaceae</option>
	<option value="Cyperaceae/Gramineae">Cyperaceae/Gramineae</option>
	<option value="Cyrillaceae">Cyrillaceae</option>
	<option value="Daphniphyllaceae">Daphniphyllaceae</option>
	<option value="Datiscaceae">Datiscaceae</option>
	<option value="Davidiaceae">Davidiaceae</option>
	<option value="Davidsoniaceae">Davidsoniaceae</option>
	<option value="Degeneraceae">Degeneraceae</option>
	<option value="Desfontainiaceae">Desfontainiaceae</option>
	<option value="Diapensiaceae">Diapensiaceae</option>
	<option value="Dichapetalaceae">Dichapetalaceae</option>
	<option value="Didiereaceae">Didiereaceae</option>
	<option value="Didymelaceae">Didymelaceae</option>
	<option value="Diegodendraceae">Diegodendraceae</option>
	<option value="Dilleniaceae">Dilleniaceae</option>
	<option value="Dioncophyllaceae">Dioncophyllaceae</option>
	<option value="Dioscoreaceae">Dioscoreaceae</option>
	<option value="Dipentodontaceae">Dipentodontaceae</option>
	<option value="Dipsacaceae">Dipsacaceae</option>
	<option value="Dipteridaceae">Dipteridaceae</option>
	<option value="Dipterocarpaceae">Dipterocarpaceae</option>
	<option value="Droseraceae">Droseraceae</option>
	<option value="Ebenaceae">Ebenaceae</option>
	<option value="Elaeocarpaceae">Elaeocarpaceae</option>
	<option value="Elatinaceae">Elatinaceae</option>
	<option value="Epacridaceae">Epacridaceae</option>
	<option value="Ericaceae">Ericaceae</option>
	<option value="Erythroxylaceae">Erythroxylaceae</option>
	<option value="Escalloniaceae">Escalloniaceae</option>
	<option value="Eucommiaceae">Eucommiaceae</option>
	<option value="Eucryphiaceae">Eucryphiaceae</option>
	<option value="Euphorbiaceae">Euphorbiaceae</option>
	<option value="Eupomatiaceae">Eupomatiaceae</option>
	<option value="Eupteleaceae">Eupteleaceae</option>
	<option value="Fagaceae">Fagaceae</option>
	<option value="Flacourtiaceae">Flacourtiaceae</option>
	<option value="Francoaceae">Francoaceae</option>
	<option value="Frankeniaceae">Frankeniaceae</option>
	<option value="Fumariaceae">Fumariaceae</option>
	<option value="Garryaceae">Garryaceae</option>
	<option value="Geissolomataceae">Geissolomataceae</option>
	<option value="Gentianaceae">Gentianaceae</option>
	<option value="Geraniaceae">Geraniaceae</option>
	<option value="Gesneriaceae">Gesneriaceae</option>
	<option value="Ginkgoaceae">Ginkgoaceae</option>
	<option value="Glaucidiaceae">Glaucidiaceae</option>
	<option value="Globulariaceae">Globulariaceae</option>
	<option value="Gnetaceae">Gnetaceae</option>
	<option value="Gomortegaceae">Gomortegaceae</option>
	<option value="Gramineae">Gramineae</option>
	<option value="Greyiaceae">Greyiaceae</option>
	<option value="Griseliniaceae">Griseliniaceae</option>
	<option value="Grossulariaceae">Grossulariaceae</option>
	<option value="Gunneraceae">Gunneraceae</option>
	<option value="Gyrostemonaceae">Gyrostemonaceae</option>
	<option value="Haloragidaceae">Haloragidaceae</option>
	<option value="Hamamelidaceae">Hamamelidaceae</option>
	<option value="Helwingiaceae">Helwingiaceae</option>
	<option value="Hernandiaceae">Hernandiaceae</option>
	<option value="Himantandraceae">Himantandraceae</option>
	<option value="Hippocastanaceae">Hippocastanaceae</option>
	<option value="Huaceae">Huaceae</option>
	<option value="Hugoniaceae">Hugoniaceae</option>
	<option value="Humiriaceae">Humiriaceae</option>
	<option value="Hydrangeaceae">Hydrangeaceae</option>
	<option value="Hydrastidaceae">Hydrastidaceae</option>
	<option value="Hydrocharitaceae">Hydrocharitaceae</option>
	<option value="Hydrophyllaceae">Hydrophyllaceae</option>
	<option value="Hydrostachydaceae">Hydrostachydaceae</option>
	<option value="Hypecoaceae">Hypecoaceae</option>
	<option value="Hypericaceae">Hypericaceae</option>
	<option value="Hypseocharitaceae">Hypseocharitaceae</option>
	<option value="Icacinaceae">Icacinaceae</option>
	<option value="Idiospermaceae">Idiospermaceae</option>
	<option value="Illiciaceae">Illiciaceae</option>
	<option value="Irvingaceae">Irvingaceae</option>
	<option value="Iteaceae">Iteaceae</option>
	<option value="Ixonanthaceae">Ixonanthaceae</option>
	<option value="Juglandaceae">Juglandaceae</option>
	<option value="Julianaceae">Julianaceae</option>
	<option value="Juncaginaceae">Juncaginaceae</option>
	<option value="Krameriaceae">Krameriaceae</option>
	<option value="Labiatae">Labiatae</option>
	<option value="Lacistemataceae">Lacistemataceae</option>
	<option value="Lactoridaceae">Lactoridaceae</option>
	<option value="Lamiaceae">Lamiaceae</option>
	<option value="Lardizabalaceae">Lardizabalaceae</option>
	<option value="Lauraceae">Lauraceae</option>
	<option value="Lecythidaceae">Lecythidaceae</option>
	<option value="Leeaceae">Leeaceae</option>
	<option value="Leguminosae">Leguminosae</option>
	<option value="Leitneriaceae">Leitneriaceae</option>
	<option value="Lentibulariaceae">Lentibulariaceae</option>
	<option value="Lepidobotryaceae">Lepidobotryaceae</option>
	<option value="Liliaceae">Liliaceae</option>
	<option value="Limnanthaceae">Limnanthaceae</option>
	<option value="Linaceae">Linaceae</option>
	<option value="Loasaceae">Loasaceae</option>
	<option value="Loganiaceae">Loganiaceae</option>
	<option value="Lophiraceae">Lophiraceae</option>
	<option value="Loranthaceae">Loranthaceae</option>
	<option value="Lythraceae">Lythraceae</option>
	<option value="Magnoliaceae">Magnoliaceae</option>
	<option value="Malesherbiaceae">Malesherbiaceae</option>
	<option value="Malpighiaceae">Malpighiaceae</option>
	<option value="Malvaceae">Malvaceae</option>
	<option value="Marantaceae">Marantaceae</option>
	<option value="Martyniaceae">Martyniaceae</option>
	<option value="Mastixiaceae">Mastixiaceae</option>
	<option value="Melastomataceae">Melastomataceae</option>
	<option value="Meliaceae">Meliaceae</option>
	<option value="Melianthaceae">Melianthaceae</option>
	<option value="Meliosmaceae">Meliosmaceae</option>
	<option value="Memecylaceae">Memecylaceae</option>
	<option value="Mendonciaceae">Mendonciaceae</option>
	<option value="Menispermaceae">Menispermaceae</option>
	<option value="Menyanthaceae">Menyanthaceae</option>
	<option value="Misodendraceae">Misodendraceae</option>
	<option value="Molluginaceae">Molluginaceae</option>
	<option value="Monimiaceae">Monimiaceae</option>
	<option value="Montiniaceae">Montiniaceae</option>
	<option value="Moraceae">Moraceae</option>
	<option value="Myoporaceae">Myoporaceae</option>
	<option value="Myricaceae">Myricaceae</option>
	<option value="Myristicaceae">Myristicaceae</option>
	<option value="Myrothamnaceae">Myrothamnaceae</option>
	<option value="Myrsinaceae">Myrsinaceae</option>
	<option value="Myrtaceae">Myrtaceae</option>
	<option value="Nandinaceae">Nandinaceae</option>
	<option value="Nelumbonaceae">Nelumbonaceae</option>
	<option value="Nepenthaceae">Nepenthaceae</option>
	<option value="Neuradaceae">Neuradaceae</option>
	<option value="Nitrariaceae">Nitrariaceae</option>
	<option value="Nymphaeaceae">Nymphaeaceae</option>
	<option value="Nyssaceae">Nyssaceae</option>
	<option value="Ochnaceae">Ochnaceae</option>
	<option value="Olacaceae">Olacaceae</option>
	<option value="Oleaceae">Oleaceae</option>
	<option value="Oliniaceae">Oliniaceae</option>
	<option value="Onagraceae">Onagraceae</option>
	<option value="Oncothecaceae">Oncothecaceae</option>
	<option value="Opiliaceae">Opiliaceae</option>
	<option value="Orchidaceae">Orchidaceae</option>
	<option value="Orobanchaceae">Orobanchaceae</option>
	<option value="Oxalidaceae">Oxalidaceae</option>
	<option value="Paeoniaceae">Paeoniaceae</option>
	<option value="Pandaceae">Pandaceae</option>
	<option value="Papaveraceae">Papaveraceae</option>
	<option value="Papilionaceae">Papilionaceae</option>
	<option value="Paracryphiaceae">Paracryphiaceae</option>
	<option value="Passifloraceae">Passifloraceae</option>
	<option value="Pedaliaceae">Pedaliaceae</option>
	<option value="Peganaceae">Peganaceae</option>
	<option value="Penaeaceae">Penaeaceae</option>
	<option value="Pentadiplandraceae">Pentadiplandraceae</option>
	<option value="Pentaphragmataceae">Pentaphragmataceae</option>
	<option value="Penthoraceae">Penthoraceae</option>
	<option value="Peridiscaceae">Peridiscaceae</option>
	<option value="Periplocaceae">Periplocaceae</option>
	<option value="Phellineaceae">Phellineaceae</option>
	<option value="Philadelphaceae">Philadelphaceae</option>
	<option value="Phrymaceae">Phrymaceae</option>
	<option value="Phytolaccaceae">Phytolaccaceae</option>
	<option value="Picrodendraceae">Picrodendraceae</option>
	<option value="Pinaceae">Pinaceae</option>
	<option value="Piperaceae">Piperaceae</option>
	<option value="Pittosporaceae">Pittosporaceae</option>
	<option value="Plantaginaceae">Plantaginaceae</option>
	<option value="Platanaceae">Platanaceae</option>
	<option value="Plumbaginaceae">Plumbaginaceae</option>
	<option value="Poaceae">Poaceae</option>
	<option value="Podoaceae">Podoaceae</option>
	<option value="Podocarpaceae">Podocarpaceae</option>
	<option value="Podophyllaceae">Podophyllaceae</option>
	<option value="Polemoniaceae">Polemoniaceae</option>
	<option value="Polygalaceae">Polygalaceae</option>
	<option value="Polygonaceae">Polygonaceae</option>
	<option value="Portulacaceae">Portulacaceae</option>
	<option value="Potamogetonaceae">Potamogetonaceae</option>
	<option value="Primulaceae">Primulaceae</option>
	<option value="Proteaceae">Proteaceae</option>
	<option value="Pterostemonaceae">Pterostemonaceae</option>
	<option value="Punicaceae">Punicaceae</option>
	<option value="Quiinaceae">Quiinaceae</option>
	<option value="Rafflesiaceae">Rafflesiaceae</option>
	<option value="Ranunculaceae">Ranunculaceae</option>
	<option value="Resedaceae">Resedaceae</option>
	<option value="Retziaceae/Solanaceae">Retziaceae/Solanaceae</option>
	<option value="Rhabdodendraceae">Rhabdodendraceae</option>
	<option value="Rhamnaceae">Rhamnaceae</option>
	<option value="Rhizophoraceae">Rhizophoraceae</option>
	<option value="Rhoipteleaceae">Rhoipteleaceae</option>
	<option value="Rhopalocarpaceae">Rhopalocarpaceae</option>
	<option value="Roridulaceae">Roridulaceae</option>
	<option value="Rosaceae">Rosaceae</option>
	<option value="Rubiaceae">Rubiaceae</option>
	<option value="Rutaceae">Rutaceae</option>
	<option value="Sabiaceae">Sabiaceae</option>
	<option value="Salicaceae">Salicaceae</option>
	<option value="Santalaceae">Santalaceae</option>
	<option value="Sapindaceae">Sapindaceae</option>
	<option value="Sapotaceae">Sapotaceae</option>
	<option value="Sarcolaenaceae">Sarcolaenaceae</option>
	<option value="Sarcospermataceae">Sarcospermataceae</option>
	<option value="Sargentodoxaceae">Sargentodoxaceae</option>
	<option value="Sarraceniaceae">Sarraceniaceae</option>
	<option value="Saururaceae">Saururaceae</option>
	<option value="Saxifragaceae">Saxifragaceae</option>
	<option value="Schisandraceae">Schisandraceae</option>
	<option value="Schizaeaceae">Schizaeaceae</option>
	<option value="Scrophulariaceae">Scrophulariaceae</option>
	<option value="Scytopetalaceae">Scytopetalaceae</option>
	<option value="Simarubaceae">Simarubaceae</option>
	<option value="Simmondsiaceae">Simmondsiaceae</option>
	<option value="Smilacaceae">Smilacaceae</option>
	<option value="Solanaceae">Solanaceae</option>
	<option value="Sonneratiaceae">Sonneratiaceae</option>
	<option value="Sphaerosepalaceae">Sphaerosepalaceae</option>
	<option value="Sphenostemonaceae">Sphenostemonaceae</option>
	<option value="Stachyuraceae">Stachyuraceae</option>
	<option value="Staphyleaceae">Staphyleaceae</option>
	<option value="Stemonaceae">Stemonaceae</option>
	<option value="Sterculiaceae">Sterculiaceae</option>
	<option value="Stracaceae">Stracaceae</option>
	<option value="Strelitziaceae">Strelitziaceae</option>
	<option value="Stylidiaceae">Stylidiaceae</option>
	<option value="Stylobasiaceae">Stylobasiaceae</option>
	<option value="Styracaceae">Styracaceae</option>
	<option value="Symplocaceae">Symplocaceae</option>
	<option value="Taccaceae">Taccaceae</option>
	<option value="Tamaricaceae">Tamaricaceae</option>
	<option value="Taxaceae">Taxaceae</option>
	<option value="Taxodiaceae">Taxodiaceae</option>
	<option value="Ternstroemiaceae">Ternstroemiaceae</option>
	<option value="Tetracarpaeaceae">Tetracarpaeaceae</option>
	<option value="Tetracentraceae">Tetracentraceae</option>
	<option value="Theaceae">Theaceae</option>
	<option value="Thunbergiaceae">Thunbergiaceae</option>
	<option value="Thymelaeaceae">Thymelaeaceae</option>
	<option value="Ticodendraceae">Ticodendraceae</option>
	<option value="Tiliaceae">Tiliaceae</option>
	<option value="Toricelliaceae">Toricelliaceae</option>
	<option value="Trapaceae">Trapaceae</option>
	<option value="Trapellaceae">Trapellaceae</option>
	<option value="Tremandraceae">Tremandraceae</option>
	<option value="Tribelaceae">Tribelaceae</option>
	<option value="Trigoniaceae">Trigoniaceae</option>
	<option value="Trilliaceae">Trilliaceae</option>
	<option value="Trimeniaceae">Trimeniaceae</option>
	<option value="Trochodendraceae">Trochodendraceae</option>
	<option value="Tropaeolaceae">Tropaeolaceae</option>
	<option value="Turneraceae">Turneraceae</option>
	<option value="Typhaceae">Typhaceae</option>
	<option value="Ulmaceae">Ulmaceae</option>
	<option value="Umbelliferae">Umbelliferae</option>
	<option value="Urticaceae">Urticaceae</option>
	<option value="Vacciniaceae">Vacciniaceae</option>
	<option value="Vahliaceae">Vahliaceae</option>
	<option value="Valerianaceae">Valerianaceae</option>
	<option value="Verbenaceae">Verbenaceae</option>
	<option value="Violaceae">Violaceae</option>
	<option value="Vitaceae">Vitaceae</option>
	<option value="Vivianiaceae">Vivianiaceae</option>
	<option value="Vochysiaceae">Vochysiaceae</option>
	<option value="Welwitschiaceae">Welwitschiaceae</option>
	<option value="Winteraceae">Winteraceae</option>
	<option value="Zingiberaceae">Zingiberaceae</option>
	<option value="Zygophyllaceae">Zygophyllaceae</option>
</select>
<script type="text/javascript">	
	$("#Slideindex_family").val("<?= $data['family'] ?>");
</script>

</div>
<div class="row field_genus">
<label for="Slideindex_genus">Genus</label>
<input name="Slideindex[genus]" id="Slideindex_genus" type="text" value="<?= $data['genus'] ?>" />

</div>
<div class="row field_species">
<label for="Slideindex_species">Species</label>
<input size="30" name="Slideindex[species]" id="Slideindex_species" type="text" value="<?= $data['species'] ?>" />

</div>
<div class="row field_subspecies">
<label for="Slideindex_subspecies">Variety/Subspecies</label>
<input size="30" name="Slideindex[subspecies]" id="Slideindex_subspecies" type="text" value="<?= $data['subspecies'] ?>" />

</div>
<div class="row field_author">
<label for="Slideindex_author">Primary Author</label>
<input size="30" name="Slideindex[author]" id="Slideindex_author" type="text" value="<?= $data['author'] ?>" />

</div>
<div class="row field_other_authors">
<label for="Slideindex_other_authors">Other Authors</label>
<input size="30" name="Slideindex[other_authors]" id="Slideindex_other_authors" type="text" value="<?= $data['other_authors'] ?>" />

</div>
<div class="row field_identifier">
<label for="Slideindex_identifier">Identifier</label>
<input size="30" name="Slideindex[identifier]" id="Slideindex_identifier" type="text" value="<?= $data['identifier'] ?>" />

</div>
<div class="row field_collector">
<label for="Slideindex_collector">Collector</label>
<input size="30" name="Slideindex[collector]" id="Slideindex_collector" type="text" value="<?= $data['collector'] ?>" />

</div>
<div class="row field_country_id">
<label for="Slideindex_country_id">Region/Country</label>
<select name="Slideindex[country]" id="Slideindex_country">
	<option value="">---Select One---</option>

	<option value="Abyssinia">Abyssinia</option>
	<option value="Africa">Africa</option>
	<option value="Albania">Albania</option>
	<option value="Aleutian Islands">Aleutian Islands</option>
	<option value="Algeria">Algeria</option>
	<option value="Angola">Angola</option>
	<option value="Antilles">Antilles</option>
	<option value="Argentina">Argentina</option>
	<option value="Asia">Asia</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azores">Azores</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bechuanaland">Bechuanaland</option>
	<option value="Belgian Congo">Belgian Congo</option>
	<option value="Belize">Belize</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bikini Island">Bikini Island</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bonin Islands">Bonin Islands</option>
	<option value="Borneo">Borneo</option>
	<option value="Brazil">Brazil</option>
	<option value="British East Africa">British East Africa</option>
	<option value="British Guiana">British Guiana</option>
	<option value="British Guinea">British Guinea</option>
	<option value="British Honduras">British Honduras</option>
	<option value="British India">British India</option>
	<option value="British New Guinea">British New Guinea</option>
	<option value="British North Borneo">British North Borneo</option>
	<option value="British Virgin Islands">British Virgin Islands</option>
	<option value="British West Indies">British West Indies</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burma">Burma</option>
	<option value="Burundi">Burundi</option>
	<option value="Cabinda">Cabinda</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Canal Zone Panama">Canal Zone Panama</option>
	<option value="Canary Islands">Canary Islands</option>
	<option value="Caroline Islands">Caroline Islands</option>
	<option value="Central America">Central America</option>
	<option value="Ceylon">Ceylon</option>
	<option value="Chile">Chile</option>
	<option value="Chile / Peru">Chile / Peru</option>
	<option value="China">China</option>
	<option value="Colombia">Colombia</option>
	<option value="Congo">Congo</option>
	<option value="Congo Free State">Congo Free State</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Crete">Crete</option>
	<option value="Cuba">Cuba</option>
	<option value="Curacao">Curacao</option>
	<option value="Czechoslovakia">Czechoslovakia</option>
	<option value="Denmark">Denmark</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Dutch Guiana">Dutch Guiana</option>
	<option value="Dutch West Indies">Dutch West Indies</option>
	<option value="East Africa">East Africa</option>
	<option value="Ecuador">Ecuador</option>
	<option value="El Salvador">El Salvador</option>
	<option value="England">England</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Europe">Europe</option>
	<option value="Fiji Islands">Fiji Islands</option>
	<option value="Finland">Finland</option>
	<option value="Formosa">Formosa</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Guinea">French Guinea</option>
	<option value="Gabon">Gabon</option>
	<option value="Galapagos">Galapagos</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gilbert Islands">Gilbert Islands</option>
	<option value="Gold Coast">Gold Coast</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadaloupe">Guadaloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guayana">Guayana</option>
	<option value="Haiti">Haiti</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Himalayas">Himalayas</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indochina">Indochina</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Ivory Coast">Ivory Coast</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Java">Java</option>
	<option value="Jordan">Jordan</option>
	<option value="Juan Fernandez Island">Juan Fernandez Island</option>
	<option value="Kenya">Kenya</option>
	<option value="Korea">Korea</option>
	<option value="Kyimbila">Kyimbila</option>
	<option value="Laos">Laos</option>
	<option value="Latin America">Latin America</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesser Antilles">Lesser Antilles</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Lord Howe Island">Lord Howe Island</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Madeira">Madeira</option>
	<option value="Malay Archipelago">Malay Archipelago</option>
	<option value="Malaya">Malaya</option>
	<option value="Manchuria">Manchuria</option>
	<option value="Marianas Islands">Marianas Islands</option>
	<option value="Marquesas Islands">Marquesas Islands</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Nepal">Nepal</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Falkland Island">New Falkland Island</option>
	<option value="New Guinea">New Guinea</option>
	<option value="New Hebrides">New Hebrides</option>
	<option value="New South Wales">New South Wales</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Newfoundland">Newfoundland</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Nigeria">Nigeria</option>
	<option value="North Borneo">North Borneo</option>
	<option value="North Burma">North Burma</option>
	<option value="North Vietnam">North Vietnam</option>
	<option value="Northern China">Northern China</option>
	<option value="Northern Rhodesia">Northern Rhodesia</option>
	<option value="Norway">Norway</option>
	<option value="Nova Scotia">Nova Scotia</option>
	<option value="Nyasaland">Nyasaland</option>
	<option value="Okinawa">Okinawa</option>
	<option value="Outer Mongolia">Outer Mongolia</option>
	<option value="Pacific Islands">Pacific Islands</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palaestina">Palaestina</option>
	<option value="Palau Islands">Palau Islands</option>
	<option value="Palestine">Palestine</option>
	<option value="Panama">Panama</option>
	<option value="Papua">Papua</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Portuguese Guinea">Portuguese Guinea</option>
	<option value="Pribilof Islands">Pribilof Islands</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Pyrenees">Pyrenees</option>
	<option value="Rapa Island">Rapa Island</option>
	<option value="Republic of Congo">Republic of Congo</option>
	<option value="Rhodesia">Rhodesia</option>
	<option value="Romania">Romania</option>
	<option value="Ruanda">Ruanda</option>
	<option value="Russia">Russia</option>
	<option value="Ryukyu Islands">Ryukyu Islands</option>
	<option value="Sabah">Sabah</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Samoa">Samoa</option>
	<option value="San Nicolas Island">San Nicolas Island</option>
	<option value="Santo Domingo">Santo Domingo</option>
	<option value="Sarawak">Sarawak</option>
	<option value="Sardinia">Sardinia</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Scandinavia">Scandinavia</option>
	<option value="Scotland">Scotland</option>
	<option value="Seychelles Islands">Seychelles Islands</option>
	<option value="Siam">Siam</option>
	<option value="Siberia">Siberia</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Sikkim">Sikkim</option>
	<option value="Singapore">Singapore</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="South Africa">South Africa</option>
	<option value="South America">South America</option>
	<option value="South Korea">South Korea</option>
	<option value="Southern Rhodesia">Southern Rhodesia</option>
	<option value="Southwest Africa">Southwest Africa</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Sumatra">Sumatra</option>
	<option value="Surinam">Surinam</option>
	<option value="Suriname">Suriname</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Tahiti">Tahiti</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tanganyika">Tanganyika</option>
	<option value="Thailand">Thailand</option>
	<option value="Tibet">Tibet</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad">Trinidad</option>
	<option value="Tubuai">Tubuai</option>
	<option value="Tubuai Islands">Tubuai Islands</option>
	<option value="Turkey">Turkey</option>
	<option value="Uganda">Uganda</option>
	<option value="United States">United States</option>
	<option value="Uruguay">Uruguay</option>
	<option value="US Virgin Islands">US Virgin Islands</option>
	<option value="USA">USA</option>
	<option value="USSR">USSR</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Venezuela / British Guiana">Venezuela / British Guiana</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="West Indies">West Indies</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zaire">Zaire</option>
	<option value="Zambia">Zambia</option>
</select>
<script type="text/javascript">	
	$("#Slideindex_country").val("<?= $data['country'] ?>");
</script>

</div>
<div class="row field_state_province">
<label for="Slideindex_state_province">State/Province</label>
<input size="30" name="Slideindex[state_province]" id="Slideindex_state_province" type="text" value="<?= $data['state_province'] ?>" />

</div>
<div class="row field_county">
<label for="Slideindex_county">County</label>
<input size="30" name="Slideindex[county]" id="Slideindex_county" type="text" value="<?= $data['county'] ?>" />

</div>
<div class="row field_locality">
<label for="Slideindex_locality">Locality</label>
<input size="30" name="Slideindex[locality]" id="Slideindex_locality" type="text" value="<?= $data['locality'] ?>" />

</div>
<div class="row field_elevation">
<label for="Slideindex_elevation">Elevation</label>
<input size="30" name="Slideindex[elevation]" id="Slideindex_elevation" type="text" value="<?= $data['elevation'] ?>" />

</div>
<div class="row field_remark">
<label for="Slideindex_remark">Remark</label>
<input size="30" name="Slideindex[remark]" id="Slideindex_remark" type="text" value="<?= $data['remark'] ?>" />

</div>
<div class="row field_herbarium_code">
<label for="Slideindex_herbarium_code">Herbarium Code</label>
<input size="30" name="Slideindex[herbarium_code]" id="Slideindex_herbarium_code" type="text" value="<?= $data['herbarium_code'] ?>" />

</div>
<div class="row field_herbarium_specimen_number">
<label for="Slideindex_herbarium_specimen_number">Herbarium Specimen Number</label>
<input size="30" name="Slideindex[herbarium_specimen_number]" id="Slideindex_herbarium_specimen_number" type="text" value="<?= $data['herbarium_specimen_number'] ?>" />

</div>

<div class="row buttons">
	<input class="btn" name="search" type="submit" value="Search Slides" /><br />
	<input class="btn viewinfo clear-button" name="clear" type="button" value="Clear Form" /><br />
</div>

</fieldset>
</form>
				

<legend><h2>Search Results</h2></legend>				
				
<?php
	
	// ==================================================================
	// connect to DB
	// ==================================================================	
	
	
	class MyDB extends SQLite3 {
	  function __construct() {
		 $this->open('../../../../data/pbslides.db');
	  }
	}
   
	$db = new MyDB();

	if(!$db) {
	  echo $db->lastErrorMsg();
	}				
				
	// ==================================================================
	// build query
	// ==================================================================
	
	$maxResults = 200;				
					
	if( $anyPost === false ) {
		
//		normal select
		$query = 'SELECT * FROM SLIDES ORDER BY `slide-id` LIMIT ' . $maxResults . ';';
		
//		random select
//		$query = 'SELECT * FROM SLIDES WHERE `slide-id` IN (SELECT `slide-id` FROM SLIDES ORDER BY RANDOM() LIMIT ' . $maxResults . ');';

	} else {

		$query = 'SELECT * FROM SLIDES WHERE ';

		$queryText = array();

	//	$query .= 'country=:country ';
		if( !empty($data['slide_id']) ) { array_push($queryText,'`slide-id`=:slideId'); } 
		if( !empty($data['family']) ) { array_push($queryText,'family=:family'); }  
		if( !empty($data['genus']) ) { array_push($queryText,'genus LIKE :genus'); }  
		if( !empty($data['species']) ) { array_push($queryText,'species LIKE :species'); }  
		if( !empty($data['subspecies']) ) { array_push($queryText,'subspecies LIKE :subspecies'); }  
		if( !empty($data['author']) ) { array_push($queryText,'author1 LIKE :author1'); }  
		if( !empty($data['other_authors']) ) { array_push($queryText,'author2 LIKE :author2'); }  
		if( !empty($data['identifier']) ) { array_push($queryText,'`id-by` LIKE :idBy'); }  
		if( !empty($data['collector']) ) { array_push($queryText,'collector LIKE :collector'); }  
		if( !empty($data['country']) ) { array_push($queryText,'country=:country'); }  
		if( !empty($data['state_province']) ) { array_push($queryText,'`state-prov` LIKE :stateProv'); }  
		if( !empty($data['county']) ) { array_push($queryText,'county LIKE :county'); }  
		if( !empty($data['locality']) ) { array_push($queryText,'locality LIKE :locality'); }  
		if( !empty($data['elevation']) ) { array_push($queryText,'elevation LIKE :elevation'); }  
		if( !empty($data['remark']) ) { array_push($queryText,'remarks LIKE :remarks'); }  
		if( !empty($data['herbarium_code']) ) { array_push($queryText,'`herbarium-code`=:herbariumCode'); }  
		if( !empty($data['herbarium_specimen_number']) ) { array_push($queryText,'`herbarium-specimen-num`=:herbariumSpecimenNum'); } 

		$queryParams = join(' AND ', $queryText);

		$query .= $queryParams;

		$query .= ' ORDER BY `slide-id` LIMIT ' . $maxResults . ';';

	}
					
//	echo "<h4>" . $query . "</h4>";
	$queryTextFull = $query;
	
	// ==================================================================
	
	$stmt = $db->prepare($query);
	
	// ==================================================================
	// bindings
	// ================================================================== 
	
	if( !empty($data['slide_id']) ) { $stmt->bindValue(':slideId', $data['slide_id'], SQLITE3_TEXT); } 
 	if( !empty($data['family']) ) { $stmt->bindValue(':family', $data['family'], SQLITE3_TEXT); }  
 	if( !empty($data['genus']) ) { $stmt->bindValue(':genus', $data['genus'], SQLITE3_TEXT); }  
 	if( !empty($data['species']) ) { $stmt->bindValue(':species', $data['species'], SQLITE3_TEXT); }  
 	if( !empty($data['subspecies']) ) { $stmt->bindValue(':subspecies', $data['subspecies'], SQLITE3_TEXT); }  
 	if( !empty($data['author']) ) { $stmt->bindValue(':author1', $data['author'], SQLITE3_TEXT); }  
 	if( !empty($data['other_authors']) ) { $stmt->bindValue(':author2', $data['other_authors'], SQLITE3_TEXT); }  
 	if( !empty($data['identifier']) ) { $stmt->bindValue(':idBy', $data['identifier'], SQLITE3_TEXT); }  
 	if( !empty($data['collector']) ) { $stmt->bindValue(':collector', $data['collector'], SQLITE3_TEXT); }  
 	if( !empty($data['country']) ) { $stmt->bindValue(':country', $data['country'], SQLITE3_TEXT); }  
 	if( !empty($data['state_province']) ) { $stmt->bindValue(':stateProv', $data['state_province'], SQLITE3_TEXT); }  
 	if( !empty($data['county']) ) { $stmt->bindValue(':county', $data['county'], SQLITE3_TEXT); }  
 	if( !empty($data['locality']) ) { $stmt->bindValue(':locality', $data['locality'], SQLITE3_TEXT); }  
 	if( !empty($data['elevation']) ) { $stmt->bindValue(':elevation', $data['elevation'], SQLITE3_TEXT); }  
 	if( !empty($data['remark']) ) { $stmt->bindValue(':remarks', $data['remark'], SQLITE3_TEXT); }  
 	if( !empty($data['herbarium_code']) ) { $stmt->bindValue(':herbariumCode', $data['herbarium_code'], SQLITE3_TEXT); }  
 	if( !empty($data['herbarium_specimen_number']) ) { $stmt->bindValue(':herbariumSpecimenNum', $data['herbarium_specimen_number'], SQLITE3_TEXT); }

	
	// ==================================================================
	// string replace (debug)
	// ================================================================== 
	
	$queryTextFull = str_replace(':slideId', $data['slide_id'], $queryTextFull);
	$queryTextFull = str_replace(':family', $data['family'], $queryTextFull);
 	$queryTextFull = str_replace(':genus', $data['genus'], $queryTextFull);
 	$queryTextFull = str_replace(':species', $data['species'], $queryTextFull);
 	$queryTextFull = str_replace(':subspecies', $data['subspecies'], $queryTextFull);
 	$queryTextFull = str_replace(':author1', $data['author'], $queryTextFull);
 	$queryTextFull = str_replace(':author2', $data['other_authors'], $queryTextFull);
 	$queryTextFull = str_replace(':idBy', $data['identifier'], $queryTextFull);
 	$queryTextFull = str_replace(':collector', $data['collector'], $queryTextFull);
 	$queryTextFull = str_replace(':country', $data['country'], $queryTextFull);
 	$queryTextFull = str_replace(':stateProv', $data['state_province'], $queryTextFull);
 	$queryTextFull = str_replace(':county', $data['county'], $queryTextFull);
 	$queryTextFull = str_replace(':locality', $data['locality'], $queryTextFull);  
 	$queryTextFull = str_replace(':elevation', $data['elevation'], $queryTextFull);
 	$queryTextFull = str_replace(':remarks', $data['remark'], $queryTextFull);
 	$queryTextFull = str_replace(':herbariumCode', $data['herbarium_code'], $queryTextFull);
 	$queryTextFull = str_replace(':herbariumSpecimenNum', $data['herbarium_specimen_number'], $queryTextFull);
	
//	echo "<h4>" . $queryTextFull . "</h4>";
	
	// ==================================================================
	
	$result = $stmt->execute();
	
	$nr = 0;
	while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
//	  echo "<tr>";
//      echo "<td>". $row['slide-id'] . "</td>";
//      echo "<td>". $row['image'] . "</td>";
//	  echo "<td><a href='http://images.peabody.yale.edu/nclc/". $row['image'] . ".jpg' target='_blank'>full</a> <a href='http://images.peabody.yale.edu/nclc/web/". $row['image'] . ".jpg' target='_blank'>thumb</a></td>";
//      echo "<td>". $row['genus'] . "</td>";
//      echo "<td>". $row['family'] . "</td>";
//      echo "<td>". $row['species'] . "</td>";
//      echo "<td>". $row['subspecies'] . "</td>";
//      echo "<td>". $row['author1'] . "</td>";
//      echo "<td>". $row['author2'] . "</td>";
//      echo "<td>". $row['id-by'] . "</td>";
//      echo "<td>". $row['collector'] . "</td>";
//      echo "<td>". $row['coll-date'] . "</td>";
//      echo "<td>". $row['country'] . "</td>";
//      echo "<td>". $row['state-prov'] . "</td>";
//      echo "<td>". $row['county'] . "</td>";
//      echo "<td>". $row['locality'] . "</td>";
//      echo "<td>". $row['elevation'] . "</td>";
//      echo "<td>". $row['remarks'] . "</td>";
//      echo "<td>". $row['herbarium-code'] . "</td>";
//      echo "<td>". $row['herbarium-specimen-num'] . "</td>";
//	  echo "</tr><br />";
		
	  echo "<div class='record'>";
	  echo "	<div id='pretty_photo'>";
	  echo "		<p><a href='http://images.peabody.yale.edu/nclc/" . $row['image'] . ".jpg' rel='prettyPhoto[]'><img src='http://images.peabody.yale.edu/nclc/web/" . $row['image'] . ".jpg' alt='" . $row['image'] . "'></a></p>";
	  echo "	</div>";
	  echo "		<p><strong>Family:</strong> ". $row['family'] . "</p>";
	  echo "			<p><strong>Genus:</strong> ". $row['genus'] . "</p>";
	  echo "			<p><strong>Species:</strong> ". $row['species'] . "</p>";
	  echo "			<p><strong>Region/Country:</strong> ". $row['country'] . "</p>";
	  echo "			<p><strong>State/Province:</strong> ". $row['state-prov'] . "</p>";
	  echo "			<p><strong>County:</strong> ". $row['county'] . "</p>";
	  echo "			<p><strong><input class='btnsmall saveresult' slide='". $row['slide-id'] . "' name='yt0' type='button' value='Save slide'></strong></p>";
	  echo "			<p><strong><input class='btnsmall viewinfo infobutton' slide='". $row['slide-id'] . "' name='yt1' type='button' value='View information'></strong></p>";
	  echo "</div>";
		
		
		
		
		
		
		
		
		
		
		
		
	  $nr++;
   }
   $maxMessage = "";
					
   if( $nr == $maxResults ) {
	   $maxMessage = "Showing <strong>" . $nr . "</strong> slides of many.  Please narrow your search criteria.";
   } else if( $nr == 0 ) {
	   $maxMessage = "No search results.  Please choose different search criteria.";
   } else if( $nr == 1 ) {
	   $maxMessage = "<strong>1</strong> slide found.";
   } else {
	   $maxMessage = "<strong>" . $nr . "</strong> slides found.";
   }
					
   echo "<p>". $maxMessage ."</p>";
   echo "<p><button class='btnsmall new-search' href='./'>Edit Search</button></p>";


	
   $db->close();				
					
					

					
					
?>				
				
				</div><!-- content -->
				
				
				
				
				
	        	</div>
	        </div>
	    </div>
	    <div class="block">
	    	<div class="footer">
	        	<div class="footerlogo">
	        		<img src="../images/yale.png" alt="" />	            </div>
	            <div class="footertext">
	            	Copyright 2019 Peabody Museum of Natural History, Yale University. All rights reserved.
	            </div>
	        </div>
	    </div>
    </div>

	<script type="text/javascript">
	/*<![CDATA[*/

				jQuery('#pretty_photo a').attr('rel','prettyPhoto[]');
				jQuery('a[rel^="prettyPhoto"]').prettyPhoto({'opacity':0.6,'modal':true,'theme':'facebook'});

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount','UA-3250139-3']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	/*]]>*/
	</script>

</body>
</html> 
