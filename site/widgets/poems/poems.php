<?php

return array(
  'title' => 'Ποιήματα',
  'options' => array(
    array(
      'text' => 'Λίστα',
      'icon' => 'book',
      'link' => 'pages/poems/edit',
    )
  ),
  'html' => function() {
    return tpl::load(__DIR__ . DS . 'poems.html.php');
  }
);
