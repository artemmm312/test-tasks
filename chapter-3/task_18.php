<?php

//18. Известно, что в каждой строке и каждом столбце массива А(N,N) имеется единственный отрицательный элемент.
// Переставить строки массива так, чтобы отрицательные элементы находились на главной диагонали.

function anythingArray(array $arr): array
{
	$count = count($arr);
	for ($i = 0; $i < $count; $i++) {
		for ($j = 0; $j < $count; $j++) {
			if ($arr[$i][$j] < 0) {
				$temp = $arr[$i][$i];
				$arr[$i][$i] = $arr[$i][$j];
				$arr[$i][$j] = $temp;
			}
		}
	}
	return $arr;
}

$arr =
	[
		[5, 1, 3, 20, -1],
		[4, 5, 6, -15, 1],
		[7, 9, -4, 11, 5],
		[5, -21, 40, 9, 2],
		[5, -7, 40, 9, 3],
	];
print_r(anythingArray($arr));