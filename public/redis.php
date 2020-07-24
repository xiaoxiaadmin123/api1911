<?php

    $redis = new Redis();

    $redis->connect('127.0.0.1',6379);

    $redis->set('name11','xiaoxia123');

    $name =  $redis->get('name11');
    echo $name;

