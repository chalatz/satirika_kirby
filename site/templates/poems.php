<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

            <?php foreach($page->children() as $poem): ?>
                <?php snippet('poem-teaser', ['poem' => $poem]) ?>
            <?php endforeach ?>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
