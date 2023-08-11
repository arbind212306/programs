<?php

class ArrayMaxMinElement {

	static function FindMaxAndMinElement(array $array) {
		$count = count($array);
		$max = $array[0];
		$min = $array[0];

		for ($i=1; $i<$count; $i++) {
			if ($array[$i] > $max) {
				$max = $array[$i];
			}

			if ($array[$i] < $min) {
				$min = $array[$i];
			}
		}

		return ['max element' => $max, 'min element' => $min];
	}
}

$array = [4,3,498,3,90,1,2];

print_r(ArrayMaxMinElement::FindMaxAndMinElement($array));
