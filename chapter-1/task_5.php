<?php

//5. Определить, является ли число 2n m симметричным, т. е. запись числа содержит четное
// количество цифр и совпадают его левая и правая половинки.

function symmetry($n): bool
{
	if (is_int($n)) {
		$count = 0;
		$num = $n;
		while ($num > 0) { //подсчёт количества цифр в числе
			$num = (int)($num / 10);
			$count++;
		}
		if ($count % 2 !== 0) { //проверка на четность количества цифр
			return false;
		}
		$num_half = 0;
		$num = $n;
		$half = $count / 2;
		for ($i = 0; $i < $half; $i++) { //последняя часть числа зеркально отраженная
			$num_half = $num_half * 10 + $num % 10;
			$num = (int)($num / 10);
		}
		while ($half > 0) { //проверяем по цифрам зеркальное отражение последней части с оставшейся первой частью числа
			$digit_first = $num_half % 10;
			$digit_last = $num % 10;
			if ($digit_first !== $digit_last) {
				return false;
			}
			$num_half = (int)($num_half / 10);
			$num = (int)($num / 10);
			$half--;
		}
		return true;
	}
	return false;
}

echo symmetry(627726) ? "Да" : "Нет";
