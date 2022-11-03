<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/config.php';

    function delete_by_id($credentials)
    {
        $conn = connect();
        $id = $credentials['id'];
        
        $query = 'DELETE FROM instructures WHERE id = '.$id;

        try {
            if(!mysqli_query($conn, $query)) return die('Failed to delete user');
            return 'Deleted user created successfully';
        } catch (\Throwable $th) {
            return die('Failed to delete user');
        }
    }