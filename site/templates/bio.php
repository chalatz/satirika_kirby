<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

            <h1 class="title">
                <?php echo $page->title() ?>
            </h1>

            <article class="info">
                <?php echo $page->text()->kirbytext() ?>
            </article>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
