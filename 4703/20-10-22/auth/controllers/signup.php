<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/27-10-22/db/users/insert_one.php';

    function get_credentials()
    {
        $name = @$_POST['name'];
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        if(empty($name) || empty($email) || empty($password)) return die('Credentials invalid!');

        return [
            'name' => htmlspecialchars($name),
            'email' => htmlspecialchars($email),
            'password' => password_hash(htmlspecialchars($password), PASSWORD_BCRYPT),
        ];
    }

    function main()
    {
        $credentials = get_credentials();
        $message = insert_one($credentials);
        echo $message;
    }

    main();