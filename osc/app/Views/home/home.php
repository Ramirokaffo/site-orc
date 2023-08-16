<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="home-head" style="background-image: url('<?= base_url('file/image/banniere_acceuil.png'); ?>');">



    <h1>Découvrez les Organisations de la Société Civile</h1>

    <form class="search-section" action="/search" method="get">
        <input placeholder="Rechercher une organisation" name="searchInput" value="<?= $searchInput ?>"></input>
        <button type="submit">
            <span class="uk-margin-small-right" uk-icon="search"></span>

        </button>
    </form>
</div>

<div class="home-body">
    <section class="home-body-left">
        <form class="search-section" action="/search" method="get">
            <input type="text" name="miniSearchInput" placeholder="Rechercher" value="<?= $miniSearchInput ?>">
            <button type="submit">
                <span class="uk-margin-small-right" uk-icon="search"></span>
            </button>
        </form>
        <div class="osc-category">
            <h2>Catégories</h2>
            <div class="start-line"></div>

            <?php if (!empty($categories) && is_array($categories)) : ?>

                <?php foreach ($categories as $category) : ?>

                    <h3><?= anchor("/oscByCategory/" . $category["id"], $category['name']) ?></h3>

                <?php endforeach ?>

            <?php else : ?>

                <p class="no-categoryor-domain">Aucune categorie trouvée</p>

            <?php endif ?>
        </div>

        <div class="osc-domain">
            <h2>Domaines</h2>
            <div class="start-line"></div>
            <?php if (!empty($domains) && is_array($domains)) : ?>

                <?php foreach ($domains as $domain) : ?>

                    <h3><?= anchor("/oscByDm/" . $domain['id'], $domain['name']) ?></h3>

                <?php endforeach ?>

            <?php else : ?>

                <p class="no-categoryor-domain">Aucun Domaine correspondant trouvé</p>

            <?php endif ?>
        </div>
    </section>
    <section class="home-body-right">

        <?php if (!empty($oscs) && is_array($oscs)) : ?>

            <?php foreach ($oscs as $osc) : ?>

                <a href="/osc/<?= esc($osc['id']) ?>">
                    <li class="one-osc">
                        <div>
                            <div class="osc-logo-container">
                                <div class="osc-logo" style="background-image: url('<?= base_url('file/image/frg7.jpg'); ?>')">
                                </div>
                            </div>
                            <div class="osc-right">
                                <div>
                                    <div class="osc-header">
                                        <p>
                                            <?= esc($osc['country']) ?> .
                                            <?= esc($osc['city']) ?> .
                                            <?= esc($osc['category_name']) ?>
                                        </p>
                                    </div>
                                    <div class="osc-title">
                                        <b> <?= esc($osc['name']) ?></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </li>
                </a>
            <?php endforeach ?>

        <?php else : ?>
            <p class="no-osc-to-show">Aucune organisation à afficher</p>
        <?php endif ?>
        </ul>
    </section>
</div>
<?= $this->endSection() ?>