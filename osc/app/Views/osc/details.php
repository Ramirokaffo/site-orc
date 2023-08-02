<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div>
    <div class="one-osc-details-header">
        <div class="one-osc-details-baniere-img" style="background-image: url('<?= base_url('file/image/frg5.jpg'); ?>')">
        </div>
        <div class="one-osc-details-title">
            <div class="one-osc-details-logo" style="background-image: url('<?= base_url('file/image/frg7.jpg'); ?>')"></div>
            <h2><?= esc($osc["name"]) ?></h2>
        </div>
    </div>
</div>
<?= esc($title) ?>
<div class="one-osc-details-tap-item">
    <div>
        <div class="one-osc-selected-tab"><?= anchor('/', 'À PROPOS') ?> </div>
        <div><?= anchor('news', 'ÉVÈNEMENTS') ?></div>
        <div><?= anchor('news', 'JOBS') ?></div>
    </div>
</div>
<!-- <p style="color: black;">La page des detalis</p> -->

<?= $this->include("osc/".$tap) ?>



<?= $this->endSection() ?>