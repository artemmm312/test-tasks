<?php

class StringCombinations
{
	private string $string;
	private int $length;
	private array $combinations = [];
	
	public function __construct(string $string, int $length)
	{
		if (empty($string)) {
			throw new \RuntimeException('Строка не должна быть пустой');
		}
		if ($length < 1) {
			throw new \RuntimeException('Длина комбинации должна быть больше 0');
		}
		if (strlen($string) < $length) {
			throw new \RuntimeException('Длина комбинации не должна быть больше длины строки');
		}
		$this->string = $string;
		$this->length = $length;
	}
	
	public function getCombinations(): array
	{
		$this->combinations = [];
		$this->generateCombinations($this->string, $this->length, "");
		return $this->combinations;
	}
	
	public function countCombinations(): int
	{
		$n = strlen($this->string);
		$m = $this->length;
		return $this->factorial($n) / $this->factorial($n - $m);
	}
	
	private function generateCombinations($string, $length, $prefix): void
	{
		if ($length === 0) {
			$this->combinations[] = $prefix;
			return;
		}
		$n = strlen($string);
		for ($i = 0; $i < $n; $i++) {
			$newPrefix = $prefix . $string[$i];
			$newString = substr($string, 0, $i) . substr($string, $i + 1);
			$this->generateCombinations($newString, $length - 1, $newPrefix);
		}
	}
	
	private function factorial($n): int
	{
		if ($n === 0) {
			return 1;
		}
		return $n * $this->factorial($n - 1);
	}
}

$string = '1234';
$length = 4;
$SC = new StringCombinations($string, $length);
print_r($SC->getCombinations());
echo "Комбинаций должно быть всего: " . $SC->countCombinations();
