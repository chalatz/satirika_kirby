<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container teasers">

            <h1 class="title">Αποτελέσματα για: <span class="given-search-query"><?php echo $query ?></span></h1>

            <?php if($results->count() == 0): ?>

                <p class="not-found">
                    Δε βρέθηκαν ποιήματα για την αναζήτησή σας.
                </p>

            <?php else: ?>

                <?php foreach($results as $poem): ?>
                    <?php snippet('poem-teaser', ['poem' => $poem]) ?>
                <?php endforeach ?>

            <?php endif ?>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
