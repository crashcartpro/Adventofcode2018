<?php
$twos = 0;
$threes = 0;

if ($argc != 2) {
	echo "Script requires input file as argument\n";
	echo " Usage: php day2-1.php file\n";
	exit;
}

$data = file($argv[1]);
foreach ($data as $boxID) {
	$counts = count_chars($boxID, 1);
	echo ".";
	if (in_array(2, $counts)) {
		$twos++;
	}
	if (in_array(3, $counts)) {
		$threes++;
	}
}
echo "\n$twos twos * $threes threes = ". ($twos * $threes) ."\n";
exit;
