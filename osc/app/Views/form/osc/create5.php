<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Informations personnelles</h4>
<?= form_open("/osc/create/5/$oscId/0") ?>

<?= validation_list_errors() ?>

<div class="form-n5">
    <?= csrf_field() ?>
    <h6>Noms et prénoms</h6>
    <input type="text" name="fullname" id="fullname" value='<?= esc(get_cookie("fullname")); ?>' required placeholder="Entrez vos noms">
    <h6>Votre Fonction</h6>
    <input type="text" name="position" id="position" value='<?= esc(get_cookie("position")); ?>' placeholder="Le poste que vous occupez">
    <h6>Votre adresse mail</h6>
    <input type="email" name="email" id="email" value='<?= esc(get_cookie("email")); ?>' required placeholder="Ex: name@sample.com">
    <div class="form-nav-btn-div">
        <div>
        <button class="prev-button-n2"><a href="/osc/create/4/<?= esc($oscId) ?>/1">Précédent</a></button>
        <!-- <button class="prev-button-n2" onclick="javascript:history.go(-1);">Precedant</button> -->
        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>