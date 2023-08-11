function shuffle(arr) {
	for (let i = 0; i < arr.length; i++) {
		if ((i%2 === 0) && arr[i] > arr[i+1] || (i%2 === 1 && arr[i] < arr[i+1])) {
			//swap adjacent elements
			[arr[i], arr[i+1]] = [arr[i+1], arr[i]];
		}
	}

	return arr;
}


console.log(shuffle( [1, 2, 3, 4, 5]));

//Time complexity - O(n), where n is the number of element in array
//Space complexity - O(1)
// possible test cases
/*
- [2, 1, 5, 3, 11, 7]
- [2, 1, 5, 3, 11, 7]
- [2, 7, 3, 11, 1, 5]
- [9, 9, 9, 9, 9]
- [-5, -2, -1, -3, -4]
- [1, 2, 3, 4, 5]

*/