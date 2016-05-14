<?php
	$country = "";
	if (isset($_GET["country"]))	 {
		$country = $_GET["country"];
	}
	$db = new PDO("mysql:dbname=world;host=https://webster.cs.washington.edu/cse154/query/;charset=utf8", "traveler", "packmybags");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$country_name = $db->quote($country);
	$population = $db->query("SELECT population
							  FROM countries
							  WHERE name = {$country_name}");
	$message = "The country you typed is not in the database.";
	if ($population->rowCount() > 0) {
		$popRow = $population->fetch();
		$message = "$country_name" . "'s population is " . $popRow["population"];
	} 
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Country Data</title>
		<link rel="stylesheet" href="countries.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>
	<body>
		<div id="container">
			<div class="main bg-success form-group has-success">
				<h1>Country Data</h1>
				<form action="countries-pop" method="get"></form>
				<div>
					<input id="country-field" name="country" type="text" placeholder="type country name" autofocus="autofocus">
					<input id="submit" type="submit" value="Get Population">
					<button id="clear">Clear</button>
				</div>
				<div id="display">
					<h2 id="message"><?=$message?></h2>
				</div>
			</div>
		</div>
	</body>
	<script src="countries.js"></script>
</html>