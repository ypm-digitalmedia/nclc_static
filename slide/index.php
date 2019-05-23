<?php

//$slide = (string)filter_input(INPUT_GET, 'slide');

if (!isset($_GET['slide'])) {
    $slide = null;
	$anyGet = false;
} elseif (!is_string($_GET['slide'])) {
    $slide= null;
	$anyGet = false;
} else {
    $slide = $_GET['slide'];

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
	$query = 'SELECT * FROM SLIDES WHERE `slide-id`=:slide LIMIT 1';
	
	//	echo "<h4>" . $query . "</h4>";
	$queryTextFull = $query;
	
	// ==================================================================
	
	$stmt = $db->prepare($query);
	
	// ==================================================================
	// bindings
	// ================================================================== 
	
	$stmt->bindValue(':slide', $slide, SQLITE3_TEXT);
	
	// ==================================================================
	// string replace (debug)
	// ================================================================== 
	
	$queryTextFull = str_replace(':slide', $slide, $queryTextFull);
	//	echo "<h4>" . $queryTextFull . "</h4>";
	
	// ==================================================================
	
	$result = $stmt->execute();
	
	$nr = 0;
	
	$data = array();
	while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
		
//		$data['slide-id'] = $row['slide-id'];
//		$data['image'] = $row['image'];
//		$data['genus'] = $row['genus'];
//		$data['family'] = $row['family'];
//		$data['species'] = $row['species'];
//		$data['subspecies'] = $row['subspecies'];
//		$data['author1'] = $row['author1'];
//		$data['author2'] = $row['author2'];
//		$data['id-by'] = $row['id-by'];
//		$data['collector'] = $row['collector'];
//		$data['coll-date'] = $row['coll-date'];
//		$data['country'] = $row['country'];
//		$data['state-prov'] = $row['state-prov'];
//		$data['county'] = $row['county'];
//		$data['locality'] = $row['locality'];
//		$data['elevation'] = $row['elevation'];
//		$data['remarks'] = $row['remarks'];
//		$data['herbarium-code'] = $row['herbarium-code'];
//		$data['herbarium-specimen-num'] = $row['herbarium-specimen-num'];
		
		$data = $row;
		
		$nr++;
	}
	$db->close();
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
	<link rel="stylesheet" type="text/css" href="../themes/clearleaf/css/ie.css" />
<![endif]-->
<title><?=$data['family'] ?> <?=$data['genus'] ?> <?=$data['species'] ?> - Slide <?=$data['slide-id'] ?> | National Cleared Leaf Collection - Yale Peabody Museum of Natural History</title>
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
	    		<a id="touch-menu" class="mobile-menu" href="../"><i class="fa fa-bars"></i>Menu</a>
<nav>
    <ul class="eflat-menu">

        <li /><a href="../">Home</a></li><li /><a href="../about">About</a></li><li /><a href="../leo-hickey">Leo Hickey</a></li><li /><a href="../search">Search</a></li><li /><a href="../saved">Saved Results</a></li><li /><a href="../contact">Contact Us</a></li>    </ul>
</nav>	    </div>
	    <div class="block">
	    	<div class="bodycontent">
	    	<div class="contentarea">
	        	<div id="content">
					
				<?php if( $nr == 1) : ?>
					
					<div id="pretty_photo">
						<div class="info">
							<h2>Slide: <?=$data['slide-id'] ?></h2>
							<p>&nbsp;</p>
							<p><strong>Family: </strong><?=$data['family'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Genus: </strong><?=$data['genus'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Species: </strong><?=$data['species'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Variety/Subspecies: </strong><?=$data['subspecies'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Primary Author: </strong><?=$data['author1'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Other Authors: </strong><?=$data['author2'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Identifier: </strong><?=$data['id-by'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Collector: </strong><?=$data['collector'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Collecting Date: </strong><?=$data['coll-date'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Region/Country: </strong><?=$data['country'] ?></p>
							<p>&nbsp;</p>
							<p><strong>State/Province: </strong><?=$data['state-prov'] ?></p>
							<p>&nbsp;</p>
							<p><strong>County: </strong><?=$data['county'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Locality: </strong><?=$data['locality'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Elevation: </strong><?=$data['elevation'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Remark: </strong><?=$data['remarks'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Herbarium Code: </strong><?=$data['herbarium-code'] ?></p>
							<p>&nbsp;</p>
							<p><strong>Herbarium Specimen Number: </strong><?=$data['herbarium-specimen-num'] ?></p>
							<p>&nbsp;</p>					
						 	<p>
								<a href="http://images.peabody.yale.edu/nclc/<?=$data['image'] ?>.jpg" rel="prettyphoto[]">
									<img src="http://images.peabody.yale.edu/nclc/web/<?=$data['image'] ?>.jpg" alt="<?=$data['image'] ?>" />
								</a>
							</p>

						</div>
					</div>
					
				<?php else : ?>
					
					<h2>Invalid slide number.</h2>
					<p><button class='btn' onclick='document.location="../search";'>New Search</button></p>
					
				<?php endif; ?>
					
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
