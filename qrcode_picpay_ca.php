<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

/*
 * Só é possível gerar qrcode picpay para cobranças em aberto (status = 0)
 * O ID da cobrança pode ser obtido no endpoint /boletos/index?json
 */

$cobranca = 235781;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->get("/picpay/qrcode/$cobranca?json");
echo 'Response:' . "\n";
var_dump($curl->response);

/*
 * Para consultar se o pagamento foi aprovado, utilizar método POST passando o campo consulta => true
 *
 * Retorno:
 * pago => false, pagamento não efetuado
 * pago => true, pagamento efetuado
 */

$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->post("/picpay/qrcode/$cobranca?json", ['consulta' => true]);
echo 'Response:' . "\n";
var_dump($curl->response);

