<div class="form-banner">
    <div class="form-banner-img">
        <img src="<?= base_url('file/image/frg5.jpg'); ?>" alt="">
    </div>
    <div class="banner-cover">
        <h2>Formulaire d'enregistrement</h2>
        <div class="banner-cover-center">
            <?= $this->include('form/osc/form-step') ?>
            <div class="form-content">
                <?= $this->renderSection('form-content') ?>
            </div>
        </div>
    </div>
</div>