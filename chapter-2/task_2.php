<?php

//2. Дан массив А(N). Получить массив В(N), i-элемент которого равен среднему арифметическому
// первых i элементов массива А.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$result = [];
	for ($i = 0; $i < $arr_count; $i++) {
		if ($i === 0) {
			$result[] = $arr[$i];
		} else {
			$sum = 0;
			for ($j = 0; $j < $i + 1; $j++) {
				$sum += $arr[$j];
			}
			$result[] = $sum / ($i + 1);
		}
	}
	return $result;
}

print_r(anythingArray([2, 4, 6, 8, 10]));
