<?php helper('html'); ?>
<!doctype html>
<html>

<head>
    <?= link_tag("css/uikit.css"); ?>
    <?= script_tag("js/uikit.js"); ?>
    <?= script_tag("js/uikit-icons.min.js"); ?>
    <?= link_tag("style.css"); ?>
    <title><?= esc($title) ?></title>
</head>

<body>
    <?= $this->include('templates/header') ?>
    <div class="uk-section uk-light">
        <div class="main-content">

        <?= $this->renderSection('content') ?>

        </div>
    </div> 
    <?= $this->include('templates/footer') ?>
</body>

</html>