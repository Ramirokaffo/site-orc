<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="home-head" style="background-image: url('<?= base_url('file/image/banniere_acceuil.png'); ?>');">



    <h1>Découvrez les Organisations de la Société Civile</h1>

    <form class="search-section" action="" method="get">
        <input placeholder="Rechercher une organisation"></input>
        <button type="submit">
            <span class="uk-margin-small-right" uk-icon="search"></span>

        </button>
    </form>
</div>

<div class="home-body">
    <section class="home-body-left">
        <form class="search-section" action="/search" method="get">
            <input type="text" name="searchInput" placeholder="Rechercher" value="<?= $miniSearchInput ?>">
            <button type="submit">
                <!-- <a href="" class="uk-icon-link" uk-icon="heart"></a> -->
                <span class="uk-margin-small-right" uk-icon="search"></span>
                <!-- <a href="" uk-icon="heart"></a> -->
            </button>
        </form>
        <div class="osc-category">
            <h2>Catégories</h2>
            <div class="start-line"></div>

            <?php if (!empty($categories) && is_array($categories)) : ?>

                <?php foreach ($categories as $category) : ?>

                    <h3><?= anchor("oscByCategory/".$category["id"], $category['name']) ?></h3>

                <?php endforeach ?>

            <?php else : ?>

                <h3>Aucune categorie trouvé</h3>

            <?php endif ?>
        </div>

        <div class="osc-domain">
            <h2>Domaines</h2>
            <div class="start-line"></div>
            <?php if (!empty($domains) && is_array($domains)) : ?>

                <?php foreach ($domains as $domain) : ?>

                    <h3><?= anchor("oscByDm/".$domain['id'], $domain['name']) ?></h3>

                <?php endforeach ?>

            <?php else : ?>

                <h3>Aucunn Domaine correspondant trouvé</h3>

            <?php endif ?>
        </div>
    </section>
    <section class="home-body-right">
        <!-- <div class="osc-sort">
            <div class="uk-margin" uk-margin>
                <div class="uk-inline">
                    <button class="uk-button uk-button-default" type="button">Reveal Top</button>
                    <div uk-dropdown="animation: reveal-top; animate-out: true; duration: 700">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <ul type="none">

            <?php if (!empty($reclamations) && is_array($reclamations)) : ?>

                <?php foreach ($reclamations as $reclamation) : ?>

                    <a href="/osc/<?= esc($reclamation['id']) ?>">
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
                                                <?= esc($reclamation['country']) ?> .
                                                <?= esc($reclamation['city']) ?> .
                                                <?= esc($reclamation['category_name']) ?>
                                            </p>
                                        </div>
                                        <div class="osc-title">
                                            <b> <?= esc($reclamation['name']) ?></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </li>
                    </a>
                <?php endforeach ?>

            <?php else : ?>

                <h3>Aucune reclamation</h3>

            <?php endif ?>

        </ul>

    </section>

</div>
<?= $this->endSection() ?>