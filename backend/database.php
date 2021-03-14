<?php

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=realtime_chat_app', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_start();
    