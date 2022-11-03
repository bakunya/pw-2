<?php
    include $_SERVER['DOCUMENT_ROOT'].'/4703/03-11-22/db/instructures/get_by_id.php';

    $id = @$_GET['id']; 
    if(empty($id)) return die('Credentials invalid!');

    $data = get_by_id(htmlspecialchars($id));
?>

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
    <div class="container-xl mx-auto row justify-content-center">
        <div class="col-7 py-5 border overflow-hidden p-0 shadow rounded-5">
            <form action="./controllers/update.php" method="post" class="py-5 px-4">
                <input value="<?= $data['id'] ?>" required type="hidden" name="id" class="form-control" id="id" placeholder="Type here ...">
                <div class="mb-4">
                    <label for="nik" class="form-label">NIK</label>
                    <input value="<?= $data['nik'] ?>" required type="number" name="nik" class="form-control" id="nik" placeholder="Type here ...">
                </div>
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?= $data['name'] ?>" required type="text" name="name" class="form-control" id="name" placeholder="Type here ...">
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label">Address</label>
                    <input value="<?= $data['address'] ?>" required type="text" name="address" class="form-control" id="address" placeholder="Type here ...">
                </div>
                <div class="mb-4">
                    <span for="gender" class="form-label">Gender: </span>
                    <div class="row ps-4 mt-2">
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" value="laki-laki" name="gender" id="lk" <?= $data['gender'] === 'laki-laki' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="lk">
                                Laki-laki
                            </label>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" value="perempuan" name="gender" id="pr" <?= $data['gender'] === 'perempuan' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="pr">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="skill" class="form-label">Skill</label>
                    <select name="skill" class="form-select text-capitalize" aria-label="Default select example">
                        <option>Open this select menu</option>
                        <option <?= $data['skill'] === 'coding' ? 'selected' : '' ?> class="text-capitalize" value="coding">coding</option>
                        <option <?= $data['skill'] === 'memasak' ? 'selected' : '' ?> class="text-capitalize" value="memasak">memasak</option>
                        <option <?= $data['skill'] === 'oprek komputer' ? 'selected' : '' ?> class="text-capitalize" value="oprek komputer">oprek komputer</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary px-5 mt-5 ms-auto d-block">Update Instructure</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>