
let form = document.querySelector('#loginForm');

form.email.addEventListener('input', function() {
  validEmail(this);
});

form.password.addEventListener('input', function() {
  validPassword(this);
});

const validEmail = function(inputEmail) {
  let emailRegExp = new RegExp(
    '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,6}$',
    'g'
  );
  let testEmail = emailRegExp.test(inputEmail.value);
  let small = inputEmail.nextElementSibling;

  if (testEmail) {
    small.innerHTML = " <div class='bon'> Email valide </div>";
    small.classList.remove('text-danger');
    small.classList.add('text-success');
    return true;
  } else {
    small.innerHTML = " <div class='error'>Email invalide </div>";
    small.classList.remove('text-success');
    small.classList.add('text-danger');
    return false ;
  }
};

const validPassword = function(inputPassword) {
    let msg;
    let valid = false;
  
    if (inputPassword.value.length < 8) {
      msg = '<div class="error"> Le mot de passe doit contenir au moins 8 caractères </div>';
    } else if (!/[A-Z]/.test(inputPassword.value)) {
      msg = '<div class="error"> Le mot de passe doit contenir au moins 1 majuscule </div>';
    } else if (!/[a-z]/.test(inputPassword.value)) {
      msg = '<div class="error"> Le mot de passe doit contenir au moins 1 minuscule </div>';
    } else if (!/[0-9]/.test(inputPassword.value)) {
      msg = ' <div class="error">Le mot de passe doit contenir au moins 1 chiffre </div>';
    } else {
      msg = '<div class="bon"> Le mot de passe est valide </div>';
      valid = true;
    }
  
    let small = inputPassword.nextElementSibling;
  
    if (valid) {
      small.innerHTML = "Mot de passe valide";
      small.classList.remove('text-danger');
      small.classList.add('text-success');
      return true;
    } else {
      small.innerHTML = msg;
      small.classList.remove('text-success');
      small.classList.add('text-danger');
      return false;
    }
  };
  