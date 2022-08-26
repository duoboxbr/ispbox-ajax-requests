<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

/*
  Informar atualizado:1 para boleto com valor atualizado
*/

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->get('/boletos/imprimir/formato:pdf/atualizado:0/id:41214');
echo 'Response:' . "\n";
var_dump(base64_encode($curl->response));



