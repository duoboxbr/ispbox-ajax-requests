<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

/*
 * Só é possível gerar qrcode pix para cobranças em aberto (status = 0)
 * O ID da cobrança pode ser obtido no endpoint /boletos/index?json
 */

$cobranca = 235742;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->get("/pix/criar_pix/$cobranca?json");
echo 'Response:' . "\n";
var_dump($curl->response);

/*
 * Para consultar se o pagamento foi aprovado, utilizar o seguinte endpoint e método POST passando o campo consulta => true
 *
 * Retorno:
 * pago => false, pagamento não efetuado
 * pago => true, pagamento efetuado
 */

$transacaoId = 'adcaec3805aa912c0d0b14a81bedb6ff'; // Campo transacao_id retornado no endpoint anterior

$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->post("/pix/verificar_pagamento/$transacaoId?json", ['consulta' => true]);
echo 'Response:' . "\n";
var_dump($curl->response);
