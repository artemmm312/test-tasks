<?php

//6. Найти наибольший общий делитель (НОД) двух натуральных чисел N и M, реализуя алгоритм Евклида.

function algorithmEuclid(int $a, int $b): int
{
	if ($a !== 0 && $b !== 0) {
		if ($a === $b) {
			return $a;
		}
		
		$min = 0;
		$max = 0;
		if ($a > $b) {
			$min = $b;
			$max = $a;
		} elseif ($a < $b) {
			$min = $a;
			$max = $b;
		}
		$modulo = $max % $min;
		if ($modulo === 0) {
			return $min;
		}
		while ($modulo) {
			$result = $max % $modulo;
			if ($result === 0) {
				return $modulo;
			}
			$modulo = $result;
		}
		return $modulo;
	}
	return 0;
}

echo algorithmEuclid(60, 32);
