<?php

//8. В каждой строке массива А(N,М) удалить все четные положительные элементы, стоящие
// между первым и последним максимальными элементами.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$j_max1 = 0;
	$j_max2 = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		if ($i === 0) {
			for ($j = 0; $j < $n - 1; $j++) {
				if ($j === 0) {
					$j_max1 = $j;
				}
				if ($arr[$i][$j] < $arr[$i][$j + 1]) {
					$j_max1 = $j + 1;
				}
			}
		} elseif ($i === $arr_count - 1) {
			for ($j = 0; $j < $n - 1; $j++) {
				if ($j === 0) {
					$j_max2 = $j;
				}
				if ($arr[$i][$j] < $arr[$i][$j + 1]) {
					$j_max2 = $j + 1;
				}
			}
		}
	}
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		for ($j = 0; $j < $n; $j++) {
			if ($i === $arr_count - 1 && $j === $j_max2) {
				break;
			}
			if ($i === 0 && $j <= $j_max1) {
				continue;
			}
			if ($arr[$i][$j] % 2 === 0) {
				unset($arr[$i][$j]);
			}
		}
	}
	return $arr;
}


$arr =
	[
		[5, 2, 3, 20],
		[4, 5, 6, 30],
		[7, 9, 4, 11],
	];
print_r(anythingArray($arr));
