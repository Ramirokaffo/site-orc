
<Header id="app-header">
    <div class="yoonu-logo" id="yoonu-logo">
        <a href="/"><img src="<?= base_url('file/image/YOONU_LOGO.png'); ?>" alt=""></a>

    </div>

    <div class="uk-margin" uk-margin>
        <div class="uk-inline">
            <button class="uk-button uk-button-default" type="button"><span uk-icon="menu"></span></button>
            <div uk-dropdown="animation: slide-top; animate-out: true; duration: 700">
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-nav-header"><img src="<?= base_url('file/image/YOONU_LOGO.png'); ?>" alt=""></li>
                    <li class="uk-nav-divider"></li>
                    <li><?= anchor('/', 'Accueil') ?> </li>
                    <li><?= anchor('/', 'Associations') ?> </li>
                    <li><?= anchor('/', 'Évènements') ?> </li>
                    <li><?= anchor('/', 'Jobs') ?> </li>
                    <li><?= anchor('/', 'À Propos') ?> </li>
                    <li><?= anchor('/', 'Contacts') ?> </li>
                    <li class="uk-nav-divider"></li>
                    <div class="empty-space"></div>
                    <div class="add-org-button2"><?= anchor('osc/create/1/none/0', 'Enregistrer une Organisation') ?></div>
                </ul>
            </div>
        </div>
    </div>



    <nav class="nav-section">
        <label for="nav-mobile" class="nav-mobile">&#9776;</label>
        <input type="checkbox" id="nav-mobile" />
        <ul class="header-titles" , id="header-titles">
            <div class="yoonu-logo2">
                <a href="/"><img src="<?= base_url('file/image/YOONU_LOGO.png'); ?>" alt=""></a>
            </div>
            <li><?= anchor('/', 'Accueil') ?> </li>
            <li><?= anchor('/', 'Associations') ?> </li>
            <li><?= anchor('/', 'Évènements') ?> </li>
            <li><?= anchor('/', 'Jobs') ?> </li>
            <li><?= anchor('/', 'À Propos') ?> </li>
            <li><?= anchor('/', 'Contacts') ?> </li>
            <div class="empty-space"></div>
            <!-- <div class="add-org-button2"><?= anchor('osc/create/1/none/0', 'Enregistrer une Organisation') ?></div> -->
        </ul>
    </nav>
    <div class="add-org-button"><?= anchor('osc/create/1/none/0', 'Enregistrer une Organisation') ?></div>
</Header>