<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

            <article class="bio-page">

                <h1 class="title">
                    <?php echo $page->title() ?>
                </h1>

                <div class="bio-section bio-info">
                    <?php echo $page->text()->kirbytext() ?>
                </div>

                <div class="bio-section bio-image">

                    <?php if($image = $page->image('photo.jpg')): ?>

                        <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" />

                    <?php endif ?>

                </div>

            </article>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
