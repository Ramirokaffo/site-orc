<?php helper('html'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag("css/uikit.css"); ?>
    <?= script_tag("js/uikit.js"); ?>
    <?= script_tag("js/uikit-icons.min.js"); ?>
    <?= link_tag("dashboard/style.css"); ?>
    <?= link_tag("dashboard/osc.css"); ?>
    <?= script_tag("script.js"); ?>
    <?= script_tag("dashboard/script.js"); ?>
    <meta name="author" content="RAMIRO KAFFO" />
    <meta name="copyright" content="RAMIRO KAFFO" />
    <meta name="description" content="Ceci est un site internet d'une annuaire des Organismes de la société civile" />
    <link rel="icon" href="<?= base_url('file/image/yoonu_logo_frg_whhite.png'); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:url" content='<?= esc(current_url()) ?>' />
    <meta property="og:image" content="<?= base_url('file/image/YOONU_LOGO.png'); ?>" />
    <meta property="og:image:secure_url" content="<?= base_url('file/image/YOONU_LOGO.png'); ?>" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
</head>

<body>
    <div class="super-body-div">
        <div class="super-left-body">
        <?= $this->include('dashboard/sidebar') ?>
        </div>
        <div class="super-right-body">
            <?= $this->include('dashboard/header') ?>
            <div class="main-content">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
    <?= $this->include('dashboard/footer') ?>
</body>

</html>