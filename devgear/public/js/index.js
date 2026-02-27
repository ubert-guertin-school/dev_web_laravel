document.querySelectorAll('.card .btn-details')
    .forEach(element => {
        element.addEventListener('click', e => {
            e.preventDefault();

            const modale = document.querySelector('#productModal .modal-content');
            modale.innerHTML = "En chargement...";

            const href = e.currentTarget.href; // Nous donne l'URL à contacter
            axios.get(href)
                .then(reponse => { modale.innerHTML = reponse.data })
                .catch(error => { console.error(error) });

        });
    });
