<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->get('/clientes/recuperar_senha/login:06658641676?json');
echo 'Response:' . "\n";
$info_recupera = $curl->response;
var_dump($info_recupera);

$curl->post('/clientes/recuperar_senha?json',[
    'tipo_login' => $info_recupera->tipo_login,
    'login' => $info_recupera->login,
    'celular' => '33999147681'
]);
var_dump($curl->response);