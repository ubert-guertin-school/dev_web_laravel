$(document).ready(() => {
    $(".product-view-click").click(async (event) => {
        event.preventDefault();
        
        console.log(event);
        const href = event.currentTarget.href;
        const response = await axios.get(href);
        if(response.status === 200) {
            $("#product-modal-content").html(response.data);
            const productViewModal = new bootstrap.Modal(document.getElementById('product-view'), {});
            productViewModal.show();
        }         
    });
})