<nav class="navbar" role="navigation" aria-label="main navigation">
    <!-- logo + menu burger -->
    <div class="navbar-brand">
        <a href="" class="navbar-item">
            <img src="" alt="">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="nav-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
    </div>
    <div class="navbar-menu" id="nav-menu">
        <a href="" class="navbar-item is-white">Accueil</a>
        <a href="#" class="navbar-item">Product Owner</a>
        <a href="#" class="navbar-item">Webmaster</a>
        <a href="#" class="navbar-item">Communication digitale</a>
        <a href="#" class="navbar-item">Développement durable</a>
        <a href="" class="navbar-item">Blog</a>

        <div class="navbar-end">
            <div class="navbar-item">
                @auth
                <div class="buttons">
                    <a href="#" class="button is-primary">Accéder au backoffice</a>
                    <a 
                        href=""
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        class="button is-light"
                    >
                        <span>Se déconnecter</span>
                        <form id="logout-form" action="" method="post">
                            {{ csrfField() }}
                        </form>
                    </a>
                </div>
                @endauth

                @guest
                <div class="buttons">
                    <a href="" class="button is-light">Créer un compte</a>
                    <a href="" class="button is-primary">Se connecter</a>
                </div>
                
                @endguest
            </div> <!-- navbar-item -->
        </div> <!-- navbar-end -->
    </div>
</nav>