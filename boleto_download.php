<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->get('/boletos/imprimir/formato:pdf/id:41214');
echo 'Response:' . "\n";
var_dump(base64_encode($curl->response));
