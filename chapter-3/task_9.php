<?php

//9. В массив А(N,М) после первого отрицательного элемента каждого столбца вставить число,
// равное минимальному элементу этого столбца. Если столбец не содержит отрицательных
// элементов, то вставить это число перед первым элементом столбца.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$n = count($arr[0]);
	$result = $arr;
	for ($j = 0; $j < $n; $j++) {
		$row = 0;
		$column = 0;
		$min = 0;
		for ($i = 0; $i < $arr_count; $i++) {
			if ($arr[$i][$j] < 0) {
				$row = $i;
				$column = $j;
				break;
			}
		}
		for ($i = 0; $i < $arr_count - 1; $i++) {
			if ($i === 0) {
				$min = $arr[$i][$j];
			}
			if ($arr[$i][$j] > $arr[$i + 1][$j]) {
				$min = $arr[$i + 1][$j];
			}
		}
		if ($min >= 0) {
			$count = count($result[0]);
			for ($i = $count - 1; $i >= $j; $i--) {
				$result[0][$i + 1] = $result[0][$i];
			}
			$result[0][$j] = $min;
		} else {
			$count = count($result[$row]);
			for ($i = $count - 1; $i >= $column; $i--) {
				$result[$row][$i + 1] = $result[$row][$i];
			}
			$result[$row][$column] = $min;
		}
	}
	return $result;
}

$arr =
	[
		[-1, 2, 3, 5],
		[4, 5, 6, -7],
		[-7, 8, -9, 11],
		[7, 8, -13, 11],
	];

print_r(anythingArray($arr));