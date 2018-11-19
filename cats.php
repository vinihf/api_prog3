<?php 
	//https://github.com/toddmotto/public-apis
	
	$cat = json_decode(file_get_contents("https://aws.random.cat/meow"));
	echo "<img src='".$cat->{"file"}."'>";
?>