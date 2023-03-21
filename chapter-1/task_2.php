<?php

//2. Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.

function is_digits_ascending($n, $order = 'asc'): bool
{
	if (is_int($n)) {
		
		$order === 'asc' ? $last_digit = 10 : $last_digit = 1; // инициализация предыдущей цифры
		while ($n > 0) { // продолжаем цикл пока число больше 0
			$digit = $n % 10; // получаем последнюю цифру числа
			if ($order === 'asc') {
				if ($digit >= $last_digit) {
					return false;
				}
			} elseif ($order === 'desc') {
				if ($digit <= $last_digit) {
					return false;
				}
			}
			$last_digit = $digit; // сохраняем последнюю цифру в качестве предыдущей
			$n = (int)($n / 10); // удаляем последнюю цифру числа
		}
		return true; // если мы дошли до конца числа, возвращаем true
	}
	return false;
}

echo is_digits_ascending(1234) ? "Да" : "Нет"; // Да
