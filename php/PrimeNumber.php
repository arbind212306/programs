<?php

class PrimeNumber {

	//time complexity - O(n)
	static function isPrime1($number): bool {
		$countFactor = 0;
		for ($i=1; $i<=$number; $i++) {
			if ($number%$i == 0) {
				$countFactor++;
			}
		}

		return $countFactor == 2 ? true : false;
	}


	//Time complexity - O(n/2). asymptotically it is same as O(n) for large data
	static function isPrime2($number): bool {
		if ($number < 2) {
			return false;
		}

		if ($number == 2) {
			return true;
		}

		if ($number%2 == 0) {
			return false;
		}

		$count = 0;
		for ($i=3; $i<=$number; $i+=2) {
			
			if ($number%$i == 0) {
				$count++;
			}
		}

		return $count == 1 ? true : false;
	}


	static function isPrime3($number): bool {
		if ($number < 2) {
			return false;
		}

		if ($number == 2) {
			return true;
		}

		if ($number%2 == 0) {
			return false;
		}

		$sqrt = sqrt($number);

		for ($i=3; $i <= $sqrt ; $i+=2) {
			if($number%$i == 0) {
				return false;
			}
		}

		return true;
	}

	//Sieve of Eratosthenes Algo
	//O(n*log(log(n)))
	static function isPrime4($number) {
		if ($number < 2) {
			return false;
		}

		if ($number == 2 || $number == 3) {
			return true;
		}

		if ($number % 2 == 0 || $number % 3 == 0) {
			return false;
		}

		$sqrt = sqrt($number);
		$dx = 4;
		for ($i=5; $i <= $sqrt; $i+=$dx) {
			if ($number % $i == 0) {
				return false;
			}

			$dx = -($dx - 6);
		}

		return true;
	}

}

echo PrimeNumber::isPrime4(19)."\n";
