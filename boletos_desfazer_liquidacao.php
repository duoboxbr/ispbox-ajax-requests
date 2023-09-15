<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_cobrancas/desfazer_liquidacao',[
    'id' => 6296, //id da cobrança/boleto
]);
echo 'Response:' . "\n";
var_dump($curl->response);

