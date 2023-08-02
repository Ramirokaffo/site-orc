<Header>
        <div class="yoonu-logo">
        <img src="<?= base_url('file/image/YOONU_LOGO.png'); ?>" alt="">

        </div>
        <ul class="header-titles">
            <li><?= anchor('/', 'Accueil') ?> </li>
            <li><?= anchor('news', 'Associations') ?> </li>
            <li><?= anchor('news', 'Évènements') ?> </li>
            <li><?= anchor('news', 'Jobs') ?> </li>
            <li><?= anchor('news', 'À Propos') ?> </li>
            <li><?= anchor('news', 'Contacts') ?> </li>

            <!-- <li> </li> -->

        </ul>
        <div class="add-org-button"><?= anchor('osc/create/1', 'Enregistrer une Organisation') ?></div>
</Header>