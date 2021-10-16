const passwordInput = document.getElementById('password');
const showIcon = document.querySelector('.fa-eye');
showIcon.addEventListener('click', () => {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showIcon.classList.add('fa-eye-slash');
    showIcon.classList.remove('fa-eye');
  } else {
    passwordInput.type = 'password';
    showIcon.classList.add('fa-eye');
    showIcon.classList.remove('fa-eye-slash');
  }
});
