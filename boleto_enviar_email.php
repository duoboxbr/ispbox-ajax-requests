<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->post('/boletos/enviar_email',[
    'id' => 62,
    'prioridade' => 0
]);
echo 'Response:' . "\n";
var_dump($curl->response);
