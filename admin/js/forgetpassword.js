 const togglePassword = document.getElementById('togglePassword');
 const password = document.getElementById('password');

 togglePassword.addEventListener('click', function () {
     const type = password.type === 'password' ? 'text' : 'password';
     password.type = type;
     
     this.classList.toggle('fa-eye');
     this.classList.toggle('fa-eye-slash');
 });