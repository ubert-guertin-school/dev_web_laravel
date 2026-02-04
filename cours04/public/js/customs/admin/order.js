$(document).ready(() => {
  $('#cboStatus').change(async function () {
    const newStatus = $(this).val();
    console.log(newStatus);

    const frmChangeStatus = document.getElementById('frmChangeStatus');
    frmChangeStatus.submit();
  });
});
