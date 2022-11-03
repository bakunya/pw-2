<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function update_by_id($id, $credentials)
    {
        $conn = connect();

        $name = $credentials['name'];
        $nik = $credentials['nik'];
        $gender = $credentials['gender'];
        $skill = $credentials['skill'];
        $address = $credentials['address'];

        $query = '
            UPDATE instructures 
            SET name = "'.$name.'", nik = "'.$nik.'", gender = "'.$gender.'", skill = "'.$skill.'", address = "'.$address.'"
            where id = '.$id;

        try {
            if(!mysqli_query($conn, $query)) return die('Failed to update instructures');
            return 'Success to update instructures';
        } catch (\Throwable $th) {
            var_dump($th);
            return die('Failed to update instructures');
        }
    }