<?php
// check for argument
if ($argc != 2) {
        echo "Script requires input file as argument\n";
        echo " Usage: php day3-2.php file\n";
        exit;
}
// initilize array
for ($x = 0; $x <= 1000; $x++) {
	for ($y = 0; $y <= 1000; $y++) {
		$fabric[$x][$y] = 0;
	}
}
$overlap = 0;
$total = 0;
$no_over = array();
// process swatches
$swatches = file($argv[1]);
foreach ($swatches as $swatch) {
	$coords = preg_split("/[,x]|: | @ /", $swatch);
	for ($x = $coords[1]; $x <= ($coords[1]+$coords[3]-1); $x++) {
		for ($y = $coords[2]; $y <= ($coords[2]+$coords[4]-1); $y++) {
			$fabric[$x][$y]++;
		}
	}
}
foreach ($swatches as $swatch) {
	$coords = preg_split("/[,x]|: | @ /", $swatch);
	$no_over[$coords[0]] = "yes";
	for ($x = $coords[1]; $x <= ($coords[1]+$coords[3]-1); $x++) {
		for ($y = $coords[2]; $y <= ($coords[2]+$coords[4]-1); $y++) {
			$fabric[$x][$y]++;
			if ($fabric[$x][$y] >= 3) {
				$no_over[$coords[0]] = "no";
			}
		}
	}
}
echo array_search("yes" , $no_over) . "\n";
