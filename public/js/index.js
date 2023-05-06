function readMore(){
  let btn = document.getElementById("about-desc");
  let myParagraph = document.getElementById("myparagraph")
  btn.addEventListener('click' , function(){
      
    myParagraph.classList.toggle('d-none')
  })
}


// function addRow() {
//   var table = document.getElementById("myTable");
//   var newRow = table.insertRow(table.rows.length);
//   var cell1 = newRow.insertCell(0);
//   var cell2 = newRow.insertCell(1);
//   var cell3 = newRow.insertCell(2);
//   cell1.innerHTML = " Treatmeant";
//   cell2.innerHTML = " Repetation  ";
//   cell3.innerHTML = " Notes";
// }
// function addRow() {
//   // Get table reference
//   var table = document.getElementById("myTable");

//   // Create a new row and cells
//   var row = table.insertRow(-1); // -1 to insert at the end
//   var nameCell = row.insertCell(0);
//   var ageCell = row.insertCell(1);

//   // Set cell values
//   nameCell.innerHTML = `input type="text" class="form-control" placeholder="Enter Repetation" />`;
//   ageCell.innerHTML = "New Age";
// }

function addRow() {

  var input = document.createElement("input");
  
  // Set input element attributes
  input.type = "text";
  input.className ="form-control" 
  input.placeholder = "Enter a value";

// Append input element to the container element
document.getElementById("myTable").append(input);

}


