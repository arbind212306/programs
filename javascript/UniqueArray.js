/*
function makeArrayUnique(arr) {
  const uniqueObj = {};
  const uniqueArray = [];

  for (const element of arr) {
    if (!uniqueObj[element]) {
      uniqueArray.push(element);
      uniqueObj[element] = true;
    }
  }

  return uniqueArray;
}

// Example usage:
const originalArray = [1, 2, 2, 3, 4, 4, 5];
const uniqueArray = makeArrayUnique(originalArray);

console.log(uniqueArray); // Output: [1, 2, 3, 4, 5]
*/

function makeUniqueArray(arr){
	const uniqueArray = arr.filter((value, index, self) => self.indexOf(value) === index);
	return uniqueArray;
}

const originalArray = [1, 2, 2, 3, 4, 4, 5];
const uniqueArray = makeUniqueArray(originalArray);

console.log(uniqueArray);