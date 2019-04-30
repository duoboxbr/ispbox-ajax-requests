<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->post('/boletos/index?json',[ // se o cliente tiver mais de um serviço vc pode passar o id na url após o index: /boletos/index/ID_DO_SERVICO?json

]);
echo 'Response:' . "\n";
var_dump($curl->response);
