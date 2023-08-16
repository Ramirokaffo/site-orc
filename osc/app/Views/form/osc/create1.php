<?= $this->extend('form/osc/base-form') ?>
<?= helper('cookie'); ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Informations sur l'organisation</h4>
<?= form_open("osc/create/1/$oscId/0") ?>

<?= validation_list_errors() ?>

<div class="form-n1">
    <?= csrf_field() ?>
    <h6>Nom de l'organisation</h6>
    <input type="text" name="name" value='<?= esc(get_cookie("name")) ?>' id="name" required placeholder="Entrer le nom de l'organisation ici">
    <h6>Matricule</h6>
    <input type="text" name="matricule" value='<?= esc(get_cookie("matricule")) ?>' id="matricule" placeholder="Entrer le matricule de l'organisation ici">
    <h6>Année de création</h6>
    <input type="text" name="creationDate" value='<?= esc(get_cookie("creationDate")) ?>' id="creationDate" placeholder="Ex: 2002" />
    <div class="category-domain-field">
        <div>
            <h6>Catégorie</h6>
            <select name="category" id="category" required>
                <?php if (!empty($categories) && is_array($categories)) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <?php if (esc($category["name"]) == esc(get_cookie("category"))) { ?>
                            <option selected value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
                        <?php } else { ?>
                            <option value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
                        <?php } ?>
                    <?php endforeach ?>
                <?php else : ?>
                <?php endif ?>
            </select>
        </div>
        <div>
            <h6>Domaine</h6>
            <select name="domain" id="domain">
                <?php if (!empty($domains) && is_array($domains)) : ?>
                    <?php foreach ($domains as $domain) : ?>
                        <?php if (esc($domain["name"]) == esc(get_cookie("domain"))) { ?>
                            <option selected value="<?= $domain["id"] ?>"><?= $domain["name"] ?></option>
                        <?php } else { ?>
                            <option value="<?= $domain["id"] ?>"><?= $domain["name"] ?></option>
                        <?php } ?>
                    <?php endforeach ?>
                <?php else : ?>
                <?php endif ?>
            </select>
        </div>
    </div>
    <button type="submit" class="submit-button-n1">Suivant</button>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>