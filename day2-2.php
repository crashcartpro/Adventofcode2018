<?php
if ($argc != 2) {
        echo "Script requires input file as argument\n";
        echo " Usage: php day2-2.php file\n";
        exit;
}

$ID_list = array_map("trim",file($argv[1]));
while(isset($ID_list[0])) {
	$boxID1 = str_split(array_shift($ID_list));
	//$boxID1 = array_shift($ID_list);
	foreach ($ID_list as $boxID) {
		$boxID2 = str_split($boxID);
		$result = array_diff_assoc($boxID1, $boxID2);
		if (count($result) == 1) {
			$intersect = array_intersect_assoc($boxID1, $boxID2);
			$common = implode($intersect);
			echo "Result: $common\n";
		}
	}
}

/*
$array1 = str_split("lutrogkbetprmshdyfiqvzixaw");
$array2 = str_split("lujnmgkbetprmshdyicqvzivaw");

$result = array_diff_assoc($array1, $array2);

print_r($result);
*/
