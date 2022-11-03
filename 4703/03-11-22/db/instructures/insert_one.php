<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function insert_one($credentials)
    {
        $conn = connect();
        $name = $credentials['name'];
        $nik = $credentials['nik'];
        $gender = $credentials['gender'];
        $skill = $credentials['skill'];
        $address = $credentials['address'];
        
        $query = 'insert into instructures (name, nik, gender, skill, address) values ("'.$name.'", "'.$nik.'", "'.$gender.'", "'.$skill.'", "'.$address.'")';

        try {
            if(!mysqli_query($conn, $query)) return die('Failed to create new instructure');
            return 'New instructure created successfully';
        } catch (\Throwable $th) {
            return die('Failed to create new instructure');
        }
    }