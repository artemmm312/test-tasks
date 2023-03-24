<?php

//13. В массив А(N,М) вставить одномерный массив В(N), расположив его перед последним столбцом,
// содержащим нулевой элемент. Если такого столбца не окажется, то вставить массив В(N) после последнего столбца.

function anythingArray(array $arr, array $b): array
{
	$count_N = count($arr);
	$count_M = count($arr[0]);
	$zero = null;
	for ($j = 0; $j < $count_M; $j++) {
		for ($i = 0; $i < $count_N; $i++) {
			if ($arr[$i][$j] === 0) {
				$zero = $j;
			}
		}
	}
	for ($i = 0; $i < $count_N; $i++) {
		if ($zero !== null) {
			for ($j = $count_M - 1; $j > $zero; $j--) {
				if ($j === $count_M - 1) {
					$arr[$i][] = $arr[$i][$j];
				}
				$arr[$i][$j] = $arr[$i][$j - 1];
			}
			$arr[$i][$zero] = $b[$i];
		} else {
			$arr[$i][] = $b[$i];
		}
	}
	return $arr;
}

$arr =
	[
		[1, 2, 3, 5],
		[4, 5, 6, -7],
		[2, 0, -9, 1],
		[7, 8, -13, 4],
	];
$b = [33, 33, 33, 33];
print_r(anythingArray($arr, $b));
