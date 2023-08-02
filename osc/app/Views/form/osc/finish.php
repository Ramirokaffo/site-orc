
<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<div class="form-step-finish"></div>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<div class="form-finish-content">
    <div class="finish-check-icon" style="background-image: url('<?= base_url('file/image/green-check-icon.png'); ?>');">
    
    </div>
    <h4>Merci pour l'enregistrement</h4>
    <p>Votre organisation est membre de YOONU</p>
    <div class="finish-button"><?= anchor('/', 'Continuer la Navigation') ?></div>
    
    
</div>
<?= $this->endSection() ?>