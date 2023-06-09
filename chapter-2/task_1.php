<?php

//1. В массиве А(N) найти: а) число элементов, предшествующих первому отрицательному элементу;
// б) сумму нечетных элементов массива, следующих за последним отрицательным элементом.

function anythingArray(array $arr): string
{
	$arr_count = count($arr);
	$a = 0;
	for ($i = 0; $i < $arr_count; $i++) {
		if ($arr[$i] < 0) {
			break;
		}
		$a++;
	}
	$b = 0;
	for ($i = --$arr_count; $i >= 0; $i--) {
		if ($arr[$i] < 0) {
			break;
		}
		if ($arr[$i] % 2 === 0) {
			$b++;
		}
	}
	return 'число элементов, предшествующих первому отрицательному элементу: ' . $a . "\n" .
		'сумму нечетных элементов массива, следующих за последним отрицательным элементом: ' . $b;
}

echo anythingArray([1, 2, -3, 5, -1, 8, 5, 6, 4]);
