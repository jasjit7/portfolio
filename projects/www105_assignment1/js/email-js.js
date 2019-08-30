/*

To avoid getting the spam, we removed the e-mail id from HTML and instead created a bitton with Id="my-text" and a onclick function is assigned to it. 

On clicking the button, the Javascript will open the email.

The email id can be changed or updated from the javascript file by changing the link.

*/

function sendMail() {
    var link = "mailto:vanillajsbakery@example.com"
             + "&subject=" + escape("This is my subject")
             + "&body=" + escape(document.getElementById('myText').value)
    ;

    window.location.href = link;
};