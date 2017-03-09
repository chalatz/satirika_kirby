<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container teasers">

            <?php if($results->count()): ?>

                <h1 class="title">Αποτελέσματα για: <span class="given-search-query"><?php echo esc($results->query()) ?></span></h1>

                <?php foreach($results as $result): ?>
                    <?php $poem = page($result->id()) ?>
                    <?php snippet('poem-teaser', ['poem' => $poem]) ?>
                <?php endforeach ?>

                <?php if($pagination->hasPages()): ?>
                    <?php snippet('pagination', ['pagination' => $pagination]) ?>
                <?php endif ?>

            <?php else: ?>

                <h1 class="title">Αποτελέσματα Αναζήτησης</h1>

                <p class="not-found">
                    Δε βρέθηκαν ποιήματα για την αναζήτησή σας.
                </p>

            <?php endif ?>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
