

function validateForm(event) {
    let myForm = document.querySelector("#frmFeedback");
 
    myForm.txtFirstName.style.borderColor = "LightGreen";
    myForm.txtLastName.style.borderColor = "LightGreen";
    myForm.txtEmail.style.borderColor = "LightGreen";
    myForm.txtSubject.style.borderColor = "LightGreen";
    myForm.txtComments.style.borderColor = "LightGreen";
 
    if (myForm.txtFirstName.value === "") {
        myForm.txtFirstName.style.borderColor = "red";
       }    
 
   if (myForm.txtLastName.value === "") {
    myForm.txtLastName.style.borderColor = "red";
   }
 
   if (myForm.txtEmail.value === "") {
    myForm.txtEmail.style.borderColor = "red";
   }

   if (myForm.txtSubject.value === "") {
    myForm.txtSubject.style.borderColor = "red";
   }

   if (myForm.txtComments.value === "") {
    myForm.txtComments.style.borderColor = "red";
   }
 }
 
 myForm = document.querySelector("#frmFeedback");
 myForm.btnSubmit.addEventListener("click", validateForm);