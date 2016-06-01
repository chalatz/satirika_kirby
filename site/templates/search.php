<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

            <ul>
                <?php foreach($results as $result): ?>
                <li>
                  <a href="<?php echo $result->url() ?>">
                    <?php echo $result->title()->html() ?>
                  </a>
                </li>
                <?php endforeach ?>
            </ul>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
