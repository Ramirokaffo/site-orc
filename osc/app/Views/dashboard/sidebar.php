<section class="sidebar">
    <div class="sidebar-header">
        <img src="<?= base_url('file/image/YOONU_LOGO.png'); ?>" alt="">
        <h2>Dashboard</h2>
        <div class="sidebar-content">
            <div class="sidebar-content-element" id=<?= $segment == "home"? "active-sidebar-element": "" ?>>
                <a href="/dashboar/home">
                    <div>
                        <span uk-icon="icon: home"></span>
                        Accueil
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element" id=<?= $segment == "osc"? "active-sidebar-element": "" ?>>
                <a href="/dashboar/osc">
                    <div>
                        <span uk-icon="icon: world"></span>
                        Organisations
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element" id=<?= $segment == "reclamation"? "active-sidebar-element": "" ?>>
                <a href="/dashboar/reclamation">
                    <div>
                        <span uk-icon="icon:  info"></span>
                        Réclamations
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element">
                <a href="#">
                    <div>
                        <span uk-icon="icon:  album"></span>
                        Publications
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element" id=<?= $segment == "user"? "active-sidebar-element": "" ?>>
                <a href="/dashboar/user">
                    <div>
                        <span uk-icon="icon:  users"></span>
                        Utilisateurs
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element">
                <a href="#">
                    <div>
                        <span uk-icon="icon:  nut"></span>
                        Statistiques
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
            <div class="sidebar-content-element">
                <a href="#">
                    <div>
                        <span uk-icon="icon:  settings"></span>
                        Paramètres
                    </div>
                    <span class="one-action-icon" uk-icon="icon: chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>