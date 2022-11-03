<?php
    include $_SERVER['DOCUMENT_ROOT'].'/4703/27-10-22/db/instructures/get_all.php';
    $instance_query = get_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-xl mx-auto row justify-content-center">
        <h1 class="text-center my-4 mb-5">Instructures</h1>
        <table class="table align-middle table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;

                    while($instructure = mysqli_fetch_assoc($instance_query)){
                        echo "<tr>";
                            echo '<th scope="row">'.$i.'</th>';
                            echo '<th scope="row">'.$instructure['name'].'</th>';
                            echo '<th scope="row">'.$instructure['nik'].'</th>';
                            echo '<th scope="row">'.$instructure['address'].'</th>';
                            echo '<th scope="row">'.$instructure['gender'].'</th>';
                            echo '<th scope="row">'.$instructure['skill'].'</th>';
                            echo 
                                '<th scope="row">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-primary">Update</button>
                                </th>';
                        echo '</tr>';

                        $i += 1;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>