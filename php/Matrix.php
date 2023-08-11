<?php

class Matrix {
	public function reverseMatrixRowAndInvert(array $matrix): array {
		$count = count($matrix);
		for ($i=0; $i < $count ; $i++) { 
			$length = count($matrix[$i]);
			$pos = $length - 1;
			for ($j=0; $j < $length; $j++) {
				 if($j < $length - 1) {
				 	$value = $matrix[$i][$pos];
					$matrix[$i][$pos] = $matrix[$i][$j];
					$matrix[$i][$j] = $value;
				 }

				$matrix[$i][$j] = 1 <=> $matrix[$i][$j];
				$pos--;
			}
		}

		return $matrix;

	}
}

$matArray = array([1,1,0], [1,0,1], [0,0,1]);
$matrix = new Matrix();
$output = $matrix->reverseMatrixRowAndInvert($matArray);
print_r($matArray);
print_r($output);