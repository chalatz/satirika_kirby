<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

            <article class="module poem">
                <div class="poem-title">
                    <?php echo $page->title()->html() ?>
                </div>
                <?php snippet('poem_category') ?>
                    <div class="poem-body-container">
                        <div class="poem-body">
                            <?php echo $page->text()->kirbytext() ?>
                        </div>
                    </div>
            </article>

            <?php snippet('poems_nav') ?>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
