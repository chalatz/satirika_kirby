<article class="module teaser">
    <a class="teaser-title" href="<?php echo $poem->url() ?>">
        <?php echo $poem->title()->html() ?>
    </a>
    <p class="teaser-body">
        <?php echo $poem->text()->kirbytext() ?>
    </p>
    <a href="" class="teaser-category">
        Κατηγορία
    </a>
</article>
