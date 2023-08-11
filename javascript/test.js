/*
The call method binds the this value to the function and executes the function. 
It takes the this value and a list of arguments as parameters. 
Then, it returns the value returned by the function, which is called using the call method.
*/

// function test(arg1, arg2) {
// 	console.log(this.name, arg1, arg2);
// }

// test.call({name: 'Hello'}, "Arbind", "Sonkar");

<!--------------------------------------------------------------------------------->

/*
  The apply method binds the this value to the function and executes the function. 
  It takes the this value and a single array object as parameters, 
  and it returns the value returned by the function, which is called using the apply method.
*/
function test(...arg1) {
	console.log(this.name, arg1);
}

test.apply({name: 'Hello'}, ["Arbind", "Sonkar"]);

<!------------------------------------------------------------------------------------->
/*
The bind method binds the this value to the function and returns a new function. 
However, we still need to separately invoke the returned function.
*/
function test(arg){
 console.log(this.number, arg);
}

let bindedFn = test.bind({number: 99}, "argument");

bindedFn(); // 99, "argument"


const http = require('http');

const host = "127.0.0.1";
const port = 3000;

const server = http.createServer((req, res) => {
	res.statusCode = 200;
	res.setHeader('Content-Type', 'plain/text');
	res.end("Hello world");

})

server.listen(port, host, () => {

})