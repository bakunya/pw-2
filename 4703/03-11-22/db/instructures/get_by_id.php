<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function get_by_id($id)
    {
        $conn = connect();
        $query = 'select * from instructures where id = '.$id;
        $query = mysqli_query($conn, $query);

        try {
            if(!$query) return die('Failed to get instructures');
            return mysqli_fetch_assoc($query);
            
        } catch (\Throwable $th) {
            return die('Failed to get instructures');
        }
    }