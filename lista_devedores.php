<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/relatorios/financeiro/devedores',[
    'draw' => 1,
    'origem_tipo' => 'INTERNET',
    'tipo' => 0,
    'revendas_id' => -1,
    'vencimento_inicio' => '21/10/2024',
    'vencimento_fim' => '22/10/2024',
    'contrato_suspenso' => 1,
    'incluir_rescindidos' => 0,
    'length' => 50,
    'start' => 0,
]);
echo 'Response:' . "\n";
var_dump($curl->response);

