<?php

require_once __DIR__ . "/../../vendor/autoload.php";

echo "client start \n";
$client =  stream_socket_client('tcp://192.168.56.102:9160', $erron, $error, 60);
//stream_set_blocking($client, 0);

fwrite($client, 'i am client 1');
$data = fread($client, 65535)."\n";
sleep(1);
dd($data, '获取data');
fwrite($client, 'i am client 2');
echo fread($client, 65535);
sleep(1);

fclose($client);
