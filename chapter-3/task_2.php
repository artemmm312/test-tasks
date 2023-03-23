<?php

//2. В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов
// которой является наименьшим.

function anythingArray(array $arr): string
{
	$arr_count = count($arr);
	$sum_arr = [];
	$result = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		$sum = 0;
		for ($j = 0; $j < $n; $j++) {
			if ($arr[$i][$j] > 0) {
				$sum += $arr[$i][$j];
			}
		}
		$sum_arr[] = $sum;
	}
	$count_sums = count($sum_arr);
	$min = 0;
	for ($i = 0; $i < $count_sums; $i++) {
		if ($i === 0) {
			$min = $sum_arr[$i];
			continue;
		}
		if ($min > $sum_arr[$i]) {
			$min = $sum_arr[$i];
		}
	}
	for ($i = 0; $i < $count_sums; $i++) {
		if ($min === $sum_arr[$i]) {
			$result = $i;
			break;
		}
	}
	return 'Наименьшее средне арифметическое положительных элементов на строке: ' . $result;
}

$arr =
	[
		[1, 2, 3, 0, 9, 9],
		[4, 5, 6, 0, -10, 20,],
		[7, 8, 9, 0, 9],
		[-7, 8, -9, 0, -9],
	];
echo anythingArray($arr);
