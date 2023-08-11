<?php

class Palindrome {
	static function isPalindrome($param): bool {
		$array = str_split($param);
		$length = count($array);
		$str = '';

		for ($i=$length-1; $i >= 0; $i--) {
			$str .= $array[$i]; 
		}

		return $str == $param ? true : false;
	}
}

echo Palindrome::isPalindrome("ANNA") . "\n";