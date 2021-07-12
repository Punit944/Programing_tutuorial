//type conversion and type coercion

console.log('Welocome to tut4');
let myVar;
myVar = String(34);
console.log(myVar, (typeof myVar));
let boolenanVar = String(true);
console.log(boolenanVar, (typeof boolenanVar));

let date  =  String(new Date());
console.log(date, (typeof date));

let arr = String([1,2,34,5,6,7,8]);
console.log(arr.length, (typeof arr));

let stri = Number("3434");
stri = Number("545d4");
stri = Number(true);
console.log(stri,(typeof stri));


let number = parseInt('34');
console.log(number, (typeof number));


let num2  = parseFloat('45.656')
console.log(num2.toFixed(43), (typeof number));


// type coercion

let mystr = "4575";
let mynum = 45;

console.log(mystr + mynum);