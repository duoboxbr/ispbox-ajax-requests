<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes/index',[
    'servico_internet' => 1, // retorna somente os resultados com serviço de Internet ou telefone ativo
    'email' => 'email@hotmail.com'
]);
echo 'Response:' . "\n";
var_dump($curl->response);
