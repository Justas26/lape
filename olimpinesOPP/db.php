<?php
include("../Models/Atlethe.php");
function connect()
{
    return new mysqli("localhost", "root", "", "olimpines");
}

function find($id)
{
    $conn = connect();
    $sql = 'SELECT * from `atletai` where id =' . $id;
    $result = $conn->query($sql);
    $conn->close();
    $resultAtlethe = $result->fetch_assoc();
    $athlete = new Atlethe();
    $athlete->id = $resultAtlethe['id'];
    $athlete->name = $resultAtlethe['name'];
    $athlete->surname = $resultAtlethe['surname'];
    $athlete->sport = $resultAtlethe['sport'];
    $athlete->country = $resultAtlethe['country'];
    $athlete->gender = $resultAtlethe['gender'];
    $athlete->victories = $resultAtlethe['victories'];
    return $athlete;
}
function allOPP()
{
    $conn = connect();
    if (($_GET['victories'])  == 'ASC') {
        $sql = "SELECT * from `atletai`ORDER BY victories ASC";
    } else {
        $sql = "SELECT * from `atletai`ORDER BY victories DESC";
    }
    $result = $conn->query($sql);
    $arr = [];
    while ($row = $result->fetch_assoc()) {
        $athlete = new Atlethe();
        $athlete->id = $row['id'];
        $athlete->name = $row['name'];
        $athlete->surname = $row['surname'];
        $athlete->sport = $row['sport'];
        $athlete->country = $row['country'];
        $athlete->gender = $row['gender'];
        $athlete->victories = $row['victories'];
        $arr[] = $athlete;
    }
    $conn->close();
    return $arr;
}



function all()
{
    $conn = connect();
    $sql = "SELECT * from `atletai`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store()
{
    $conn = connect();
    $sql = 'INSERT INTO `atletai`(`id`, `name`, `surname`, `country`, `sport`, `gender`, `victories`) VALUES (NULL,"' . $_POST['name'] . '","' . $_POST['surname'] . '","' . $_POST['country'] . '","' . $_POST['sport'] . '","' . $_POST['gender'] . '","' . $_POST['victories'] . '")';
    $conn->query($sql);
    $conn->close();
}


function update()
{
    $conn = connect();
    $sql = 'UPDATE `atletai` SET `name`="' . $_POST['name'] . '",`surname`="' . $_POST['surname'] . '",`country`="' . $_POST['country'] . '",`sport`="' . $_POST['sport'] . '",`gender`="' . $_POST['gender'] . '",`victories`="' . $_POST['victories'] . '" WHERE id = ' . $_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id)
{
    $conn = connect();
    $sql = "DELETE FROM `atletai` WHERE id=" . $id;
    $conn->query($sql);
    $conn->close();
}
