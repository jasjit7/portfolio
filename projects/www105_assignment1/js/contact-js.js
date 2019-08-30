//The form validation - It is working, but sometimes it needs to be refreshed. I couldn't figure out why it is behaving like that when we click on the submit button.

const nameInput = document.getElementById("name");
//Id is assignet to name and email form-groups.
const emailInput = document.getElementById("email");

const nameError = document.getElementById("name-hint");
//spam tag is created with name/email-hint in HTML to display the message on the webpage
const emailError = document.getElementById("email-hint");

let errors = 0;  // These are errors the user makes when filling out the form.

document.getElementById("myform").onsubmit = function(){
	// Test if the name field is empty.  Use .value to pull out what the user has typed in.
	
	if(nameInput.value === ""){
		errors = errors + 1;  // errors++
		nameInput.style.border = "10px solid skyblue";
		nameInput.style.boxShadow = "0 0 5px navy";
		nameError.innerHTML = "Please enter your Name";
		
	}else{
		nameInput.style.border = "1px solid skyblue";
		nameInput.style.boxShadow = "none";
		nameError.innerHTML = "Nice!";		
	}
	// TEST if email field is empty
		if(emailInput.value === ""){
		errors = errors + 1;  // errors++
		emailInput.style.border = "10px solid skyblue";
		emailInput.style.boxShadow = "0 0 5px navy";
		emailError.innerHTML = "Please enter your email.";
		
	}else{
		emailInput.style.border = "1px solid skyblue";
		emailInput.style.boxShadow = "none";
		emailError.innerHTML = "Nice!";	
	}
	if(errors>0){
		return false;  // If there are any errors, do not submit the form.
	}else{
		alert("Good job!!");
	}
};


/*
I tried to do both the Javascript functions within the same javascript file, but anyhow it was not working in the same file for me. So I seperated the Email in email-js.js file
*/
//
//function sendMail() {
//    var link = "mailto:vanillajsbakery@example.com"
//             + "&subject=" + escape("This is my subject")
//             + "&body=" + escape(document.getElementById('myText').value)
//    ;
//
//    window.location.href = link;
//};