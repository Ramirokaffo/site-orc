<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Géolocalisation de votre Organisation</h4>
<?= form_open("osc/create/4/$oscId/0") ?>

<?= validation_list_errors() ?>

<div class="form-n4">
    <?= csrf_field() ?>
    <p class="geoloc-alert">Vous devez être au siège de votre organisation pour obtenir ces coordonées</p>
    <button type="button" class="get-geoloc-button" id="geolocation-btn">Obtenir mes coordonnées GPS</button>
    <input type="text" name="long" id="longitude-input" style="display: none;">
    <input type="text" name="lat" id="latitude-input" style="display: none;">
    <p id="geoloc-label"></p>
    <div class="form-nav-btn-div">
        <div>
        <button class="prev-button-n2"><a href="/osc/create/3/<?= esc($oscId) ?>/1">Précédent</a></button>
        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>