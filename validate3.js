
/** Validate First Name */
function validateFirstName(event) {
   let firstName = document.getElementById("txtFirstName").value;
   let text;
   let myForm = document.querySelector("#frmFeedback");

   if (firstName === "") {
      text = "First name field is required.";
      myForm.txtFirstName.style.borderColor = "red";
      myForm.txtFirstName.style.backgroundColor = "pink";
   }
   else if (!isNaN(firstName)) {
      text ="First name field is invalid!";
      let myForm = document.querySelector("#frmFeedback");
      myForm.txtFirstName.style.borderColor = "red";
      myForm.txtFirstName.style.backgroundColor = "pink";
    } 
   else {
     text = "Valid.";
     let myForm = document.querySelector("#frmFeedback");
     myForm.txtFirstName.style.borderColor = "green";
     myForm.txtFirstName.style.backgroundColor = "lightGreen";
   }
   document.getElementById("response1").innerHTML = text;
 }

 /** Validate Last Name */
function validateLastName() {
   let lastName = document.getElementById("txtLastName").value;
   let text;
   let myForm = document.querySelector("#frmFeedback");
   if (lastName === "") {
      text = "Last name field is required.";
      myForm.txtLastName.style.borderColor = "red";
      myForm.txtLastName.style.backgroundColor = "pink";
   }
   else if (!isNaN(lastName)) {
      text ="Last name field is invalid!";
      myForm.txtLastName.style.borderColor = "red";
      myForm.txtLastName.style.backgroundColor = "pink";
    } 
   else {
     text = "Valid.";
     myForm.txtLastName.style.borderColor = "green";
     myForm.txtLastName.style.backgroundColor = "lightGreen";
   }
   document.getElementById("response2").innerHTML = text;
 }

/** Validate Email */
function validateEmail() {
   let email = document.getElementById("txtEmail").value;
   let text;
   let myForm = document.querySelector("#frmFeedback");
   let symbols = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if (email === "") {
      text = "Email field is required.";
      myForm.txtEmail.style.borderColor = "red";
      myForm.txtEmail.style.backgroundColor = "pink";
   }
   else if (!email.match(symbols)) {
      text ="Email field is invalid!";
      myForm.txtEmail.style.borderColor = "red";
      myForm.txtEmail.style.backgroundColor = "pink";
    } 
   else {
     text = "Valid.";
     myForm.txtEmail.style.borderColor = "green";
     myForm.txtEmail.style.backgroundColor = "lightGreen";
   }
   document.getElementById("response3").innerHTML = text;
 }

/** Validate Subject */
function validateSubject() {
   let subject = document.getElementById("txtSubject").value;
   let text;
   let myForm = document.querySelector("#frmFeedback");
   if (subject === "") {
      text = "Subject field is required.";
      myForm.txtSubject.style.borderColor = "red";
      myForm.txtSubject.style.backgroundColor = "pink";
   }
   else if (!isNaN(subject)) {
      text ="Subject field is invalid!";
      myForm.txtSubject.style.borderColor = "red";
      myForm.txtSubject.style.backgroundColor = "pink";
    } 
   else {
     text = "Valid.";
     myForm.txtSubject.style.borderColor = "green";
     myForm.txtSubject.style.backgroundColor = "lightGreen";
   }
   document.getElementById("response4").innerHTML = text;
 }

 /** Validate Message */
function validateMessage() {
   let message = document.getElementById("txtComments").value;
   let text;
   let myForm = document.querySelector("#frmFeedback");
   if (message === "") {
      text = "Message field is required.";
      myForm.txtComments.style.borderColor = "red";
      myForm.txtComments.style.backgroundColor = "pink";
   }
   else if (!isNaN(message)) {
      text ="Message field is invalid!";
      myForm.txtComments.style.borderColor = "red";
      myForm.txtComments.style.backgroundColor = "pink";
    } 
   else {
     text = "Valid.";
     myForm.txtComments.style.borderColor = "green";
     myForm.txtComments.style.backgroundColor = "lightGreen";
   }
   document.getElementById("response5").innerHTML = text;
 }


/** Validate Radio Butons */
function validateVisit() {
   let yes = document.getElementById("#radVisitYes");
   let neutral = document.getElementById("#radVisitNeutral");
   let no = document.getElementById("#radVisitnNo");
   let text;

   if (!yes.checked && !neutral.checked && !no.checked) {
      text = "Check at least one option.";
      let myForm = document.querySelector("#frmFeedback");
      myForm.txtComments.style.borderColor = "red";
   }
   else {
      text = "Valid.";
      let myForm = document.querySelector("#frmFeedback");
      myForm.txtComments.style.borderColor = "lightGreen";
   }
   document.getElementById("response6").innerHTML = text;
 }


function checkForm(event) {
   // Cancel form submission if any input is invalid
   if (document.getElementById("response1").innerHTML != "Valid." || 
   document.getElementById("response2").innerHTML != "Valid." ||
   document.getElementById("response3").innerHTML != "Valid." ||
   document.getElementById("response4").innerHTML != "Valid." ||
   document.getElementById("response5").innerHTML != "Valid.") {
      event.preventDefault();
   }
}

// let form = document.querySelector("#frmFeedback");
myForm.addEventListener("submit", checkForm);
