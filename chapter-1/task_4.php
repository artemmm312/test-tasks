<?php

//4. Получить все четырехзначные числа, в записи которых встречаются только цифры 0,2,3,7.
//Тут речь идёт про числа, где встречается только данный набор цифр, без повторений, т.е. 2037 - верно, 2000 - не верно.

function is_digits($n): bool
{
	$last = null;
	while ($n > 0) {
		$digit = $n % 10;
		if ($digit === 7 || $digit === 3 || $digit === 2 || $digit === 0) {
			if ($digit === $last) {
				return false;
			}
			$last = $digit;
			$n = (int)($n / 10);
		} else {
			return false;
		}
	}
	return true;
}

function different_numbers($n): bool
{
	$four = $n % 10;
	$three = intdiv($n, 10) % 10;
	$two = intdiv($n, 100) % 10;
	$one = intdiv($n, 1000);
	if ($four === $three ||
		$four === $two ||
		$four === $one ||
		$three === $two ||
		$three === $one ||
		$two === $one) {
		return false;
	}
	return true;
}

function result(): array
{
	$result = [];
	for ($i = 2000; $i < 10000; $i++) {
		if (is_digits($i) && different_numbers($i)) {
			$result[] = $i;
		}
	}
	return $result;
}

print_r(result());
