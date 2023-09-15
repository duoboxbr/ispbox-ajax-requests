<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes/index?json',[
    'servico_internet' => 1, // retorna somente os resultados com serviço de Internet ou telefone ativo
    'cnpj' => '13631358000164',
    'tipo_servico' => 'INTERNET',
    'revendas_id' => -1,
    'vendedor_id' => -1,
    'pontos_autenticacao_pppoe_id' => -1,
    'tipo_vencimento' => 100,
    'forma_cobranca' => 'TODOS'
]);
echo 'Response:' . "\n";
var_dump($curl->response);
