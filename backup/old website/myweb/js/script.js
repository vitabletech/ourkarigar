$(document).ready(function() {
// Start when document will be ready.
$("#login_button").click(function() {
var email = $("#email").val(); // Store E-mail input value in the variable email.
var password = $("#password").val(); // Store Password input value in the variable password.
/* Check if email=formget@gmail.com and password=fugo then,Show the message Account Validated!!! in the Div having id message.*/
if (email == "username" && password == "password") {
$("#message").html("Account Validated!!!");
}
/* If E-mail and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
else {
$("#login").effect("shake");
$("#message").html('***Invalid email or password***');
}
});
});