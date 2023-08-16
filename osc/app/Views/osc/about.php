<div class="one-osc-about-tab-content">
    <p class="one-osc-about-tab-content-desc"><?= esc($osc["description"]) ?></p>
    <div class="reclamation-action-zone">
        <h6>Cette Association vous appartient ?</h6>
        <?= anchor('/osc/create/1/' . $osc["id"] . "/0", 'Réclamer') ?>
    </div>
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
            <p class="details-value"><?= esc($osc["slogan"]) ?></p>
        </div>
        <div class="one-line-osc-details">
            <p class="details-title">Site web</p>
            <p class="details-value"><a href="https://<?= esc($osc["webSite"]) ?>"><?= esc($osc["webSite"]) ?></a></p>
        </div>

    </div>

    <div class="one-osc-about-tab-content-bloc">
        <h3>CONTACTS ET LOCALISATION</h3>
        <div class="tab-content-bloc-start-line"></div>

        <?php if (!empty($osc["phones"]) && is_array($osc["phones"])) : ?>

            <?php foreach ($osc["phones"] as $index => $phone) : ?>
                <div class="one-line-osc-details">
                    <p class="details-title">Numero de téléphone <?= $index + 1 ?></p>
                    <p class="details-value"><?= esc($phone["value"]) ?></p>
                </div>
            <?php endforeach ?>
        <?php endif ?>
        <?php if (!empty($osc["phones"]) && is_array($osc["phones"])) : ?>
            <?php foreach ($osc["emails"] as $index => $email) : ?>
                <div class="one-line-osc-details">
                    <p class="details-title">Adresse mail <?= $index + 1 ?></p>
                    <p class="details-value"><?= esc($email["value"]) ?></p>
                </div>
            <?php endforeach ?>
        <?php endif ?>
        <div class="one-line-osc-details">
            <p class="details-title">Localisation</p>
            <p class="details-value"><?= esc($osc["location"]) ?></p>
        </div>

    </div>
</div>