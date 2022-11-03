<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/27-10-22/db/instructures/insert_one.php';

    function get_credentials()
    {
        $name = @$_POST['name'];
        $nik = @$_POST['nik'];
        $gender = @$_POST['gender'];
        $skill = @$_POST['skill'];
        $address = @$_POST['address'];
        
        if(
            empty($name) ||
            empty($nik) ||
            empty($gender) ||
            empty($skill) ||
            empty($address)
        ) return die('Credentials invalid!');

        return [
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
        $message = insert_one($credentials);
        echo $message;
    }

    main();