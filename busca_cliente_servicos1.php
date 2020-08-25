<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
/*
 * Forma 1 usando o endpoint de pesquisa
 * Como o cliente pode ter serviço de Internet e de telefonia, por padrão o sistema retorna os 2
 * Caso você queria filtrar apenas um tipo informe
 * tipo_servico = INTERNET para ter apenas o resultado dos servicos de Internet
 * tipo_servico = TELEFONE para ter apenas o resultado dos servicos de telefone
 */
$curl->post('/clientes/index?json',[
    'servico_internet' => 1, // retorna somente os resultados com serviço de Internet ou telefone ativo
    'id' => '1565', // id do cliente,
    'tipo_servico' => 'TODOS',
    'revendas_id' => -1,
    'vendedor_id' => -1,
    'pontos_autenticacao_pppoe_id' => -1,
    'tipo_vencimento' => 100,
    'forma_cobranca' => 'TODOS'
]);
echo 'Response:' . "\n";
var_dump($curl->response);
