<!doctype html>
<html>

    <?php snippet('head') ?>

    <body>

        <?php snippet('header') ?>

        <section role="main" class="content-container">

          <article class="contact-page">

              <h1 class="title">
                  <?php echo $page->title() ?>
              </h1>

              <p>
                  <?php echo $page->name() ?>
              </p>

              <p>
                  <?php echo $page->street() ?>
              </p>

              <p>
                  <?php echo $page->postal_code() ?>, <?php echo $page->city() ?>
              </p>

              <p>
                  Τηλ: <?php echo $page->phone() ?>
              </p>

              <p>
                  Email: <?php echo $page->email() ?>
              </p>

              <p>
                  Facebook: <a href="<?php echo $page->facebook() ?>" target="_blank">
                      <?php echo $page->name() ?>
                  </a>
              </p>

          </article>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
