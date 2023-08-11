function deepClone(obj) {
  if (obj === null || typeof obj !== "object") {
    return obj;
  }

  const clonedObj = Array.isArray(obj) ? [] : {};

  for (let key in obj) {
    clonedObj[key] = deepClone(obj[key]);
  }

  return clonedObj;
}

const obj1 = {
  a: {
    b: {
      c: 1,
      d: () => console.log("aaa"),
    },
  },
};



// Deep cloning obj1 using custom deepClone function
// const clonedObj = deepClone(obj1);

// Modifying the original object's nested property
// obj1.a.b.c = 100;

// Changes will only affect the original object
// console.log(obj1.a.b.c); // Output: 100

// The cloned object remains unaffected
// console.log(clonedObj.a.b.c); // Output: 1

// Invoking the function from the original object
// obj1.a.b.d(); // Output: "aaa"

// Invoking the function from the cloned object
// clonedObj.a.b.d(); // Output: "aaa"
