<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('poems')->search($query, 'title|text');

  return array(
    'query'   => $query,
    'results' => $results,
  );

};
