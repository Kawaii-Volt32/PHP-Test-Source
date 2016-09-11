<html>
<head>
<title>Age</title>
</head>
<BODY>
<form action="age.php" method="post">
<input type="text" name="agebox">
<input type="submit" name="submitbutton">
</form>
</BODY>
<?php

	if ($_POST['agebox'] >= 19) {
		echo "Welcome!";
	}
	else {
		echo "Error: Too Young!";
	}
	
?>

</html>
