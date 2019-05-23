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
         $this->open('../../data/pbslides.db');
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

   $sql =<<<EOF
      SELECT * from SLIDES;
EOF;
   
   $nr = 0;
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
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