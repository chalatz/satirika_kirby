<nav class="pagination">

  <?php if($pagination->hasPrevPage()): ?>
      <a class="pagination-nav-item previous-page" href="<?php echo $pagination->prevPageURL() ?>">
          &larr; Προηγούμενη Σελίδα
      </a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
      <a class="pagination-nav-item next-page" href="<?php echo $pagination->nextPageURL() ?>">
          Επόμενη Σελίδα &rarr;
      </a>
  <?php endif ?>

</nav>
