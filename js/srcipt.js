// scripts.js

function check() {
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm_password').value;
  const message = document.getElementById('confirm_message');
  
  if (password === confirmPassword) {
      message.className = 'match';
      message.textContent = 'Passwords match';
  } else {
      message.className = 'no-match';
      message.textContent = 'Passwords do not match';
  }
}
