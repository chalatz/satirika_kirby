<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container teasers">

            <h1 class="title">
                Τελευταία Ποιήματα
            </h1>

            <?php $poems = page('poems')->children()->sortBy('date', 'desc', 'time', 'desc')->limit($site->frontPageNum()->int()) ?>

            <?php foreach($poems as $poem): ?>
                <?php snippet('poem-teaser', ['poem' => $poem]) ?>
            <?php endforeach ?>

            <a href="<?php echo url('poems') ?>" class="all-poems-link">
                Όλα τα ποιήματα &rarr;
            </a>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
