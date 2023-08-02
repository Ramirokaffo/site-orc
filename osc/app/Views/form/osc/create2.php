<?= $this->extend('form/osc/base-form') ?>
<?= helper('cookie');?>

<?= $this->section('form-step') ?>
<?= $this->include('form/osc/form-step') ?>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<h4>Contacts de l'organisation</h4>

<?= form_open("osc/create/$step") ?>

<?= validation_list_errors() ?>

<div class="form-n2">
    <?= csrf_field() ?>
    <h6>Numero de téléphone 1</h6>
    <input type="text" name="phoneNumber1" value='<?= esc(get_cookie("phoneNumber1")); ?>' required id="phoneNumber1" placeholder="+0000 000 000 000">
    <h6>Numero de téléphone 2</h6>
    <input type="text" name="phoneNumber2" value='<?= esc(get_cookie("phoneNumber2")); ?>' id="phoneNumber2" placeholder="+0000 000 000 000">
    <h6>Lien du site Web</h6>
    <input type="text" name="webSite" value='<?= esc(get_cookie("webSite")); ?>' id="webSite" placeholder="Ex: www.acje.org">
    <h6>Adresse mail</h6>
    <input type="text" name="oscEmail" value='<?= esc(get_cookie("oscEmail")); ?>' id="oscEmail" placeholder="Ex: name.@gmail.com">
    <div class="form-nav-btn-div">
        <div>
        <!-- <a href="javascript:history.go(-1);" class="prev-button-n2">Précédent -->
            <!-- </a> -->
            <button class="prev-button-n2"><a href="/osc/create/1"; ?>Précédent</a></button>

        </div>
        <div>
            <button type="submit" class="submit-button-n2">Suivant</button>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>