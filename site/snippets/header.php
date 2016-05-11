<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-quill" viewBox="0 0 32 32">
            <title>quill</title>
            <path class="path1" d="M12 18.333c0 0 6.373-3.824 9.961-2.313 0.744-1.133 1.477-2.354 2.194-3.601-3.51-0.86-8.155-0.086-8.155-0.086s5.944-3.566 9.583-2.45c0.73-1.316 1.439-2.614 2.124-3.822-2.899-0.196-5.707 0.272-5.707 0.272s3.723-2.234 7.081-2.612c1.056-1.714 2.037-3.059 2.919-3.721-17.531 0-28 20-32 32h2l6-10c0 0 2 2 8 0 1.421-0.474 2.842-1.789 4.237-3.56-3.519-0.892-8.237-0.106-8.237-0.106z"></path>
        </symbol>
    </defs>
</svg>

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
        <a href="<?php echo url('contact') ?>" class="menu-item">Επικοινωνία</a>
    </nav>

</header>
