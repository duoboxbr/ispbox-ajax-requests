<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
// URL /clientes/centraL_assiante/ID_DO_CLIENTE?json
$curl->post('/clientes/central_assinante/',[
    'cliente_id' => '123', // id do cliente,
    'senha' => 'teste123' // senha a ser configurada para a central
]);
echo 'Response:' . "\n";
var_dump($curl->response);
