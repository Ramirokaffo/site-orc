
<?= $this->extend('form/osc/base-form') ?>
<?= $this->section('form-step') ?>
<div class="form-step-finish"></div>
<?= $this->endSection() ?>

<?= $this->section('form-content') ?>
<div class="form-finish-content">
    <div class="finish-check-icon" style="background-image: url('<?= base_url('file/image/green-check-icon.png'); ?>');">
    
    </div>
    <?php if ($oscId == "none") { ?>
        <h4>Merci pour l'enregistrement</h4>
    <p>Votre organisation est membre de YOONU</p>
    
    <?php }  else {?>
        <h4>Votre requête a été envoyée avec succès</h4>
    <p>Nous vous contacterons dans les plus brefs délais</p>
    <?php }  ?>


    <div class="finish-button"><?= anchor('/', 'Continuer la Navigation') ?></div>
    
    
</div>
<?= $this->endSection() ?>