<?php

require("../easyMQTT.php");


    $server = "mqtt.example.com";     // change if necessary
    $port = 1883;                     // change if necessary
    $username = "";                   // set your username
    $password = "";                   // set your password
    $client_id = "phpMQTT-subscriber"; // make sure this is unique for connecting to sever - you could use uniqid()
    $topic = 'yourtopic';               // topic name

    $mqtt = new easyMQTT($server, $port, $client_id);

    if ($mqtt->connect(true, NULL, $username, $password)) {
        $msg = $mqtt->subscribe($topic);
        $mqtt->close();
    }else {
        //improve this
        echo "Time out!\n";
    }

