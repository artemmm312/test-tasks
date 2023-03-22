<?php

//3. В массиве А(N) подсчитать количество различных элементов.

function anythingArray(array $arr): string
{
	$arr_count = count($arr);
	$result = $arr_count;
	for ($i = 0; $i < $arr_count; $i++) {
		if ($i === 0) {
			continue;
		}
		for ($j = $i + 1; $j < $arr_count; $j++) {
			if ($arr[$j] === $arr[$i]) {
				$result--;
			}
		}
	}
	return 'количество различных элементов: ' . $result;
}

echo anythingArray([1, 2, 5, 6, 5, 7, 7, 7, 8, 8, 9]);
