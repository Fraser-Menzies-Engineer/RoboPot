<?php
	$myfile = fopen("readme.txt", "w") or die("unable to open file!");
	$txt = "A";
	fwrite($myfile, $txt);
	fclose($myfile);
?>