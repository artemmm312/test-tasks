<?php

//6. Получить упорядоченный по возрастанию массив С(К) путем слияния двух порядоченных по
// возрастанию массивов А(N) и В(М), где К=М+N.

function anythingArray(array $arr1, array $arr2): array
{
	$arr = $arr1;
	$arr2_count = count($arr2);
	for ($i = 0; $i < $arr2_count; $i++) {
		$arr[] = $arr2[$i];
	}
	$arr_count = count($arr);
	for ($i = 0; $i < $arr_count - 1; $i++) {
		if ($arr[$i] > $arr[$i + 1]) {
			$temp = $arr[$i];
			$arr[$i] = $arr[$i + 1];
			$arr[$i + 1] = $temp;
			for ($j = $i; $j >= 1; $j--) {
				if ($arr[$j] < $arr[$j - 1]) {
					$temp = $arr[$j - 1];
					$arr[$j - 1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
	}
	return $arr;
}

$arr1 = [1, 2, 3, 8];
$arr2 = [0, 2, 3, 4, 5, 6, 7];
print_r(anythingArray($arr1, $arr2));
