<?php

//10. В массиве А(N,М) поменять местами столбцы, содержащие максимальный и минимальный элементы.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$j_max = 0;
	$j_min = 0;
	$max = $arr[0][0];
	$min = $arr[0][0];
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		for ($j = 0; $j < $n; $j++) {
			if ($min > $arr[$i][$j]) {
				$min = $arr[$i][$j];
				$j_min = $j;
			}
			if ($max < $arr[$i][$j]) {
				$max = $arr[$i][$j];
				$j_max = $j;
			}
		}
	}
	for ($i = 0; $i < $arr_count; $i++) {
		$temp = $arr[$i][$j_min];
		$arr[$i][$j_min] = $arr[$i][$j_max];
		$arr[$i][$j_max] = $temp;
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
