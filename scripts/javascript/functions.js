/* This .js file contains functions that have been used in order to check if the users have properly
inserted information while compiling different forms, SweetAlert2 has been used in order to provide an
explanation of different errors */

// This function checks if the login form is valid
function validLoginForm() {
    var password = document.getElementById("password").value;

    if (password.length < 6) {
        Swal.fire("ERROR", "Too short password.", "error");
        return false;
    }
}

// This function checks if the registration form is valid
function validRegistrationForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm-password").value;

    if(username.match('/^[a-zA-Z0-9_]+$/') != null){
        Swal.fire("ERROR", "Username can only contain letters, numbers, and underscores.", "error");
        return false;
    } 

    if (password.length < 6) {
        Swal.fire("ERROR", "Password must have at least 6 characters.", "error");
        return false;
    }

    if(password != confirm_password) {
        Swal.fire("ERROR", "Passwords not match.", "error");
        return false;
    }
}

// This function checks if the review form is valid
function validReviewForm(){
    var message = document.getElementById("comment-area").value;

    if(message.length == 0){
        Swal.fire("ERROR", "Please insert a comment.", "error");
        return false;
    }else if(message.length < 10){
        Swal.fire("INFO", "Too short comment.", "info");
        return false;
    } else if(message.length > 1000){
        Swal.fire("INFO", "Too long comment.", "info");
        return false;
    }
}