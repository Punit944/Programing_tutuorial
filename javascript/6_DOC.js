// let elem = document.getElementById('click');
// // console.log(elem);

// let elem2 = document.getElementsByClassName('c')
// // console.log(elem2);

// elem2[0].style.background = "yellow";

// elem2[0].classList.add("bg");

// elem2[1].classList.add("text_success");

// // console.log(elem2[0].innerHTML);
// // console.log(elem2[1].innerText);

// tn = document.getElementsByTagName('div');
// console.log(tn);
// createdElement = document.createElement('p');
// createdElement.innerHTML = "This is created Para";
// tn[0].appendChild(createdElement);

// createdElement2 = document.createElement('b');
// createdElement2.innerHTML = "This is created Para";
// tn[0].replaceChild(createdElement2,createdElement);
// //removeChild(elemen; ---> removes an element


// // selection using Query console
// sel = document.querySelectorAll('.container');
// console.log(sel);


 // function clicked(){
 // 	console.log("The button was clicked");
	// sel = document.querySelector('.ph');
 // 	sel.style.backgroundColor = 'black';
 // 	sel.style.color = 'white';
 // }


// window.onload = function(){
// 	console.log("The document was loaded ")
// }

// //Event is javascript
// sel.addEventListener('click', function(){
// 	console.log("clicked on Container");
// })

// sel.addEventListener('mouseover',function(){
// 	console.log("mouse on Container");
// })

// sel.addEventListener('mouseout',function(){
// 	console.log("mouse out of Container");
// })

// sel.addEventListener('mousedown',function(){
// 	console.log("mouse  on Container");
// })

//Arrow Function
// function sum(){
// 	return 5;
// }


// summ = (a,b)=>{
// 	return a+b;
// }

// SetTimeout and Setinterval
// logKaro = ()=>{
//      document.querySelectorAll('.container')[0].innerHTML = "<br>setime out fired</br>";
//  	console.log("I am logKaro")
// }

// setTimeout(logKaro, 2000);
// clr = setInterval(logKaro, 2000);

// use clearInterval(clr)?clearTimeout(clr) to cancel setInterval/setTimeout()

// localStorage

// console.log(localStorage);
// localStorage.clear();


// Json 

obj = {
    name: 'punit',
    marks: '56',
    a:{
        this: 'that'
    }
}
console.log(typeof obj);

jso = JSON.stringify(obj);
console.log(jso ,typeof jso)

parsed = JSON.parse(jso);
console.log(parsed,typeof(parsed));

//Template literals - Backticks
// a = 32;
// console.log(`this is my ${a}`);