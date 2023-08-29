<?= $this->extend('dashboard/base') ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="super-statistic-div">
        <div class="statistic-div">
            <div>
                <h2>Utilisateurs</h2>
            <p class="semi-line1"></p>
                <h3>56</h3>
                <h4>Pendant les 30 derniers jours</h4>
            </div>
            <div>
                <h2>Organisations</h2>
                <p class="semi-line2"></p>
                <h3><?= esc($allOscCount) ?></h3>
                <h4>Pendant les 30 derniers jours</h4>
            </div>
            <div>
                <h2>Réclamations</h2>
                <p class="semi-line3"></p>
                <h3>12</h3>
                <h4>Pendant les 30 derniers jours</h4>
            </div>
        </div>
        <hr>
    </div>
</div>

<?= $this->endSection() ?>