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
        </div>

        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">

            <thead>
                <tr>
                    <th class="uk-table-shrink"></th>
                    <th class="uk-width-small">Nom complet</th>
                    <th class="uk-table-expand">Username</th>
                    <th class="uk-table-shrink uk-text-nowrap">Adresse mail</th>
                    <th class="uk-table-shrink uk-text-nowrap">Téléphone</th>
                    <th class="uk-table-shrink uk-text-nowrap">CreateAt</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($users as $key => $user) { ?>

                    <tr class=<?= $key % 2 == 1 ? "odd" : 'even' ?>>
                        <td><input class="uk-checkbox" type="checkbox" aria-label="Checkbox"></td>
                        <td class="uk-text-truncate"><?= esc($user["fullname"]) ?></td>
                        <td class="uk-table-link">
                            <a class="uk-link-reset" href="#"><?= esc($user["username"]) ?></a>
                        </td>
                        <td class="uk-text-nowrap"><?= esc($user["email"]) ?></td>
                        <td class="uk-text-nowrap"><?= $user["phoneNumber"] ?></td>
                        <td class="uk-text-nowrap"><?= $user["created_at"] ?></td>
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