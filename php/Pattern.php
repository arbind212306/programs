<?php

class Pattern {

	static function starPattern($row) {
		for ($i=1; $i<=$row; $i++) {
			for ($j=1; $j<=$i; $j++) {
				echo '*';
			}
			echo "\n";
		}
	}

	static function reverseStarPattern($row) {
		for ($i=1; $i<=$row; $i++) {
			for ($j=$row; $j >= $i ; $j--) { 
				echo "*";
			}
			echo "\n";
		}
	}

	static function dimondPattern($row) {
		$mid = ($row+1)/2;
		$space = $mid - 1;

		for ($i=1; $i <= $mid ; $i++) {

			for ($j=$space; $j>=1; $j--) {
				echo " ";
			}
			
			for ($k=1; $k<=$i; $k++) {
				echo "* ";
			}
			$space--;
            echo "\n";
		}

        $space = 1;
		for ($l=1; $l < $mid ; $l++) { 
			for ($m=1; $m <= $space ; $m++) { 
				echo " ";
			}

			for ($n=$mid; $n > $l ; $n--) { 
				echo "* ";
			}
			$space++;
			echo "\n";
		}
	}

	static function trianglePattern($row) {
		$space = $row - 1;

		for ($i=1; $i <= $row;  $i++) {

			for ($j=$space; $j>=1; $j--) {
				echo " ";
			}
			
			for ($k=1; $k<=$i; $k++) {
				echo "* ";
			}
			$space--;
            echo "\n";
		}
	}
}

Pattern::trianglePattern(9);
