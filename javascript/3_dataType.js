/*
Data type 

primitive datatype  - string,number,booleam,null,undefined,Symbol;
refrence datatype -   Array, object, function, data;

*/

let myname = "harry";
console.log("my string is : " + myname);
console.log("Data type is " + (typeof myname));

//Number 
let isDrive = true;
console.log("Data type is " + (typeof isDrive));

//null
let nullVar = null;
console.log("Data type is " + (typeof nullVar));

//underfined
let undef = undefined;
console.log("Data type is " + (typeof undef));


//Referance Data Types 

//Arrays
let myarr = [343,453,565,65,45,34];
console.log("Data type is " + (typeof myarr));

//Object literals
let stmarks = {
    harry : 34,
    punit : 56,
    sanskar : 67,
    'Rohan Das' : 89
}

function findNmae(){

    console.log(stmarks);
    console.log("Data type is " + (typeof stmarks));
    
    
}


findNmae();
console.log("Data type is " + (typeof findNmae));

let date = new Date();
console.log(typeof date);

