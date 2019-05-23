<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>test nclc</title>
	<style type="text/css">
	
		table {
			width: 100%;
			border-left: 1px #aaa solid;
			border-top: 1px #aaa solid;
		}
		
		table tr td, table tr th { 
			border-right: 1px #aaa solid;
			border-bottom: 1px #aaa solid;
			padding: 2px;
		}
		
	</style>
</head>
<body>
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

	echo "<pre>";
	echo print_r($data);
	echo "</pre>";
	
//echo '<pre>' . var_export($_POST['Slideindex'], true) . '</pre>';

	echo "<table>";
	
	echo "<tr><td>Slide ID: </td><td><strong>" . $data['slide_id'] . "</strong></td></tr>";
 	echo "<tr><td>Family: </td><td><strong>" . $data['family'] . "</strong></td></tr>";
 	echo "<tr><td>Genus: </td><td><strong>" . $data['genus'] . "</strong></td></tr>";
 	echo "<tr><td>Species: </td><td><strong>" . $data['species'] . "</strong></td></tr>";
 	echo "<tr><td>Subspecies: </td><td><strong>" . $data['subspecies'] . "</strong></td></tr>";
 	echo "<tr><td>Author1: </td><td><strong>" . $data['author'] . "</strong></td></tr>";
 	echo "<tr><td>Author2: </td><td><strong>" . $data['other_authors'] . "</strong></td></tr>";
 	echo "<tr><td>Identifier: </td><td><strong>" . $data['identifier'] . "</strong></td></tr>";
 	echo "<tr><td>Collector: </td><td><strong>" . $data['collector'] . "</strong></td></tr>";
 	echo "<tr><td>Country: </td><td><strong>" . $data['country'] . "</strong></td></tr>";
 	echo "<tr><td>State: </td><td><strong>" . $data['state_province'] . "</strong></td></tr>";
 	echo "<tr><td>County: </td><td><strong>" . $data['county'] . "</strong></td></tr>";
 	echo "<tr><td>Locality: </td><td><strong>" . $data['locality'] . "</strong></td></tr>";
 	echo "<tr><td>Elevation: </td><td><strong>" . $data['elevation'] . "</strong></td></tr>";
 	echo "<tr><td>Remarks: </td><td><strong>" . $data['remark'] . "</strong></td></tr>";
 	echo "<tr><td>Herbarium Code: </td><td><strong>" . $data['herbarium_code'] . "</strong></td></tr>";
 	echo "<tr><td>Herbarium Specimen #: </td><td><strong>" . $data['herbarium_specimen_number'] . "</strong></td></tr>";
	
	echo "</table>";

function microtime_diff($start, $end = null)
	{
		if (!$end) {
			$end = microtime();
		}
		list($start_usec, $start_sec) = explode(" ", $start);
		list($end_usec, $end_sec) = explode(" ", $end);
		$diff_sec = intval($end_sec) - intval($start_sec);
		$diff_usec = floatval($end_usec) - floatval($start_usec);
		return floatval($diff_sec) + $diff_usec;
	}
	
   $startTime = microtime();
	
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../../../data/pbslides.db');
      }
   }
   
   $db = new MyDB();

   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "<p>Opened database: <strong>data/pbslides.db</strong></p>";
      echo "<table>";
	  echo "<tr>";
	  echo "<th>Slide ID</th>";
      echo "<th>Image</th>";
	  echo "<th>Assets</th>";
      echo "<th>Genus</th>";
      echo "<th>Family</th>";
      echo "<th>Species</th>";
      echo "<th>Subspecies</th>";
      echo "<th>Author 1</th>";
      echo "<th>Author 2</th>";
      echo "<th>ID By</th>";
      echo "<th>Collector</th>";
      echo "<th>Collection Date</th>";
      echo "<th>Country</th>";
      echo "<th>State/Province</th>";
      echo "<th>County</th>";
      echo "<th>Locality</th>";
      echo "<th>Elevation</th>";
      echo "<th>Remarks</th>";
      echo "<th>Herbarium Code</th>";
      echo "<th>Herbarium Specimen Num.</th>";
	  echo "</tr>";
   }

	// ==================================================================
	// build query
	// ==================================================================
	
	if( $anyPost === false ) {
		
		$query = 'SELECT * FROM SLIDES ORDER BY `slide-id`;';
		
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

		$query .= ' ORDER BY `slide-id`;';
	
	}
	
	
	echo "<h4>" . $query . "</h4>";
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
	
	echo "<h4>" . $queryTextFull . "</h4>";
	
	// ==================================================================
	
	$result = $stmt->execute();
	
   $nr = 0;
   while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
	  echo "<tr>";
      echo "<td>". $row['slide-id'] . "</td>";
      echo "<td>". $row['image'] . "</td>";
	  echo "<td><a href='http://images.peabody.yale.edu/nclc/". $row['image'] . ".jpg' target='_blank'>full</a> <a href='http://images.peabody.yale.edu/nclc/web/". $row['image'] . ".jpg' target='_blank'>thumb</a></td>";
      echo "<td>". $row['genus'] . "</td>";
      echo "<td>". $row['family'] . "</td>";
      echo "<td>". $row['species'] . "</td>";
      echo "<td>". $row['subspecies'] . "</td>";
      echo "<td>". $row['author1'] . "</td>";
      echo "<td>". $row['author2'] . "</td>";
      echo "<td>". $row['id-by'] . "</td>";
      echo "<td>". $row['collector'] . "</td>";
      echo "<td>". $row['coll-date'] . "</td>";
      echo "<td>". $row['country'] . "</td>";
      echo "<td>". $row['state-prov'] . "</td>";
      echo "<td>". $row['county'] . "</td>";
      echo "<td>". $row['locality'] . "</td>";
      echo "<td>". $row['elevation'] . "</td>";
      echo "<td>". $row['remarks'] . "</td>";
      echo "<td>". $row['herbarium-code'] . "</td>";
      echo "<td>". $row['herbarium-specimen-num'] . "</td>";
	  echo "</tr>";
	  $nr++;
   }
   echo "</table>";

	
   $endTime = microtime();
   $diff = microtime_diff($startTime, $endTime);
   echo "<p>Data loaded successfully: <strong>" . $nr . "</strong> rows. (" . $diff ." seconds)</p>";


	
   $db->close();





?>
</body>
</html>