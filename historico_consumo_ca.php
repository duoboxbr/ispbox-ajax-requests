<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->ca_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->ca_login, $conf->ca_senha);
$curl->post('/relatorios/franquia_dados',[
    'data_consulta' => '03/2019', // mês e ano de consulta
    //'id' => '1234' // caso o cliente tenha mais de um serviço voce pode informar a id do serviço aqui, se não especificar um o sistema mostra o com ID menor
]);
echo 'Response:' . "\n";
var_dump($curl->response);
