class Fabonacci {
	printFabonnaciSeries(number) {
		const message = `Fabonacci series of ${number} is :`;
		let num1 = 0;
		let num2 = 1;

		if (number === 0) {
			return message + num1;
		}

		let series = `${message} ${num1}, ${num2}`;

		if (number === 1) {
			return series;
		}

		for (let i = 2; i<=number; i++) {
			let num3 = num1 + num2;
			num1 = num2;
			num2 = num3;
			series += `, ${num3}`;
		}

		return series;
	}
}

const fabonacci = new Fabonacci();
console.log(fabonacci.printFabonnaciSeries(5));