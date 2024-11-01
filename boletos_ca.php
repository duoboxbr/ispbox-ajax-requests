<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->get('/boletos/index?json');
// no json de resposta os boletos em aberto vem com o link_download
// este link_download retorna o arquivo pdf
// caso queira o base64 do pdf use a mesma url mas adicionando /formato:pdf-base64 no final dela
// exemplo de url retornada - download do pdf:
// https://central.demo-dev.ispbox.com.br/boletos/imprimir/id:295947/auth:15aeed34ca898982a1f45cedd6ab6d46
// exemplo da url para retornar o base64 do pdf:
// https://central.demo-dev.ispbox.com.br/boletos/imprimir/id:295947/auth:15aeed34ca898982a1f45cedd6ab6d46/formato:pdf-base64
echo 'Response:' . "\n";
var_dump($curl->response);
