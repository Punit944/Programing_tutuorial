document.getElementById('data').addEventListener('click',myfun);

function myfun()
{
  var xhr = new XMLHttpRequest();
  xhr.open('GET','gethint.php', true);
  
  xhr.onload = function(){

   if(xhr.status == 200)
   {
     document.getElementById("pp").innerHTML = this.responseText;
   }
   else
   {
     document.write("File not Fond 404");
   }
  }
   
  console.log(xhr.send());

}

/*
200 - ok 
404 - not found
403 - for Error

*/