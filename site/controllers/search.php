<?php

// return function($site, $pages, $page) {

//   $query   = get('q');
//   $results = page('poems')->search($query, 'title|text');

//   return array(
//     'query'   => $query,
//     'results' => $results,
//   );

// };

return function($site, $pages, $page) {

  $query = get('q');
  $page  = param('page');

  if($query) {
    $results    = algolia()->search($query, $page);
  } else {
    $results    = new Collection();
  }

  $pagination = $results->pagination();

  return compact('results', 'pagination');

};
