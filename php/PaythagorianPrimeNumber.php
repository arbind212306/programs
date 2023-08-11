<?php
//if a nuber is prime and is of form 4*n+1, then it is pythagorian prime

class PaythagorianPrimeNumber {
    //seive of Erathosthenes Algo
	static function isPrime($number) {
       if ($number < 2):
       	  return false;
       	endIf;

       	if ($number == 2 || $number == 3):
       		return true;
       	endIf;

       	if ($number%2 == 0 || $number%3 == 0):
       		return false;
       	endIf;

       	$dx = 4;

       	for ($i=5; $i < sqrt($number); $i+=$dx):
       		if ($number%$i == 0):
       			return false;
       		endIf;

       		$dx = - ($dx - 6);
       	endFor;

       	return true;
	}

	static function isPythagorianPrime($number) {
		if (PaythagorianPrimeNumber::isPrime($number) && $number%4 == 1) {
			return true;
		}
		return false;
	}
}

echo PaythagorianPrimeNumber::isPrime(13*4+1) . "\n";
echo PaythagorianPrimeNumber::isPythagorianPrime(13)  . "\n";