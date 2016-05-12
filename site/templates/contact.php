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

              <div class="contact-section contact-info">

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

              </div>

              <div class="contact-section contact-image">

                  <?php if($image = $page->image('photo.jpg')): ?>

                      <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" />

                  <?php endif ?>

              </div>

          </article>

        </section>

        <?php snippet('footer') ?>

    </body>
</html>
