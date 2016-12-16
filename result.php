<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submitted Information</title>
</head>
<style type="text/css">
	h1{
		font-size: 18px;
		text-decoration: underline;
		width: 200px;
	}
	ul li{
		list-style-type: none;
	}
</style>
<body>
	<h1>Submitted Information</h1>
	<ul>
		<li>Name: <?php echo $_POST['yourname']; ?></li>
		<li>Dojo Location: <?php echo $_POST['location']; ?></li>
		<li>Favorite Language: <?php echo $_POST['language']; ?></li>
		<li>Comment: <?php echo $_POST['comment']; ?></li>
	</ul>
	<input type="submit" value="Go Back" onclick="history.go(-1);return true;">
</body>
</html><?php
	;
?>