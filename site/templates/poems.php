<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container teasers">
            
            <h1 class="title"><?php echo $page->title() ?></h1>

            <?php $the_poems = $page->children()->sortBy('date', 'desc', 'time', 'desc')->paginate(3) ?>

            <?php foreach($the_poems as $poem): ?>
                <?php snippet('poem-teaser', ['poem' => $poem]) ?>
            <?php endforeach ?>

            <?php if($the_poems->pagination()->hasPages()): ?>
                <nav class="pagination">

                  <?php if($the_poems->pagination()->hasNextPage()): ?>
                      <a class="next" href="<?php echo $the_poems->pagination()->nextPageURL() ?>">Επόμενο</a>
                  <?php endif ?>

                  <?php if($the_poems->pagination()->hasPrevPage()): ?>
                  <a class="prev" href="<?php echo $the_poems->pagination()->prevPageURL() ?>">Προηγούμενο</a>
                  <?php endif ?>

                </nav>
            <?php endif ?>


        </section>

        <?php snippet('footer') ?>

    </body>
</html>
