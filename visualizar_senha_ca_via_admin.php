<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
// URL /clientes/central_assinante/ID_DO_CLIENTE?json
$curl->get('/clientes/central_assinante/3226?json');
echo 'Response:' . "\n";
var_dump($curl->response);
// se receber {erro:"1"} é porque este cliente ainda não tem o cpf/cnpj cadastrado na tabela de logins e deverá ser
// feita a chamada para criar o acesso
