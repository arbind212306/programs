<?php

class Fabonacci {
	static function printFabonacciSeries ($number) {
		$num1 = 0;
		$num2 = 1;
		$text = "Fabonacci series for first " . $number + 2 . " number is : ";
		if ($number == 0) {
			return $text . " " . $num1;
		}

		if ($number == 1) {
			return $text . " " . $num1 . ", " . $num2;
		}

		$series = $text . $num1 . ", " . $num2;

		for ($i=1; $i<=$number; $i++) {
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
            $series .= ", $num3";
		}

		return $series . "\n";
	}
}

echo Fabonacci::printFabonacciSeries(10);