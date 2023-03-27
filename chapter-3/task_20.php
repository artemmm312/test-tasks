<?php

//20. В массиве А(N,M) переставить строки так, чтобы строка с максимальной суммой элементов
// стала первой строкой, а остальные строки расположить в порядке возрастания элементов первого столбца.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$max_sum = 0;
	$index = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		$sum = 0;
		for ($j = 0; $j < $n; $j++) {
			$sum += $arr[$i][$j];
		}
		if ($i === 0) {
			$max_sum = $sum;
			continue;
		}
		if ($sum > $max_sum) {
			$max_sum = $sum;
			$index = $i;
		}
	}
	if ($index !== 0) {
		$temp = $arr[0];
		$arr[0] = $arr[$index];
		$arr[$index] = $temp;
	}
	for ($i = 1; $i < $arr_count; $i++) {
		for ($j = $i + 1; $j < $arr_count; $j++) {
			if ($arr[$i][0] > $arr[$j][0]) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}

$arr =
	[
		[5, 1, 3, 20, 1],
		[4, 5, 6, -15, 1],
		[7, 9, 4, 11, 1],
		[5, 21, 40, 9, 1],
		[1, 21, 40, 9, 1],
		[2, 21, 40, 9, 1],
		[9, 21, 40, 9, 1],
	];
print_r(anythingArray($arr));
