<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->post('/boletos/desbloqueiotemporario',[
    'acao' => 1,
    'id' => '3411' // id do servico a ser desbloqueado
]);
echo 'Response:' . "\n";
var_dump($curl->response);
