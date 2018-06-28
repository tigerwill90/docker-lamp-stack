<?php
  $m = new Memcached();
  $m->addServer('localhost', 11211);

  $reponse = $m->get('msg');
  if (isset($response)) {
    echo 'Cached msg : ' . $response;
  } else {
    $m->set('msg', 'memcached is working');
    echo 'Msg setted';
  }
