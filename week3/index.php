<!DOCTYPE html>
<html>
	<head>
		<title>Maya Online Books</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<div class="banner"></div>
		
		<table>
<?php
include("config.php");
$query = "select * from books";
//Don't be intimiated by the following lines.
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
	echo "<p>".$row["title"]." by ".$row["author"]."</p>";
	echo "<img src = '".$row["image"]."' />";
	//echo "<p>".$row["title"]."</p>";
	//echo "<p>".$row["author"]."</p>";
}
?>

		
		</table>
		
		<script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
		</script>
	</body>
</html>