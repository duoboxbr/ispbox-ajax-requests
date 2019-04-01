<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
/*
 * /atendimentos/visualizar/ID_PROTOCOLO?json
 * ex: /atendimentos/visualizar/55?json
 * ou
 * /atendimentos/visualizar/ANO_PROTOCOLO/NUMERO_PROTOCOLO
 * /atendimentos/visualizar/2019/334
 */
$curl->get('/atendimentos/visualizar/55?json');
echo 'Response:' . "\n";
var_dump($curl->response);
