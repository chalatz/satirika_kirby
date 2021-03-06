<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container teasers">

            <h1 class="title"><?php echo $title ?></h1>

            <?php snippet('categories_list') ?>

            <?php foreach($poems as $poem): ?>
                <?php snippet('poem-teaser', ['poem' => $poem]) ?>
            <?php endforeach ?>

            <?php if($pagination->hasPages()): ?>
                <?php snippet('pagination', ['pagination' => $pagination]) ?>
            <?php endif ?>


        </section>

        <?php snippet('footer') ?>

    </body>
</html>
