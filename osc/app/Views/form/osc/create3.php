<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Localisation de votre organisation</h4>
<?= form_open("osc/create/$step") ?>

<?= validation_list_errors() ?>

<div class="form-n3">
    <?= csrf_field() ?>
    <h6>Pays</h6>
    <input type="text" name="country" value='<?= esc(get_cookie("country")); ?>' id="country" placeholder="Entrer le nom du pays">
    <h6>Ville</h6>
    <input type="text" name="city" value='<?= esc(get_cookie("city")); ?>' id="city" placeholder="Ville où vous êtes situés">
    <h6>Adresse complet</h6>
    <input type="text" name="location" value='<?= esc(get_cookie("location")); ?>' id="location" placeholder="Ex: Cameroun - yaoundé - Bonas">
    <div class="form-nav-btn-div">
        <div>
            <!-- <button class="prev-button-n2">Precedent</button> -->
            <button class="prev-button-n2"><a href="/osc/create/2">Précédent</a></button>
        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>