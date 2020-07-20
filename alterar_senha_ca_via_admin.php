<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
// URL /clientes/centraL_assiante/ID_DO_CLIENTE?json
$curl->post('/clientes_internet/alterar_senha_central_assinante',[
    'tipo_login' => 'CPF', // se for PJ usar CNPJ
    'login' => $conf->ca_login, // CPF ou CNPJ do cliente sem pontuação, apenas números
    'senha' => 'blabla' // senha a ser configurada para a central
]);
echo 'Response:' . "\n";
var_dump($curl->response);
