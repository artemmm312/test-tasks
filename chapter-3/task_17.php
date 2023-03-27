<?php

//17. В массиве А(N,M) элементы, кратные заданному числу р, переместить в начало строк и
// расположить их в порядке возрастания.

function moveElementsByP(&$row, $p): void
{
	$count = count($row);
	$index = 0;
	for ($i = 0; $i < $count; $i++) {
		if ($row[$i] % $p === 0) {
			$temp = $row[$index];
			$row[$index] = $row[$i];
			$row[$i] = $temp;
			$index++;
		}
	}
	
	for ($j = 0; $j < $index - 1; $j++) {
		if ($row[$j] < $row[$j + 1]) {
			$temp = $row[$j];
			$row[$j] = $row[$j + 1];
			$row[$j + 1] = $temp;
		}
	}
}

function anythingArray(array $arr, $p): array
{
	$arr_count = count($arr);
	for ($i = 0; $i < $arr_count; $i++) {
		moveElementsByP($arr[$i], $p);
	}
	return $arr;
}

$arr =
	[
		[5, 1, 3, 20, 1],
		[4, 5, 6, -15, 1],
		[7, 9, 4, 11, 1],
		[5, -21, 40, -9, 1],
	];
$p = 2;
print_r(anythingArray($arr, $p));
