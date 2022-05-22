<?php 
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$query = "SELECT * FROM Topic ORDER BY idTopic DESC LIMIT 50;";

$queryResult = $conn->query($query);

do {
    $resultArray = $queryResult->fetch_array();
    print_r($resultArray);
    echo "<br/>";
} while ($resultArray);

?>