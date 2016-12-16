<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
</head>
<style type="text/css">
	#container{
		border: 2px solid black;
		padding: 1em;
		width: 20%;
		height: auto
	}
	textarea{
		margin-left: auto;
		margin-right: auto;
		width: 90%;
		height: 30%;
	}
</style>
<body>
	<div id="container">
		<form action="result.php" method="post" id="theonlyform">
			<p>Your Name: <input type="text" name="yourname"></p>
			<p>Dojo Location: 
				<select name="location">
					<option value="mtview">Mountain View</option>
					<option value="seattle">Seattle</option>
					<option value="la">Los Angeles</option>
					<option value="chicago">Chicago</option>
					<option value="dc">Washington D.C.</option>
					<option value="dallas">Dallas</option>
				</select>
			</p>
			<p>Favorite Language:
				<select name="language">
					<option value="javascript">Javascript</option>
					<option value="ruby">Ruby</option>
					<option value="php">PHP</option>
					<option value="python">Python</option>
				</select>
			</p>
			<p>Comment (optional):</p>
			<textarea name="comment" form="theonlyform"></textarea>
			<input type="submit" value="Submit">
		</form>
			
	</div>
</body>
</html>
<?php

?>