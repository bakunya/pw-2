<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/27-10-22/db/config.php';

    function get_one_by_email($credentials)
    {
        $conn = connect();
        $email = $credentials['email'];
        
        $query = 'select * from users where email = "'.$email.'"';

        try {
            if(!mysqli_query($conn, $query)) return die('Failed to create new user');
            return 'New user created successfully';
        } catch (\Throwable $th) {
            return die('Failed to create new user');
        }
    }