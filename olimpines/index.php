<?php
include('./db.php');



if (isset($_POST['create'])) {
    store();
    header("location:./");
    die;
}

if (isset($_POST['update'])) {
    update();
    header("location:./");
    die;
}

if (isset($_POST['delete'])) {
    destroy($_POST['delete']);
    header("location:./");
    die;
}

$action = 'create';

if (isset($_GET['edit'])) {
    $athlete = find($_GET['edit']);
    $action = 'update';
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <form class="form" action="" method="POST">

        <form class="form" action="" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko vardas</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="name" value="<?= (isset($athlete)) ? $athlete['name'] : "" ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko pavardė</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="surname" value="<?= (isset($athlete)) ? $athlete['surname'] : "" ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko šalis</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="country" value="<?= (isset($athlete)) ? $athlete['country'] : "" ?>">
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko sporto šaka</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="sport" value="<?= (isset($athlete)) ? $athlete['sport'] : "" ?>">
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko lytis</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="gender" value="<?= (isset($athlete)) ? $athlete['gender'] : "" ?>">
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sportininko pergalės</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="victories" value="<?= (isset($athlete)) ? $athlete['victories'] : "" ?>">
                </div>
            </div>
            <?php if (!isset($athlete)) {
                echo '<button class="btn btn-primary" name="create" type="submit">Pridėti sportininką</button>';
            } else {
                echo '<button class="btn btn-info" type="submit" name="update" value="' . $athlete['id'] . '">Atnaujinti sportininką</button>';
            } ?>
        </form>



        <table class="table">
            <tr>
                <th>Id</th>
                <th> Vardas</th>
                <th>Pavardė</th>
                <th>Šalis</th>
                <th>Šaka</th>
                <th>Lytis</th>
                <th>Pergalės</th>
                <th>edit</th>
                <th>delete</th>
            </tr>


            <?php foreach (allOld() as $athlete) {  ?>
                <tr>
                    <td> <?= $athlete['id']  ?> </td>
                    <td> <?= $athlete['name']  ?> </td>
                    <td> <?= $athlete['surname']  ?> </td>
                    <td> <?= $athlete['country']  ?> </td>
                    <td> <?= $athlete['sport']  ?> </td>
                    <td> <?= $athlete['gender']  ?> </td>
                    <td> <?= $athlete['victories']  ?> </td>
                    <td>
                        <a class="btn btn-success" href="?edit=<?= $athlete['id']  ?>">edit</a>
                    </td>
                    <td>
                        <form action="" method="post">
                            <button class="btn btn-danger" type="submit" name="delete" value="<?= $athlete['id'] ?>">delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
</body>

</html>