<?php

//3. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
require_once __DIR__ . '/task_2.php';
function check_digital($n)
{
	if (is_int($n)) {
		if ($n % 2 !== 0) {
			return false;
		}
		return is_digits_ascending($n);
	}
	return false;
}

function counting_numbers()
{
	$result = [];
	for($i = 1000; $i < 10000; $i+=2) {
		if(check_digital($i)) {
			$result[] = $i;
		}
	}
	return $result;
}

print_r(counting_numbers());
