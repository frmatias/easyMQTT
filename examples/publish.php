<?php

require("../easyMQTT.php");

    $server = "mqtt.example.com";     // change if necessary
    $port = 1883;                     // change if necessary
    $username = "";                   // set your username
    $password = "";                   // set your password
    $client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()
    $topic = 'yourtopic';             //your topic name
    $content = 'content';             // Data to server

    $mqtt = new easyMQTT($server, $port, $client_id);

    if ($mqtt->connect(true, NULL, $username, $password)) {
        $mqtt->publish($topic,  $content);
        $mqtt->close();
    } else {
        //improve this
        echo "Time out!\n";
    }