<!DOCTYPE html>
<!-- Main PHP Script -->
<?php 
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

$page = $_GET["page"];

$topicCount = 25;

if ($page == null) {$page = 1;}

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$query = "SELECT t.*, u.pseudo FROM Topic t JOIN Users u ON t.idUser = u.idUser ORDER BY idTopic DESC LIMIT " . ($topicCount*($page-1)) . "," . ($topicCount*$page) . ";";

$queryResult = $conn->query($query);

$pageCount = ($conn->query("SELECT COUNT(*) FROM Topic;")->fetch_array()[0])/$topicCount;

?>

<!-- html page -->
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Le forum</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<header>
			<h1><a href="index.php">Forum de discussion</a></h1>
			<a href="inscription.html">S'inscrire</a>
		</header>
		<main>
			<a href="ecrireTopic.html">Nouveau Topic</a>
			<table>
				<tr>
					<th>Titre du topic</th>
					<th>Auteur du topic</th>
				</tr>
				<?php
					do {
						$resultArray = $queryResult->fetch_array();
						echo "<tr>";
						echo "	<td class='topicTitle'><a href=\"topic.php?topicid=". $resultArray["idTopic"] .  "\">" . $resultArray["titre"] . "</a></td>";
						echo "	<td>" . $resultArray["pseudo"] . "</td>";
						echo "</tr>";
					} while ($resultArray);
				?>
			</table>
			<?php 
				if ($page > 1) {echo "<a href='index.php?page=" . ($page-1) . "'>Page " . ($page-1) . "</a>";}
				if ($page < $pageCount) {echo "<a href='index.php?page=" . ($page+1) . "'>Page " . ($page+1) . "</a>";}
			?>

		</main>
		<footer>
			<p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
			<p>Inspiré des forums Blabla de jeuxvideo.com</p>
		</footer>
	</body>
</html>
