<?php

require_once __DIR__ . "/../../vendor/autoload.php";

echo "client start \n";
for ($i=0; $i<1; $i++) {
    $client =  stream_socket_client('tcp://192.168.56.102:9160', $erron, $error, 60);
    fwrite($client, 'i am client 1');
    $data = fread($client, 65535)."\n";
    dd($data, '获取data');
    sleep(1);
//    fwrite($client, 'i am client 2');
//    echo fread($client, 65535);

    fclose($client);

}
//stream_set_blocking($client, 0);


