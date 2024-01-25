const login = document.getElementById('cancel');
const signup = document.getElementById('signUp');
const loginForm = document.getElementById('userLoginForm');
const signupForm = document.getElementById('usersignupForm');

signupForm.style.display="none";

signup.addEventListener("click", up);

function up(e) {
  e.preventDefault();
  console.log('Sign Up');
signupForm.style.display="flex";
loginForm.style.display="none";
}