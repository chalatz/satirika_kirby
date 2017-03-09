<?php snippet('svgs') ?>

<header class="site-header">

    <div class="site-logo">
        <a href="<?php echo url('/') ?>" class="site-icon">
            <svg class="icon icon-quill"><use xlink:href="#icon-quill"></use></svg>
        </a>
        <a href="<?php echo url('/') ?>" class="site-title">
            <?php echo $site->title() ?>
        </a>
    </div>

    <div class="site-slogan">
        <div class="symbol symbol-first">✍</div>
        <div class="author-name">
            <?php echo $site->author() ?>
        </div>
    </div>

    <nav class="site-nav">
        <a href="<?php echo url('/') ?>" class="menu-item">Αρχική</a>
        <a href="<?php echo url('poems') ?>" class="menu-item">Ποιήματα</a>
        <a href="<?php echo url('bio') ?>" class="menu-item">Βιογραφικό</a>
        <a href="<?php echo url('contact') ?>" class="menu-item">Επικοινωνία</a>
    </nav>

    <?php snippet('search') ?>

</header>
