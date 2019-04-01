<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_internet/franquia_dados',[
    'id' => '2954', // id do serviço,
    'data_consulta' => '03/2019' // mês e ano de consulta
]);
echo 'Response:' . "\n";
var_dump($curl->response);
