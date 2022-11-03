<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function insert_one($credentials)
    {
        $conn = connect();
        $name = $credentials['name'];
        $email = $credentials['email'];
        $password = $credentials['password'];
        
        $query = 'insert into users (name, email, password) values ("'.$name.'", "'.$email.'", "'.$password.'")';

        try {
            if(!mysqli_query($conn, $query)) return die('Failed to create new user');
            return 'New user created successfully';
        } catch (\Throwable $th) {
            return die('Failed to create new user');
        }
    }