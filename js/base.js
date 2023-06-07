// const signUpButton = document.getElementById('signUp');
// const signInButton = document.getElementById('signIn');
// const container = document.getElementById('container');
//
// signUpButton.addEventListener('click', () => {
// 	container.classList.add("right-panel-active");
// });
//
// signInButton.addEventListener('click', () => {
// 	container.classList.remove("right-panel-active");
// });

const signInBtn = document.querySelector('.signin-btn');
const signUpBtn = document.querySelector('.signup-btn');
const formBox = document.querySelector('.form-box');
const body = document.body;

signInBtn.addEventListener('click', function () {
	formBox.classList.remove('active');
	body.classList.remove('active');
});

signUpBtn.addEventListener('click', function () {
	formBox.classList.add('active');
	body.classList.add('active');
});


