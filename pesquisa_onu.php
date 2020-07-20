<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
$curl->post('/fibraoptica/grid_onus',[
    'page' => 1,
    'rows' => 1,
    'sidx' => 'descricao',
    'sord' => 'asc',
    'pops_elementos_id' => 0,
    'onus_sem_cliente' => 0,
    'pops_elementos_interfaces_id' => 0,
    'descricao_mac_serial' => 'DACMDFB18504'
]);
echo 'Response:' . "\n";
var_dump($curl->response);

/*
{
"page":"1",
"total":1,
"records":1,
"rows":[
        {
            "id":"63",
            "cell":["OLT (127.0.0.1)","1\/1\/2","34","1005","DM985-100","DACMDFB18504","0.00"]
        }
    ]
}
 */
