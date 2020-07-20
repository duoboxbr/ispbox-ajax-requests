<?php
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$conf = require('conf.php');
$curl = new Curl($conf->admin_url);
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setBasicAuthentication($conf->username, $conf->password);
/**
 * /fibraoptica/onu_info/ID_DA_ONU/?json
 */
$curl->get('/fibraoptica/onu_info/63/?json');
echo 'Response:' . "\n";
var_dump($curl->response);
