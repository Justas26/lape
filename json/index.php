<?php
include('./jsonData.php');

//edit
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) {
    $car = edit();
}
//create
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])) {
    store();
    header("location:./");
    die;
}
//sell
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['status'])) {
    sell();
    header("location:./");
    die;
}

//delete
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['model'])) {
    destroy();
    header("location:./");
    die;
}

//update
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
    update();
    header("location:./");
    die;
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
            <label class="col-sm-2 col-form-label">Automobilio gamintojas</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="manufacturer" value="<?= (isset($car)) ? $car['manufacturer'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Automobilio modelis</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?= (isset($car)) ? $car['model'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Automobilio pagaminimo metai</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="year" value="<?= (isset($car)) ? $car['year'] : "" ?>">
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Automobilio spalva</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="color" value="<?= (isset($car)) ? $car['color'] : "" ?>">
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Automobilio rida</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="distance" value="<?= (isset($car)) ? $car['distance'] : "" ?>">
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Automobilio degalai</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="fuel" value="<?= (isset($car)) ? $car['fuel'] : "" ?>">
            </div>

        </div>

        <?php if (!isset($car)) {
            echo '<button class="btn btn-primary" type="submit">Pridėti automobili</button>';
        } else {
            echo '
            <input type="hidden" name="id" value="' . $car['id'] . ' ">
            <button class="btn btn-info" type="submit">Atnaujinti automobili</button>';
        } ?>

    </form>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Automobilio gamintojas </th>
            <th>Automobilio modelis</th>
            <th>Automobilio pagaminimo metai</th>
            <th>Automobilio spalva</th>
            <th>Automobilio rida</th>
            <th>Automobilio degalai</th>
            <th>edit</th>
            <th>delete</th>
            <th>status</th>
        </tr>
        <?php foreach (getData() as $car) {  ?>
            <tr>
                <td> <?= $car['id']  ?> </td>
                <td> <?= $car['manufacturer']  ?> </td>
                <td> <?= $car['model']  ?> </td>
                <td> <?= $car['year']  ?> </td>
                <td> <?= $car['color']  ?> </td>
                <td> <?= $car['distance']  ?> </td>
                <td> <?= $car['fuel']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $car['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $car['id'] ?>">
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <?php if (!$car['status'] == 'Parduota') { ?>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $car['id'] ?>">
                            <input type="hidden" name="status" value="<?= $car['status'] ?>">
                            <button class="btn btn-warning" type="submit">sell</button>
                        </form>
                    <?php } else {
                        echo 'Parduota';
                    } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>