<?php

//19. В массиве А(N,M) расположить элементы строк в порядке убывания. Вставить в каждую строку
// заданное число р, не нарушая этот порядок.

function descendingSort(array &$row): void
{
	$count = count($row);
	for ($i = 0; $i < $count; $i++) {
		for ($j = $i + 1; $j < $count; $j++) {
			if ($row[$j] > $row[$i]) {
				$temp = $row[$i];
				$row[$i] = $row[$j];
				$row[$j] = $temp;
			}
		}
	}
}

function anythingArray(array $arr, int $p): array
{
	$arr_count = count($arr);
	for ($i = 0; $i < $arr_count; $i++) {
		descendingSort($arr[$i]);
		$n = count($arr[$i]);
		$pos = $n - 1;
		while ($pos >= 0 && $arr[$i][$pos] < $p) {
			$pos--;
		}
		for ($j = $n - 1; $j > $pos; $j--) {
			$arr[$i][$j] = $arr[$i][$j - 1];
		}
		$arr[$i][$pos + 1] = $p;
	}
	return $arr;
}

$arr =
	[
		[5, 1, 3, 20, 1],
		[4, 5, 6, -15, 1],
		[7, 9, 4, 11, 1],
		[5, -21, 40, -9, 1],
	];

// Заданное число
$p = 4;

// Выводим полученный массив
print_r(anythingArray($arr, $p));
