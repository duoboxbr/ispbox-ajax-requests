<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_cobrancas/liquidar',[
    'id' => 6296, //id da cobrança/boleto
    'valor_pago' => '1.123,45', // string
    'data_pagamento' => '15/09/2023',
    'forma_recebimento' => 5, // 5 - cartão de débito - para listar consule formas_recebimento.php
    'gerar_recibo' => 0
]);
echo 'Response:' . "\n";
var_dump($curl->response);

