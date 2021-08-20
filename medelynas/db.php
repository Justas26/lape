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
    $sql = "SELECT * from `augalai`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store()
{
    $conn = connect();
    $sql = 'INSERT INTO `augalai`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"' . $_POST['name'] . '","' . $_POST['is_yearling'] . '","' . $_POST['quantity'] . '")';
    $conn->query($sql);
    $conn->close();
}


function update()
{
    $conn = connect();
    $sql = 'UPDATE `augalai` SET `name`="' . $_POST['name'] . '",`is_yearling`="' . $_POST['is_yearling'] . '",`quantity`="' . $_POST['quantity'] . '" WHERE id = ' . $_POST['update'];
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