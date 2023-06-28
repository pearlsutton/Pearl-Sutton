/** 

function validateForm(event) {
    let myForm = document.querySelector("#frmFeedback");
 
    myForm.txtFirstName.style.backgroundColor = "lightGreen";
    myForm.txtLastName.style.backgroundColor = "LightGreen";
    myForm.txtEmail.style.backgroundColor = "LightGreen";
    myForm.txtSubject.style.backgroundColor = "LightGreen";
    myForm.txtComments.style.backgroundColor = "LightGreen";
    
 
   if ((myForm.txtFirstName.value === "") || !isNaN(document.getElementById("txtFirstName").value)) {
      myForm.txtFirstName.style.backgroundColor = "pink";
   }    
 
   if ((myForm.txtLastName.value === "") || !isNaN(document.getElementById("txtLastName").value))  {
      myForm.txtLastName.style.backgroundColor = "pink";
   }

   if ((myForm.txtEmail.value === "") || !isNaN(document.getElementById("txtEmail").value)) {
      myForm.txtEmail.style.backgroundColor = "pink";
   }

   if ((myForm.txtSubject.value === "") || !isNaN(document.getElementById("txtSubject").value))  {
      myForm.txtSubject.style.backgroundColor = "pink";
   }

   if ((myForm.txtComments.value === "") || !isNaN(document.getElementById("txtComments").value))  {
      myForm.txtComments.style.backgroundColor = "pink";
   }
 }
 
 myForm = document.querySelector("#frmFeedback");
 myForm.btnSubmit.addEventListener("click", validateForm);

*/
 