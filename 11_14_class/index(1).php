<?php
session_start();
//session_destroy();
//require './next.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<form action="next.php" method="POST">
		<input type="username" name="user" placeholder="enter username" >	
		<button type="submit">Submit</button>
	</form>

	<?php
	if (array_key_exists('calc_result', $_SESSION) && is_array($_SESSION['calc_result'])) {
		
		foreach (array_reverse($_SESSION['calc_result']) as $value) {
      echo $value;
      echo "\n";
		}
	}
	?>

</body>
</html>