<article class="module teaser">
     <a class="teaser-title" href="<?php echo $poem->url() ?>">
         <?php echo $poem->title()->html() ?>
     </a>
     <div class="teaser-body">
         <?php echo $poem->text()->kirbytext() ?>
     </div>
 </article>
