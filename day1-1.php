<?php
if ($argc != 2) {
	echo "Script expects single file as argument.\n";
	exit;
}
$freq = 0;
$infile = fopen($argv[1], "r");
if ($infile) {
	while (($freqshift = fgets($infile)) !== false) {
		$freq = $freq + intval($freqshift);
	}
	fclose($infile);
	echo "result: ";
	echo $freq."\n";
} else {
	echo "can't open file.\n";
}
