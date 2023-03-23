<?php

//7. В массиве А(N,N) поменять местами максимальные элементы нижнего и верхнего
// треугольников относительно главной диагонали.

function anythingArray(array $arr): array
{
	$n = count($arr);
	$max_above = $arr[0][1];
	$max_below = $arr[1][0];
	$a_i = 0;
	$a_j = 1;
	$b_i = 1;
	$b_j = 0;
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $n; $j++) {
			if ($i < $j) {
				if ($arr[$i][$j] > $max_above) {
					$max_above = $arr[$i][$j];
					$a_i = $i;
					$b_j = $j;
				}
			}
			if ($i > $j) {
				if ($arr[$i][$j] > $max_below) {
					$max_below = $arr[$i][$j];
					$a_i = $i;
					$a_j = $j;
				}
			}
		}
	}
	$temp = $arr[$a_i][$a_j];
	$arr[$a_i][$a_j] = $arr[$b_i][$b_j];
	$arr[$b_i][$b_j] = $temp;
	return $arr;
}

$arr =
	[
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9],
	];

print_r(anythingArray($arr));
