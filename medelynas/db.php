<?php
function connect()
{
    return new mysqli("localhost", "root", "", "medelynas");
}

function find($id)
{
    $conn = connect();
    $sql = 'SELECT * from `augalai` where id =' . $id;
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_assoc();
}
function allOld()
{
    $conn = connect();
    $sql = "SELECT * from `augalai`";
    $result = $conn->query($sql);

    $arr = [];
    while ($row = $result->fetch_assoc()) {
        $plant = [];
        $plant['id'] = $row['id'];
        $plant['is_yearling'] = $row['is_yearling'];
        $plant['quantity'] = $row['quantity'];
        $plant['name'] = $row['name'];
        $arr[] = $plant;
    }
    $conn->close();
    return $arr;
}


function all()
{
    $conn = connect();
    $sql = "SELECT `augalai`.`id`, `name`, `is_yearling`,
    (SELECT COUNT(*)
    FROM `unique_plants`
    WHERE `unique_plants`.`plant_id` = `augalai`.`id`) as 'quantity'
    FROM `unique_plants` right join `augalai`
    ON `augalai`.`id` = `unique_plants`.`plant_id`
    GROUP by `augalai`.`id`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store()
{
    $is_yearling = 0;
    if (isset($_POST['is_yearling'])) {
        $is_yearling = 1;
    }
    $conn = connect();
    $sql = 'INSERT INTO `augalai`(`id`, `name`, `is_yearling`) VALUES (NULL,"' . $_POST['name'] . '","' . $is_yearling . '")';
    $conn->query($sql);
    $conn->close();
}


function update()
{
    $is_yearling = 0;
    if (isset($_POST['is_yearling'])) {
        $is_yearling = 1;
    }
    $conn = connect();
    $sql = 'UPDATE `augalai` SET `name`="' . $_POST['name'] . '",`is_yearling`="' . $is_yearling .  '" WHERE id = ' . $_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id)
{
    $conn = connect();
    $sql = "DELETE FROM `augalai` WHERE id=" . $id;
    $conn->query($sql);
    $conn->close();
}
