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
    $plant = find($_GET['edit']);
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

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Augalo pavadinimas</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($plant)) ? $plant['name'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Vienmetis</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="is_yearling" value="<?= (isset($plant)) ? $plant['is_yearling'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kiekis</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="quantity" value="<?= (isset($plant)) ? $plant['quantity'] : "" ?>">
            </div>

        </div>
        <?php if (!isset($plant)) {
            echo '<button class="btn btn-primary" name="create" type="submit">Pridėti augalą</button>';
        } else {
            echo '<button class="btn btn-info" type="submit" name="update" value="' . $plant['id'] . '">Atnaujinti augalą</button>';
        } ?>
    </form>



    <table class="table">
        <tr>
            <th>Id</th>
            <th>Augalo vardas</th>
            <th>Augalo rūšis</th>
            <th>Augalų kiekis</th>
            <th>edit</th>
            <th>delete</th>
        </tr>


        <?php foreach (allOld() as $plant) {  ?>
            <tr>
                <td> <?= $plant['id']  ?> </td>
                <td> <?= $plant['name']  ?> </td>
                <td> <?= $plant['is_yearling']  ?> </td>
                <td> <?= $plant['quantity']  ?> </td>
                <td>
                    <a class="btn btn-success" href="?edit=<?= $plant['id']  ?>">edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?= $plant['id'] ?>">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>