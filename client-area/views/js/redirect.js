function redirectToLogin() {
  const url = './login.php';
  window.location.href = url;
}

document.getElementById('btn-login').addEventListener('click', redirectToLogin);


function redirectToIndex() {
  const url = './index.php';
  window.location.href = url;
}

document.getElementsByClassName('logo-area')[0].addEventListener('click', redirectToIndex);
