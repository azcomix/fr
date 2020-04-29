<?php
//readTexVkUrl.php

echo "Tex Willer (French)<hr>";
// Get a file into an array.  In this example we'll go through HTTP to get
// the HTML source of a URL.
$lines = file('Tex-pdf.fr.txt');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line_num => $line) {
	$piece=explode(",", $line);
    echo "<a href=" . htmlspecialchars($piece[0]) . " >
	#<b>{$line_num}</b> :{$piece[1]}</a><br />";
}

?>
