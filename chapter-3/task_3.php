<?php

//3. В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов тех
// строк, которые упорядочены по возрастанию или по убыванию.

function anythingArray(array $arr): string
{
	$arr_count = count($arr);
	$result = '';
	for ($i = 0; $i < $arr_count; $i++) {
		$n = count($arr[$i]);
		if ($arr[$i][0] < $arr[$i][$n - 1]) {
			for ($j = 0; $j < $n - 1; $j++) {
				if ($j === $n - 2 && $arr[$i][$j] < $arr[$i][$j + 1]) {
					$result .= "Строка $i упорядочена по возрастанию. Её min=" . $arr[$i][0] . ", max=" . $arr[$i][$n - 1] . "\n";
				}
				if ($arr[$i][$j] < $arr[$i][$j + 1]) {
					continue;
				}
				break;
			}
		}
		if ($arr[$i][0] > $arr[$i][$n - 1]) {
			for ($j = 0; $j < $n - 1; $j++) {
				if ($j === $n - 2 && $arr[$i][$j] > $arr[$i][$j + 1]) {
					$result .= "Строка $i упорядочена по убыванию. Её max=" . $arr[$i][0] . ", min=" . $arr[$i][$n - 1] . "\n";
				}
				if ($arr[$i][$j] > $arr[$i][$j + 1]) {
					continue;
				}
				break;
			}
		}
	}
	if (empty($result)) {
		$result .= "Массив не содержит отсортированных элементов";
	}
	return $result;
}

$arr =
	[
		[1, 2, 3, 4, 5, 6],
		[4, 5, 6, 0, -10, 20,],
		[7, 6, 5, 4, 3],
		[-7, 8, -9, 0, -9],
	];
echo anythingArray($arr);
