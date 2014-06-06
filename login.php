<?php

$get = array(
  'gw_address' => '192.168.1.1',
  'gw_port' => 2060,
  'gw_id' => 'none',
);

$get_diff = array_diff_key($get, $_GET);

if (!empty($get_diff)) {
  if (isset($_GET['url'])) {
    header('Location: ' . $_GET['url'], true, 302);
  } else {
    header('Location: http://no2bio.org/', true, 302);
  }
  return;
}

$get['gw_address'] = preg_replace('|[^0-9\.]|', '', $_GET['gw_address']);
$get['gw_port'] = intval($_GET['gw_port']);
$get['gw_id'] = preg_replace('|[^a-z0-9]|i', '', $_GET['gw_id']);

if (isset($_GET['url'])) {
  $get['url'] = $_GET['url'];
}




