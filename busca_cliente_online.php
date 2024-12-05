<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/relatorios/clientesonline/0',[
    'cliente_internet' => 28
]);
echo 'Response:' . "\n";
var_dump($curl->response);
/*
 * caso o cliente esteja online, o array terá uma posição
 * exemplo
[
    {
        "cliente_id": "97539", // código do cliente
        "internet_id": "28", // código do servico
        "internet_status": "2", // 0 - bloqueado - 1 - liberado - 2 - contrato suspenso - 3 - suspensão parcial (redução de velocidade)
        "id": "100161628", // id do acct
        "login": "27354232000102", // login do cliente
        "inicio": "05\/12\/2024 11:13:27", // início da conexão
        "inicio_unix": 1733408007, // timestamp do ínicio da conexão
        "tempo": "06:00:47", // tempo de conexão
        "tempo_unix": 21647, // tempo em segundos
        "ip": "10.0.13.206", // ipv4
        "framedipv6prefix": "2804:3e60:400::1:81c6\/128", // ipv6 wan
        "delegatedipv6prefix": "2804:3e60:4fa:f800::\/56", // ipv6 lan
        "mac": "80:85:44:70:7E:41", // mac da conexão
        "nas_id": "48", // id do concentrador no sistema
        "nas": "NE-8000" // nome do concentrador
    }
]
 */