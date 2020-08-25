<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_telefonia/editar',[
    'id' => 1,
    'sip_login' => 'bla',
    'sip_senha' => 'teste2'
]);
echo 'Response:' . "\n";
var_dump($curl->response);
