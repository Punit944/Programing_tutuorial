

//Construtor
function Book(title, author, type) {
    this.title = title;
    this.author = author;
    this.type = type;

}

//Display Constructor
function Display(){

}

//Add methods to displa prototype

// Add submit event libraryform

let libraryform = document.getElementById("libraryform");
libraryform.addEventListener('submit',libraryFormSubmit);

function libraryFormSubmit(e){
    e.preventDefault();
    console.log("You have submitted library form");
    let title = document.getElementById('bookName').value;
    let author = document.getElementById('Author').value;
  
    
    let book = new Book(title, author, type);



}