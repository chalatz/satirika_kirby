<footer class="prev-next-poem">

    <?php if($page->hasPrev()): ?>
        <a title="Προηγούμενο Ποίημα" href="<?php echo $page->prev()->url() ?>" class="poems-nav prev-poem">
            <span class="nav-arrow">☜</span>
        </a>
    <?php endif ?>

    <?php if($page->hasNext()): ?>
        <a title="Επόμενο Ποίημα" href="<?php echo $page->next()->url() ?>" class="poems-nav next-poem">
            <span class="nav-arrow">☞</span>
        </a>
    <?php endif ?>

</footer>
