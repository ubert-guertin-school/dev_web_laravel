//https://ifpb.github.io/javascript-guide/packages/form/jquery-mask-plugin/
$(document).ready(() => {
  $('.txtPhone').mask('000-000-0000', { placeholder: '___-___-____' });
  $('.txtPostalCode').mask('ZXZ XZX', { placeholder: '___-___', translation: { Z: { pattern: /[A-Za-z]/ }, X: { pattern: /[0-9]/ } } });

  $('.txtPostalCode').keyup(function () {
    $(this).val($(this).val().toUpperCase());
  });

  const registerForms = document.querySelectorAll('.needs-validation-register');

  addValidationToForm(registerForms);
  
});


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
