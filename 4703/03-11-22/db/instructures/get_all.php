<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function get_all()
    {
        $conn = connect();
        $query = 'select * from instructures';
        $query = mysqli_query($conn, $query);

        try {
            if(!$query) return die('Failed to get instructures');
            return $query;
        } catch (\Throwable $th) {
            return die('Failed to get instructures');
        }
    }