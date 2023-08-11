<?php

class AmstrongNumber {
	static function isAmstrong($number): bool {
		if ($number == 0 || $number == 1) return true;

		$array = str_split($number);
		$length = count($array);
		$sum = 0;

		for ($i=0; $i < $length; $i++) {
			$sum = $sum + pow($array[$i], 3);
		}

		return $sum == $number ? true : false;
	}
}

echo AmstrongNumber::isAmstrong(407) . "\n";