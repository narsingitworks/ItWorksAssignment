<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String</title>
</head>
<body>
	<?php

	echo "<h4> String functions</h4>";

	$str="Hello PHP";

	echo "<h5>Length of a string</h5>";
	echo strlen($str);

	echo "<h5>count words in a string</h5>";
	echo str_word_count($str);

	echo "<h5>Reverse a string</h5>";
	echo  strrev($str);

	echo "<h5>search a text in a string</h5>";
	echo strpos($str, "PHP");

	echo "<h5>replace text in a string</h5>";
	echo str_replace("PHP", "HTML", $str);

	echo "<h5>Join</h5>";
	$arr=["Hello","Php"];
	echo join(" ",$arr);

	
	?>

</body>
</html>