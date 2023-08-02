<?php helper('html'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <?= link_tag("style.css"); ?>
</head>

<body>

    <?= $this->include('templates/header') ?>
    <div class="form-banner">
        <div class="form-banner-img">
            <img src="<?= base_url('file/image/frg5.jpg'); ?>" alt="">
        </div>
        <div class="banner-cover">
            <h2>Formulaire d'enregistrement</h2>
            <div class="banner-cover-center">
                <?= $this->renderSection('form-step') ?>

                <div class="form-content">
                    <?= $this->renderSection('form-content') ?>

                </div>
            </div>
<?= $this->include('templates/footer') ?>

        </div>

    </div>

</body>

</html>