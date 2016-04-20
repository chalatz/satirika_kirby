<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">
            <?php echo $page->text()->kirbytext() ?>
        </section>

        <?php snippet('footer') ?>

    </body>
</html>
