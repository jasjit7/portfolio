/*
Attempted form validation using jquery but its not validating, only submitting the form even if the fields are empty
*/


$(document).ready(function() {

  $('#contact_form').submit(function(e) {
    e.preventDefault();
    var name = $('#username').val();
    var email = $('#email').val();

    $(".error").remove();

    if (name.length < 1) {
      $('#username').after('<span class="error">This field is required</span>');
    }
    
    if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid email</span>');
      }
    }
    
  });
});