<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/clientes_cobrancas/pesquisa?json',[
    'origem_tipo' => 'INTERNET',
    'origem_id' => 88762, // codigo do servico
    'status' => 0, // usar o inteiro 0 para apenas em aberto e 1 para os pagos
    'tipo' => 1, //mensalidade - se passar a string nao_mensal ele retorna os "diversos/avulsos",
    'sidx' => 'referencia_mensalidade',
    'sord' => 'desc',
    'rows' => 99999,
    'page' => 1
]);
echo 'Response:' . "\n";
var_dump($curl->response);

