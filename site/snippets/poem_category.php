<section class="poem-category">
    <?php foreach($page->tags()->split() as $tag): ?>
        <a class="poem-category-item" href="<?php echo $page->get_category_url($tag) ?>">
            <?php echo $tag ?>
        </a>
    <?php endforeach ?>
</section>
