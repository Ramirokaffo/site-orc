<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Géolocalisation de votre Organisation</h4>
<?= form_open("osc/create/$step") ?>

<?= validation_list_errors() ?>

<div class="form-n4">
    <?= csrf_field() ?>
    <p class="geoloc-alert">Vous devez être au siège de votre organisation pour obtenir ses coordonées</p>
    <button class="get-geoloc-button">Obtenir mes coordonnées GPS</button>
    <div class="form-nav-btn-div">
        <div>
        <!-- <button class="prev-button-n2" >Precedent</button> -->
        <button class="prev-button-n2"><a href="/osc/create/3">Précédent</a></button>
        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>