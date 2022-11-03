<?php

    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/users/get_one_by_email.php';

    function get_credentials()
    {
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        if(empty($email) || empty($password)) return die('Credentials invalid!');

        return [
            'email' => htmlspecialchars($email),
            'password' => password_hash(htmlspecialchars($password), PASSWORD_BCRYPT),
        ];
    }

    function main()
    {
        $credentials = get_credentials();
        $message = get_one_by_email($credentials);
        echo $message;
    }

    main();