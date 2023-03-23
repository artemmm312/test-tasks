<?php

//5. В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны заданному числу р.

function anythingArray(array $arr, int $p): int
{
	$arr_count = count($arr);
	$result = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		$sum = 0;
		for ($j = 0; $j < $n; $j++) {
			if ($arr[$i][$j] % $p !== 0) {
				break;
			}
			$sum += $arr[$i][$j];
			if ($j === $n - 1) {
				$result += $sum;
			}
		}
	}
	return $result;
}

$arr =
	[
		[3, 9, 3, 12, 18, 6],
		[4, 5, 6, 0, -10, 20,],
		[9, 6, 30, 24, 3],
		[-7, 8, -9, 0, 103],
	];
echo anythingArray($arr, 3);
