<?php

//4. В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его последовательности.

function anythingArray(array $arr, int $k): array
{
	$count = count($arr);
	$arr[] = $k;
	for ($i = $count - 1; $i >= 0; $i--) {
		if ($arr[$i] > $arr[$count]) {
			$temp = $arr[$count];
			$arr[$count] = $arr[$i];
			$arr[$i] = $temp;
			$count--;
		} else {
			break;
		}
	}
	return $arr;
}

$arr = [1, 2, 3, 5, 7];
print_r(anythingArray($arr, 4));
