<?= $this->extend('dashboard/base') ?>

<?= $this->section('content') ?>
<div class="content">


    <div class="uk-overflow-auto">
    <div class="osc-header">

        <div class="uk-margin">
            <form class="uk-search uk-search-default" action="/dashbor/search/osc" method="get" id="dashbord-osc-search-form">
                <a href="" id="dashbord-osc-search" class="uk-search-icon-flip" uk-search-icon></a>
                <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!-- <a href="" uk-icon="icon: trash"></a> -->
        </div>

        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">

            <thead>
                <tr>
                    <th class="uk-table-shrink"></th>
                    <th class="uk-table-shrink">Logo</th>
                    <th class="uk-table-expand">Nom</th>
                    <th class="uk-width-small">Création</th>
                    <th class="uk-table-shrink uk-text-nowrap">Catégorie</th>
                    <th class="uk-table-shrink uk-text-nowrap">Vérifiée</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($oscs as $key => $osc) { ?>

                    <tr class=<?= $key % 2 == 1 ? "odd" : 'even' ?>>
                        <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                        <td><img class="uk-preserve-width uk-border-circle" src=<?= esc($osc["logo"]) ?> width="40" height="40" alt=""></td>
                        <td class="uk-table-link">
                            <a class="uk-link-reset" href="#"><?= esc($osc["name"]) ?></a>
                        </td>
                        <td class="uk-text-truncate"><?= esc($osc["creationDate"]) ?></td>
                        <td class="uk-text-nowrap"><?= esc($osc["category_name"]) ?></td>
                        <td class="uk-text-nowrap"><?= $osc["isVerify"] == 1 ? "Oui" : "Non" ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <div class="pagination-area">
            <?= $pager->links() ?>
        </div>
    </div>


</div>

<?= $this->endSection() ?>