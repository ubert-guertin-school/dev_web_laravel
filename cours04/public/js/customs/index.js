let cartes = document.querySelectorAll(".product-view");
cartes.forEach(carte => {
    carte.addEventListener("click", e => {
        e.preventDefault();

        const href = e.target.href;

        console.log(href);

        let modale = document.querySelector("#product-modal-content");

        axios.get(href)
            .then(reponse => {
                console.log(reponse);
                modale.innerHTML = reponse.data;
            })

            .catch(erreur => {
                console.log(erreur);
            });
    });
});

function handleCategoryClick(checkbox) {
    if(checkbox.id !== "") {
        window.location.href = `/?categories=${checkbox.id}`;
    } else {
        window.location.href = "/";
    }
}
