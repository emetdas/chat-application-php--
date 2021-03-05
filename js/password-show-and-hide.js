const passwordInput = document.getElementById('password');
const showIcon = document.querySelector('.fa-key');
showIcon.addEventListener('click',()=>{
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showIcon.classList.add('fa-eye-slash');
        showIcon.classList.remove('fa-key');
      } else {
        passwordInput.type = "password";
        showIcon.classList.add('fa-key');
        showIcon.classList.remove('fa-eye-slash');
      }
})