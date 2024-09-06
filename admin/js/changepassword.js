const passwordFields = [
    { password: document.getElementById('oldPassword'), toggle: document.getElementById('togglePassword1') },
    { password: document.getElementById('newPassword'), toggle: document.getElementById('togglePassword2') },
    { password: document.getElementById('confirmPassword'), toggle: document.getElementById('togglePassword3') }
  ];
  
  passwordFields.forEach(({ password, toggle }) => {
    toggle.addEventListener('click', function () {
      const type = password.type === 'password' ? 'text' : 'password';
      password.type = type;
  
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  });