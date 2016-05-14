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
			</div>
			<h2 id="display">This is some placeholder text</h2>
		</div>
	</div>
</body>
</html>