<?php

//4. В массиве А(N,М) найти сумму тех элементов, в записи которых используются только цифры 0, 1, 3, 8.

function anythingArray(array $arr): int
{
	$arr_count = count($arr);
	$sum = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		for ($j = 0; $j < $n; $j++) {
			$num = $arr[$i][$j];
			while ($num > 0) {
				$digit = $num % 10;
				if ($digit === 0 || $digit === 1 || $digit === 3 || $digit === 8) {
					$num = (int)($num / 10);
				} else {
					break;
				}
			}
			if ($num === 0) {
				$sum += $arr[$i][$j];
			}
		}
	}
	return $sum;
}

$arr =
	[
		[1, 2, 3, 4, 5, 6],
		[4, 5, 6, 0, -10, 20,],
		[7, 6, 5, 4, 3],
		[-7, 8, -9, 0, 103],
	];
echo anythingArray($arr);
