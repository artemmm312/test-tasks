<?php

//5. В массиве А(N) каждый элемент равен 0, 1 или 2. Переставить элементы массива так,
// чтобы сначала расположились все нули, затем все двойки и, наконец, все единицы.

function anythingArray(array $arr): array
{
	$arr_count = count($arr);
	$result = [];
	for ($i = 0; $i < $arr_count; $i++) {
		if ($arr[$i] === 0) {
			$result[] = $arr[$i];
		}
	}
	for ($i = 0; $i < $arr_count; $i++) {
		if ($arr[$i] === 2) {
			$result[] = $arr[$i];
		}
	}
	for ($i = 0; $i < $arr_count; $i++) {
		if ($arr[$i] === 1) {
			$result[] = $arr[$i];
		}
	}
	return $result;
}

$arr = [2, 1, 1, 2, 0, 0, 1, 0];
print_r(anythingArray($arr));
