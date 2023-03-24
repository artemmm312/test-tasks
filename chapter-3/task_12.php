<?php

//12. В массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.

function isPrime(int $number): bool
{
	if ($number <= 1) {
		return false;
	}
	for ($i = 2; $i <= sqrt($number); $i++) {
		if ($number % $i === 0) {
			return false;
		}
	}
	return true;
}

function anythingArray(array $arr): array
{
	$columns = [];
	$count_N = count($arr);
	$count_M = count($arr[0]);
	for ($j = 0; $j < $count_M; $j++) {
		for ($i = 0; $i < $count_N; $i++) {
			if (isPrime($arr[$i][$j])) {
				if ($i === $count_N - 1) {
					$columns[] = $j;
				}
				continue;
			}
			break;
		}
	}
	if (!empty($columns)) {
		$n = count($columns);
		for ($j = 0; $j < $n; $j++) {
			for ($i = 0; $i < $count_N; $i++) {
				unset($arr[$i][$columns[$j]]);
			}
		}
	}
	return $arr;
}

$arr =
	[
		[5, 2, 3, 20],
		[4, 3, 6, -15],
		[7, 5, 4, 11],
		[5, 7, 6, 9],
	];
print_r(anythingArray($arr));
