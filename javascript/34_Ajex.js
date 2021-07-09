console.log("Ajex tut");

let fetchBtn = document.getElementById('fatchBtn');

fetchBtn.addEventListener('click', buttonClckHandler);

function buttonClckHandler()
{
    console.log("fetchbtn");
 
    //instantioate an xhr obhect
 
    const xhr = new XMLHttpRequest();
 

    //open the object
    // xhr.open('GET','harry.txt', true);
    xhr.open('POST','http://dummy.restapiexample.com/api/v1/create', true);
    xhr.getResponseHeader('content-type','application/josn');


    //what  to do progress
    xhr.onprogress = function(){
        console.log("On progress");
    }

    xhr.onload = function(){
        if(this.status == 200)
            console.log(this.responseText);
        else 
            console.log("some error occured");
    }

    //send the request    
    params = '{"name":"test454","salary":"123","age":"23"}';

    xhr.send();	

}



let popBtn = document.getElementById('backupbtn');

popBtn.addEventListener('click', phphendler);

function phphendler()
{
    console.log("pophendler");
 
    //instantioate an xhr obhect
 
    const xhr = new XMLHttpRequest();
 
    
    xhr.onload = function(){
        if(this.status === 200)
        {
            let obj = JSON.parse(this.responseText);
            console.log(obj);

            let list = document.getElementById('list');
            str = "";
            for(key in obj)
            {
                str += `<li>${obj[key].id}`; 
            }
            list.innerHTML = str;
            
        }
        else
        {
            console.log("Some error occured");
            
        }
        
    }
    
    // send the request
   xhr.open('GET','https://jsonplaceholder.typicode.com/posts',true);
   xhr.send();
   console.log("we are done!");
   
}
