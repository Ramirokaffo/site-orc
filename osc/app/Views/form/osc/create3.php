<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Localisation de votre organisation</h4>
<?= form_open("osc/create/3/$oscId/0") ?>

<?= validation_list_errors() ?>

<div class="form-n3">
    <?= csrf_field() ?>
    <h6>Pays</h6>
    <?php
$options = array(
    'Algérie' => 'Algérie',
    'Angola' => 'Angola',
    'Bénin' => 'Bénin',
    'Botswana' => 'Botswana',
    'Burkina Faso' => 'Burkina Faso',
    'Burundi' => 'Burundi',
    'Cabo Verde' => 'Cabo Verde',
    'Cameroun' => 'Cameroun',
    'République centrafricaine' => 'République centrafricaine',
    'Tchad' => 'Tchad',
    'Comores' => 'Comores',
    'République du Congo' => 'République du Congo',
    'République démocratique du Congo' => 'République démocratique du Congo',
    'Côte d\'Ivoire' => 'Côte d\'Ivoire',
    'Djibouti' => 'Djibouti',
    'Égypte' => 'Égypte',
    'Érythrée' => 'Érythrée',
    'Éthiopie' => 'Éthiopie',
    'Gabon' => 'Gabon',
    'Gambie' => 'Gambie',
    'Ghana' => 'Ghana',
    'Guinée' => 'Guinée',
    'Guinée-Bissau' => 'Guinée-Bissau',
    'Guinée équatoriale' => 'Guinée équatoriale',
    'Kenya' => 'Kenya',
    'Lesotho' => 'Lesotho',
    'Libéria' => 'Libéria',
    'Libye' => 'Libye',
    'Madagascar' => 'Madagascar',
    'Malawi' => 'Malawi',
    'Mali' => 'Mali',
    'Mauritanie' => 'Mauritanie',
    'Maurice' => 'Maurice',
    'Maroc' => 'Maroc',
    'Mozambique' => 'Mozambique',
    'Namibie' => 'Namibie',
    'Niger' => 'Niger',
    'Nigeria' => 'Nigeria',
    'Ouganda' => 'Ouganda',
    'Rwanda' => 'Rwanda',
    'Sao Tomé-et-Principe' => 'Sao Tomé-et-Principe',
    'Sénégal' => 'Sénégal',
    'Seychelles' => 'Seychelles',
    'Sierra Leone' => 'Sierra Leone',
    'Somalie' => 'Somalie',
    'Afrique du Sud' => 'Afrique du Sud',
    'Soudan' => 'Soudan',
    'Soudan du Sud' => 'Soudan du Sud',
    'Eswatini' => 'Eswatini',
    'Tanzanie' => 'Tanzanie',
    'Togo' => 'Togo',
    'Tunisie' => 'Tunisie',
    'Ouganda' => 'Ouganda',
    'Zambie' => 'Zambie',
    'Zimbabwe' => 'Zimbabwe',
  );
    $attributes = [
        'id'    => 'country',
        'class' => 'country_select',
    ];
    if (get_cookie("country")) {
        $default = esc(get_cookie("country"));
    } else {
        $default = "Cameroun";
    }
    echo form_dropdown('country', $options, $default, $attributes);
    ?>
    <h6>Ville</h6>
    <input type="text" name="city" value='<?= esc(get_cookie("city")); ?>' id="city" placeholder="Ville où vous êtes situés">
    <h6>Adresse complet</h6>
    <input type="text" name="location" value='<?= esc(get_cookie("location")); ?>' id="location" placeholder="Ex: Cameroun - yaoundé - Bonas">
    <div class="form-nav-btn-div">
        <div>
            <button class="prev-button-n2"><a href="/osc/create/2/<?= esc($oscId) ?>/1">Précédent</a></button>
        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>