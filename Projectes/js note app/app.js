console.log("welcome to my notes Projects");


let addBtn = document.getElementById('addBtn');
let deletBtn = document.getElementById('deletBtn');


addBtn.addEventListener("click", function (e) {
    console.log("click on addBtn");
    let addText = document.getElementById('addText');
    let notes = localStorage.getItem("notes");
    if (notes == null) {
        notesObj = [];

    }
    else {
        noteObj = JSON.parse(notes);

    }
    notesObj.push(addText.value);
    localStorage.setItem("notes", JSON.stringify(notesObj));
    addText.value = "";
    console.log(notesObj);
    showNotes();
});


showNotes();
function showNotes() {
    let notes = localStorage.getItem("notes");
    if (notes == null) {
        notesObj = [];
    }
    else {
        notesObj = JSON.parse(notes);
    }
    
    let noteCard = '';
    notesObj.forEach(function(element,index){
  
    noteCard += `<div class="mx-2 my-2 noteCard card" style="width: 15rem;">
    <div class="card-body">
       <h5 class="card-title">Note${index + 1}</h5>
       <p class="card-text">${element}</p>
       <a href="#" class="btn btn-primary" id="${index}" onclick="deleteNote(this.id)">Delet Note</a>
     </div>
  </div>`;
    });

    let notesElm = document.getElementById('notes');
    if(notes.length == 0)
    {
       notesElm.innerHTML = `Nothing to show! Use "Add a Note " section above to add notes.`;
    }
    else
    {
        notesElm.innerHTML = noteCard;
    }
  

}

function deleteNote(index){
    console.log('i am deleting', index);
    let notes = localStorage.getItem("notes");
    if (notes == null) {
        notesObj = [];

    }
    else {
        noteObj = JSON.parse(notes);

    }

    notesObj.splice(index, 1);
    localStorage.setItem("notes", JSON.stringify(notesObj));
    showNotes();
}


let search = document.getElementById("searchtxt");
search.addEventListener("input",function(){

    let inputVal = search.value.toLowerCase();
    console.log(`input event fired!`,inputVal);
    let noteCards = document.getElementsByClassName('noteCard');
    Array.from(noteCards).forEach(function(element){
       let cardtxt = element.getElementsByTagName("p")[0].innerText;
       cardtxt = cardtxt.toLowerCase();
       console.log(cardtxt);
       if(cardtxt.includes(inputVal))
       {
           element.style.display = "block";
       }
       else
       {
            element.style.display = "none ";
            
       }
    })
})