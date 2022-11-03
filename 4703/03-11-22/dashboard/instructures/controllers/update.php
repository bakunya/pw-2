<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/instructures/update_by_id.php';

    function get_credentials()
    {
        $id = @$_POST['id'];
        $name = @$_POST['name'];
        $nik = @$_POST['nik'];
        $gender = @$_POST['gender'];
        $skill = @$_POST['skill'];
        $address = @$_POST['address'];
        
        if(
            empty($id) ||
            empty($name) ||
            empty($nik) ||
            empty($gender) ||
            empty($skill) ||
            empty($address)
        ) return die('Credentials invalid!');

        return [
            'id' => htmlspecialchars($id),
            'name' => htmlspecialchars($name),
            'nik' => htmlspecialchars($nik),
            'gender' => htmlspecialchars($gender),
            'skill' => htmlspecialchars($skill),
            'address' => htmlspecialchars($address),
        ];
    }

    function main()
    {
        $credentials = get_credentials();
        $message = update_by_id($credentials['id'], $credentials);
        echo $message;
        header('Location: ../index.php');
    }

    main();