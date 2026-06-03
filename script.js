// Grab the toggle button links from the DOM
const signUpButton = document.getElementById('goToSignUp');
const signInButton = document.getElementById('goToSignIn');

// Grab the form container wrappers
const signInForm = document.getElementById('signInForm');
const signUpForm = document.getElementById('signUpForm');

// When user clicks "Create Account"
signUpButton.addEventListener('click', function(e) {
    e.preventDefault(); // Prevents page reload since it's an <a> tag
    signInForm.style.display = "none";  // Hide Login Form
    signUpForm.style.display = "block"; // Show Register Form
});

// When user clicks "Login Here"
signInButton.addEventListener('click', function(e) {
    e.preventDefault(); // Prevents page reload since it's an <a> tag
    signInForm.style.display = "block"; // Show Login Form
    signUpForm.style.display = "none";  // Hide Register Form
});