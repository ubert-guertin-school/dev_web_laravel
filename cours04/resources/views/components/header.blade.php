<header class="header-part">
    <div class="container">
        <div class="header-content">

            <a href="#" class="header-logo">
                <img src="{{ asset('images/brand/01.jpg') }}" alt="logo" />
            </a>
            <div class="header-widget header-name">Mon projet</div>

            <a href="#" data-bs-toggle="modal" data-bs-target="#modalLoginForm" class="header-widget header-account"
                title="S'inscrire">
                <img src="{{ asset('images/user.png') }}" alt="user" />
                <span>S'inscrire</span>
            </a>

            <form class="header-form" method="GET" action="/">
                <input
                    type="text"
                    placeholder="Rechercher ..."
                    name="recherche"
                />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <div class="header-widget-group">
                <a href="panier.html" class="header-widget header-cart" title="Panier">
                    <i class="fas fa-shopping-basket"></i>
                    <sup>0</sup>
                    <span>
                        Total
                        <small> 0,00 $ </small>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="login-view">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">
                            Connexion
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
