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
                <nav class="pagination">

                  <?php if($pagination->hasNextPage()): ?>
                      <a class="next" href="<?php echo $pagination->nextPageURL() ?>">Επόμενο</a>
                  <?php endif ?>

                  <?php if($pagination->hasPrevPage()): ?>
                  <a class="prev" href="<?php echo $pagination->prevPageURL() ?>">Προηγούμενο</a>
                  <?php endif ?>

                </nav>
            <?php endif ?>


        </section>

        <?php snippet('footer') ?>

    </body>
</html>
