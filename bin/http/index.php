<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Your browser is <?php echo $_SERVER["HTTP_USER_AGENT"] ?>
	<?php 
		$db = new PDO("sqlite:uwudb.sqlite");
		$db->exec("CREATE TABLE IF NOT EXISTS profiles (id TEXT, name TEXT, password TEXT)");
	?>
</body>
</html>