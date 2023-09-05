<?= $this->extend('dashboard/base') ?>

<?= $this->section('content') ?>
<div class="content">


    <div class="uk-overflow-auto">
    <div class="osc-header">

        <div class="uk-margin">
            <form class="uk-search uk-search-default" action="/dashboar/search/osc" method="get" id="dashbord-osc-search-form">
                <a id="dashbord-osc-search" class="uk-search-icon-flip" uk-search-icon></a>
                <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" name="searchInput" value=<?= esc($searchInput) ?>>
            </form>
        </div>
        <!-- <a href="" uk-icon="icon: trash"></a> -->
        </div>

        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">

            <thead>
                <tr>
                    <th class="uk-table-shrink"></th>
                    <th class="uk-table-expand">Nom</th>
                    <th class="uk-width-small">Création</th>
                    <th class="uk-table-shrink uk-text-nowrap">Catégorie</th>
                    <th class="uk-table-shrink uk-text-nowrap">Adresse</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($reclamations as $key => $reclamation) { ?>

                    <tr class=<?= $key % 2 == 1 ? "odd" : 'even' ?>>
                        <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                        <td class="uk-table-link">
                            <a class="uk-link-reset" href="#"><?= esc($reclamation["name"]) ?></a>
                        </td>
                        <td class="uk-text-truncate"><?= esc($reclamation["creationDate"]) ?></td>
                        <td class="uk-text-nowrap"><?= esc($reclamation["category_name"]) ?></td>
                        <td class="uk-text-nowrap"><?= $reclamation["location"] ?></td>
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