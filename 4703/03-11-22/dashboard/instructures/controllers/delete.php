<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/instructures/delete_by_id.php';

    function get_credentials()
    {
        $id = @$_POST['id'];
        
        if(
            empty($id)
        ) return die('Credentials invalid!');

        return [
            'id' => htmlspecialchars($id),
        ];
    }

    function main()
    {
        $credentials = get_credentials();
        $message = delete_by_id($credentials);
        header('Location: ../index.php');
    }

    main();