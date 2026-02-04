$(document).ready(() => {
  // $('.txtPhone').mask('000-000-0000', { placeholder: '___-___-____' });
  // $('.txtPostalCode').mask('ZXZ XZX', { placeholder: '___-___', translation: { Z: { pattern: /[A-Za-z]/ }, X: { pattern: /[0-9]/ } } });

  // $('.txtPostalCode').keyup(function () {
  //   $(this).val($(this).val().toUpperCase());
  // });

  const categoriesForms = document.querySelectorAll('.needs-validation-categories');

  addValidationToForm(categoriesForms);
  
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

const addFormToCollection = (e) => {
    const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
  
    const item = document.createElement('li');
  
    item.innerHTML = collectionHolder
      .dataset
      .prototype
      .replace(
        /__name__/g,
        collectionHolder.dataset.index
      );
  
    collectionHolder.appendChild(item);
  
    collectionHolder.dataset.index++;
  };

document
    .querySelectorAll('.add_item_link')
    .forEach(btn => {
        btn.addEventListener("click", addFormToCollection)
    });