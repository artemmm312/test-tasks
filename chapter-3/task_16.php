<?php

//16. В массиве А(N,M) расположить строки по убыванию значений максимальных элементов строк.

function getMaxElement($row)
{
	$max = $row[0];
	$count = count($row);
	for ($i = 1; $i < $count; $i++) {
		if ($row[$i] > $max) {
			$max = $row[$i];
		}
	}
	return $max;
}

function anythingArray(array $arr): array
{
	$count_N = count($arr);
	$count_M = count($arr[0]);
	for ($i = 0; $i < $count_N; $i++) {
		for ($j = $i + 1; $j < $count_M; $j++) {
			if (getMaxElement($arr[$i]) < getMaxElement($arr[$j])) {
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
		[5, 1, 3, 20],
		[4, 5, 6, -15],
		[7, 9, 4, 11],
		[5, -21, 40, -9],
	];
print_r(anythingArray($arr));
