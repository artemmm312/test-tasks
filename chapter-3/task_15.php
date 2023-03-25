<?php

//15. В массиве А(N,М) столбец с минимальным количеством нечетных элементов переставить на
// последнее место.

function anythingArray(array $arr)
{
	$count_N = count($arr);
	$count_M = count($arr[0]);
	$j_odd = 0;
	$min_odd = 0;
	for ($j = 0; $j < $count_M; $j++) {
		$odd = 0;
		for ($i = 0; $i < $count_N - 1; $i++) {
			if ($arr[$i][$j] % 2 === 0) {
				$odd++;
			}
		}
		if ($j === 0) {
			$min_odd = $odd;
			continue;
		}
		if ($min_odd > $odd) {
			$min_odd = $odd;
			$j_odd = $j;
		}
	}
	for ($i = 0; $i < $count_N; $i++) {
		$tmp = $arr[$i][$j_odd];
		for ($j = $j_odd; $j < $count_M - 1; $j++) {
			$arr[$i][$j] = $arr[$i][$j + 1];
		}
		$arr[$i][$count_M - 1] = $tmp;
	}
	return $arr;
}

$arr =
	[
		[5, 1, 3, 20],
		[4, 5, 6, -15],
		[7, 9, 4, 11],
		[5, -21, 6, -9],
	];
print_r(anythingArray($arr));
