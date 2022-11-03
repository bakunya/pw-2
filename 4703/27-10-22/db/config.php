<?php

    $conn = null;

    function connect()
    {
        if(empty($conn)) {
            $conn = mysqli_connect('localhost', 'root', '', '4703_pw2');
            if(!$conn) return die('Koneksi Error!');
            return $conn;
        }

        return $conn;
    }