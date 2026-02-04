$(document).ready(() => {

    const loginForm = document.querySelectorAll('.user-form');
  
    addValidationToForm(loginForm);
})

function addValidationToForm(forms) {
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      });
  }