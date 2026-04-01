document.querySelectorAll(".card .btn-details").forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        let modale = document.querySelector("#productModal .modal-content");
        modale.innerHTML = "En chargement...";
        const href = event.currentTarget.href;
        axios
            .get(href)
            .then((response) => {
                modale.innerHTML = response.data;
            })
            .catch((error) => {
                modale.innerHTML = "Erreur de chargement";
            });
    });
});
