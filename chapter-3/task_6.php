<?php

//6. В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов, и умножить
// ее как вектор на матрицу А.

function anythingArray(array $arr): array|string
{
	$arr_count = count($arr);
	$result = [];
	$vector = null;
	for ($i = 0; $i < $arr_count; $i++) {
		for ($j = 0; $j < $arr_count; $j++) {
			if ($arr[$i][$j] < 0) {
				break;
			}
			if ($j === $arr_count - 1) {
				$vector = $arr[$i];
			}
		}
		if (!empty($vector)) {
			break;
		}
	}
	if (!empty($vector)) {
		for ($i = 0; $i < $arr_count; $i++) {
			$s = 0;
			for ($j = 0; $j < $arr_count; $j++) {
				$s += $arr[$i][$j] * $vector[$j];
			}
			$result[] = $s;
		}
		return $result;
	} else {
		return 'Нет строк не содержащих отрицательные элементы.';
	}
}

$arr =
	[
		[-4, 5, 6],
		[1, 2, 3],
		[9, -6, 8],
	];
print_r(anythingArray($arr));
