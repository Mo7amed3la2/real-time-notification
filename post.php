<?php

$entryData = array(
    'category' => $_GET['category'], 'title'    => $_GET['title'], 'article'  => $_GET['article'], 'when'     => time()
);


// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));

var_dump($context);
