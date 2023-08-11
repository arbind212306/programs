const myArr = [1, 2, [3, [4, 5, 6], 7], 8];

function flatArrayWithDepth (arr, depth) {
	let result = [];

	if (depth === 0) {
		return arr.slice();
	}

	for (let i = 0; i < arr.length; i++) {

		if (Array.isArray(arr[i])) {
			result = result.concat(flatArrayWithDepth(arr[i], depth -1));
		} else {
			result.push(arr[i]);
		}
	}

	return result;
}

console.log(flatArrayWithDepth(myArr,1));

