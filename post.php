<?php
// require dirname(__DIR__) . '/vendor/autoload.php';

// post.php ???
// This all was here before  ;)
$entryData = array(
    'category' => 'kittensCategory', 'title'    => 'title', 'article'  => 'article', 'when'     => time()
);


// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));

var_dump($context);
