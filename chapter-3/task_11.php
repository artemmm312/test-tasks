<?php

//11. В массиве А(N,М) удалить нулевые строки.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$null_rows = [];
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		$sum = 0;
		for ($j = 0; $j < $n; $j++) {
			$sum += $arr[$i][$j];
		}
		if ($sum === 0) {
			$null_rows[] = $i;
		}
	}
	if (!empty($null_rows)) {
		$n = count($null_rows);
		for ($i = 0; $i < $n; $i++) {
			unset($arr[$null_rows[$i]]);
		}
	}
	return $arr;
}

$arr =
	[
		[5, 2, 3, 20],
		[4, 5, 6, -15],
		[7, 9, 4, 11],
		[5, -20, 6, 9],
	];
print_r(anythingArray($arr));
