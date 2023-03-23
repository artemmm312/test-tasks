<?php

//1. В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, ниже
// диагонали и выше диагонали.

function anythingArray(array $arr): string
{
	$sum_diagonal = 0;
	$sum_below = 0;
	$sum_above = 0;
	$n = count($arr);
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $n; $j++) {
			if ($i === $j) {
				// элемент на главной диагонали
				$sum_diagonal += $arr[$i][$j];
			}
			if ($i > $j) {
				// элемент ниже главной диагонали
				$sum_below += $arr[$i][$j];
			}
			if ($i < $j) {
				// элемент выше главной диагонали
				$sum_above += $arr[$i][$j];
			}
		}
	}
	return 'Сумма главной диагонали: ' . $sum_diagonal . "\n" .
		'Сумма выше главной диагонали: ' . $sum_above . "\n" .
		'Сумма ниже главной диагонали:' . $sum_below . "\n";
}

$arr =
	[
		[1, 2, 3],
		[4, 5 ,6],
		[7, 8, 9],
	];
echo anythingArray($arr);
