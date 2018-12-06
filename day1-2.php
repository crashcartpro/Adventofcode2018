<?php
if ($argc != 2) {
        echo "Script requires input file as argument\n";
        echo " Usage: php day1-2.php file\n";
        exit;
}
$freq = 0;
$freqs = array();
$freqs[0] = 0;

$fshifts = file($argv[1]);
do {
	foreach($fshifts as $shift) {
		$freq = $freq + intval($shift);
		echo ".";
		if (in_array($freq, $freqs)) {
			echo "\nFound repeat: " . $freq . "\n";
			exit;
		} else {
			$freqs[] = $freq;
		}
	}
} while (true);

