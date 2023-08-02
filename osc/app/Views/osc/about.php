<div class="one-osc-about-tab-content">
    <p class="one-osc-about-tab-content-desc">La description d'une Organisme de la société civile</p>
    <div class="one-osc-about-tab-content-bloc">
        <h3>NOS INFORMATIONS LÉGALES</h3>
        <div class="tab-content-bloc-start-line"></div>
        <div class="one-line-osc-details">
            <p class="details-title">Nom</p>
            <p class="details-value"><?= esc($osc["name"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Année de création</p>
            <p class="details-value"><?= esc($osc["creationDate"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Catégorie</p>
            <p class="details-value"><?= esc($osc["category_name"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Domaine</p>
            <p class="details-value"><?= esc($osc["domain_name"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Slogan</p>
            <p class="details-value">//</p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Site web</p>
            <p class="details-value"><a href="#"><?= esc($osc["webSite"]) ?></a></p>
        </div>

    </div>

    <div class="one-osc-about-tab-content-bloc">
        <h3>CONTACTS ET LOCALISATION</h3>
        <div class="tab-content-bloc-start-line"></div>
        <div class="one-line-osc-details">
            <p class="details-title">Numero de téléphone 1</p>
            <p class="details-value"><?= esc($osc["phoneNumber1"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Numéro de téléphone 2</p>
            <p class="details-value"><?= esc($osc["phoneNumber2"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Adresse mail</p>
            <p class="details-value"><?= esc($osc["email"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Localisation</p>
            <p class="details-value"><?= esc($osc["location"]) ?></p>
        </div>

    </div>
</div>