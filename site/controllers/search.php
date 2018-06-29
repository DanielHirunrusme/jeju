<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->index()->visible()->search($query);

  return array(
    'query'      => $query,
    'results'    => $results
  );

};