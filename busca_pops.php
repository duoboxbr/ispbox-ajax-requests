<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);

// primeiro listamos todos os mapas disponíveis
$curl->post('/mapa_rede/arvore',[
    'op' => 'get_children',
    'id' => 0,
    'mapa_id' => 0
]);
echo 'Response:' . "\n";
$mapas = $curl->response;
var_dump($mapas);
// agora listamos os pops em cada mapa
foreach ($mapas as $mapa) {
    echo "Mapa " . $mapa->text . "\n";
    list($tmp,$mapa_id) = explode('_', $mapa->id);
    $curl->post('/mapa_rede/arvore',[
        'op' => 'get_children',
        'tipo' => 'maparede',
        'id' => $mapa_id
    ]);
    $pops = $curl->response;
    // busca dados do pop
    foreach ($pops as $pop) {
        list($tmp,$pop_id) = explode('_', $pop->id);
        $curl->post('/mapa_rede/arvore',[
            'op' => 'get_info',
            'tipo' => 'pop',
            'id' => $pop_id
        ]);
        var_dump($curl->response);
    }
}
