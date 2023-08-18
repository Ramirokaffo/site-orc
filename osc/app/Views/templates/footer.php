<Footer>
    <div class="footer-content">
        <div class="footer-content-left">
            <img src="<?= base_url('file/image/yoonu_logo_frg_whhite.png'); ?>" alt="">
            <h5>Nous assurons la présence en ligne des Organismes de la socitété Civile</h5>
        </div>
        <div class="footer-content-center">
            <h3>Liens</h3>
            <ul type="none">
                <li><?= anchor('/', 'Accueil') ?> </li>
                <li><?= anchor('/', 'Associations') ?> </li>
                <li><?= anchor('/', 'Évènements') ?> </li>
                <li><?= anchor('/', 'Jobs') ?> </li>
                <li><?= anchor('/', 'À Propos') ?> </li>
                <li><?= anchor('/', 'Contacts') ?> </li>
            </ul>
        </div>
        <div class="footer-content-right">
            <h3>Newsletter</h3>
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input" type="text" aria-label="Not clickable icon">
                    <a id="uk-form-icon-right" class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: arrow-right"></a>
                </div>
                <!-- <h6>Envoyer -></h6> -->
            <div class="subscribe-mail2">
            <?= anchor('/', 'Envoyer ->') ?>
            </div>
            <p>Enregistrez-vous pour avoir nos mises à jours</p>

            </div>
        </div>
    </div>
    <div class="copy-right">
        <hr>
        <em>YOONU &copy; 2023. Tous droits réservés</em>

    </div>
</Footer>