<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <?php echo $site->pageNum() ?>

        <section role="main" class="content-container">
            <h1 class="title">
                Τελευταία Ποιήματα
            </h1>
            <?php $poems = page('poems')->children()->sortBy('date', 'desc', 'time', 'desc')->limit($site->frontPageNum()->int()) ?>
            <?php foreach($poems as $poem): ?>
                <?php snippet('poem-teaser', ['poem' => $poem]) ?>
            <?php endforeach ?>
        </section>

        <?php snippet('footer') ?>

    </body>
</html>
