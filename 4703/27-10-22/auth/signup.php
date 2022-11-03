<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            min-width: 100vw;
            min-height: 100vh;
            display: grid;
            place-content: center;
        }

        body > div.container-xl {
            width: 1200px;
        }

        .bg-anime {
            background: url('./bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container-xl mx-auto row border shadow rounded-5 overflow-hidden p-0">        
        <div class="col-5 bg-anime "></div>
        <div class="col-7 py-5">
            <form action="./controllers/signup.php" method="post" class="py-5 px-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input required type="text" name="name" class="form-control" id="name" placeholder="Hatsune Miku">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input required type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input required type="password" name="password" class="form-control" id="password" placeholder="******">
                </div>
                <button type="submit" class="btn btn-primary px-5 mt-5 ms-auto d-block">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>