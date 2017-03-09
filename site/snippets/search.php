<form class="site-search" action="<?php echo page('search')->url() ?>">
  <input class="site-search-input" method="post" type="search" name="q" value="<?php echo (isset($results) ? esc($results->query()) : "" )  ?>" placeholder="Όρος αναζήτησης...">
  <button type="submit" class="site-search-button">
    <svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>
    Αναζήτηση
  </button>
</form>

<section class="algolia-logo-container">
  <span class="algolia-powered-by-text">αναζήτηση από</span> 
  <a href="https://www.algolia.com">
    <svg class="algolia-logo"><use xlink:href="#algolia-logo"></use></svg>
  </a>
</section>
