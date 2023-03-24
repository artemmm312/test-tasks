<?php

//14. В массиве А(N,М) строку с максимальным количеством знакочередующихся элементов
// переставить на первое место.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$c_max = 0;
	$row = null;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		$d = 0;
		for ($j = 0; $j < $n - 1; $j++) {
			if ($arr[$i][$j] / $arr[$i][$j + 1] < 0) {
				$d++;
			}
		}
		if ($i === 0) {
			$c_max = $d;
			if ($c_max > 0) {
				$row = $i;
			}
			continue;
		}
		if ($c_max < $d) {
			$c_max = $d;
			$row = $i;
		}
	}
	if (!empty($row)) {
		$tmp = $arr[$row];
		for ($i = $row - 1; $i >= 0; $i--) {
			$arr[$i + 1] = $arr[$i];
		}
		$arr[0] = $tmp;
	}
	return $arr;
}

$arr =
	[
		[5, 2, 3, 20],
		[4, 5, 6, -15],
		[7, 9, 4, 11],
		[5, -20, 6, -9],
	];
print_r(anythingArray($arr));
