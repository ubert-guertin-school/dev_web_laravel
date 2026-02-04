<x-achat-layout>
        <a class="backtop fas fa-arrow-up" href="#"></a>

        <x-achat-header />

        <x-achat-navbar />

        <section class="inner-section checkout-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="account-card">
                            <h4 class="account-title">Votre panier</h4>
                            <div class="account-content">

                                    <form method="POST" action="#">
                                        <div class="row">
                                            <div class="table-scroll">
                                                <table class="table-list">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Produit</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prix unitaire</th>
                                                            <th scope="col">Quantité</th>
                                                            <th scope="col">Total</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="table-image">
                                                                <img class="cart-product-image"
                                                                    src="assets/images/produits/image-non-disponible.jpg"
                                                                    alt="product">
                                                            </td>
                                                            <td class="table-name">
                                                                <h6>Produit 1</h6>
                                                            </td>
                                                            <td class="table-price">
                                                                <h6>6,99 $</h6>
                                                            </td>
                                                            <td class="table-quantity">
                                                                <input class="product-quantity" type="number"
                                                                    name="quantites[]" value="1"
                                                                    min="0" max="99" />
                                                            </td>
                                                            <td class="table-price">
                                                                <h6>6,99 $
                                                                </h6>
                                                            </td>
                                                            <td class="table-action">
                                                                <a title="Voir détail"
                                                                    href="#"
                                                                    class="view product-view-click">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <a class="trash"
                                                                    href="#"
                                                                    title="Supprimer du panier">
                                                                    <i class="icofont-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="table-image">
                                                                <img class="cart-product-image"
                                                                    src="assets/images/produits/image-non-disponible.jpg"
                                                                    alt="product">
                                                            </td>
                                                            <td class="table-name">
                                                                <h6>Produit 2</h6>
                                                            </td>
                                                            <td class="table-price">
                                                                <h6>16,99 $</h6>
                                                            </td>
                                                            <td class="table-quantity">
                                                                <input class="product-quantity" type="number"
                                                                    name="quantites[]" value="3"
                                                                    min="0" max="99" />
                                                            </td>
                                                            <td class="table-price">
                                                                <h6>50,97 $
                                                                </h6>
                                                            </td>
                                                            <td class="table-action">
                                                                <a title="Voir détail"
                                                                    href="#"
                                                                    class="view product-view-click">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <a class="trash"
                                                                    href="#"
                                                                    title="Supprimer du panier">
                                                                    <i class="icofont-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="standard-action-group cart-btn">
                                                <button class="form-btn-group btn-update" name="action" value="rafraichir"
                                                    type="submit">
                                                    <i class="fas fa-arrows-rotate"></i>
                                                    Mettre à jour
                                                </button>
                                                <button class="form-btn-group btn-clear" name="action" value="vider"
                                                    type="submit">
                                                    <i class="icofont-trash"></i>
                                                    Vider le panier
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- <div class="alert alert-info">Votre panier est vide</div> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="account-card">
                            <h4 class="account-title">Sommaire</h4>
                            <div class="account-content">
                                <div class="checkout-charge">
                                    <ul id="summary">
                                        <li>
                                            <span>Sous-total</span>
                                            <span>57,96 $</span>
                                        </li>
                                        <li>
                                            <span>TPS</span>
                                            <span>2,90 $</span>
                                        </li>
                                        <li>
                                            <span>TVQ</span>
                                            <span>6,07 $</span>
                                        </li>
                                    </ul>
                                    <form action="#">
                                        <button type="submit" class="cart-checkout-btn">
                                            <span class="checkout-label">Commander</span>
                                            <span class="checkout-price">66,92&nbsp;$</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="product-view">
            <div class="modal-dialog">
                <div id="product-modal-content" class="modal-content">

                </div>
            </div>
        </div>



        <x-achat-footer />

        <script defer src="{{ asset('js/customs/cart.js') }}"></script>

    </body>
</html>
</x-achat-layout>
