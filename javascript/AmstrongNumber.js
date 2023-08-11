class AmstrongNumber {
	isAmstrong(number) {
		if (number === 0 || number === 1) {
			return true;
		}

		const splitNumber = Array.from(String(number)) //return array
		const length = splitNumber.length;
		let sum = 0;
		for (i=0; i<length; i++) {
			sum = sum + pow(splitNumber[i], 3);
		}

		return sum == number ? true : false;
	}
}

new AmstrongNumber().isAmstrong(123);