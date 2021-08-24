<?php
init();
function init()
{
    session_start();
    if (!isset($_SESSION['olimpics'])) {
        $_SESSION['olimpics'] = [];
        $_SESSION['id'] = 1;
    }
}
function store()
{
    $athlete['id'] = $_SESSION['id'];
    $athlete['name'] = $_POST['name'];
    $athlete['surname'] = $_POST['surname'];
    $athlete['sport'] = $_POST['sport'];
    $athlete['country'] = $_POST['country'];
    $athlete['gender'] = $_POST['gender'];
    $athlete['victories'] = $_POST['victories'];

    $_SESSION['id']++;

    $_SESSION['olimpics'][] = $athlete;
}
function edit()
{
    foreach ($_SESSION['olimpics'] as $athlete) {
        if ($athlete['id'] == $_GET['id']) {
            return $athlete;
        }
    }
}
function update()
{
    foreach ($_SESSION['olimpics'] as &$athlete) {
        if ($athlete['id'] == $_POST['id']) {
            $athlete['name'] = $_POST['name'];
            $athlete['surname'] = $_POST['surname'];
            $athlete['sport'] = $_POST['sport'];
            $athlete['country'] = $_POST['country'];
            $athlete['gender'] = $_POST['gender'];
            $athlete['victories'] = $_POST['victories'];
            return;
        }
    }
}
function destroy()
{
    foreach ($_SESSION['olimpics'] as $key => $athlete) {
        if ($athlete['id'] == $_POST['id']) {
            unset($_SESSION['olimpics'][$key]);
            return;
        }
    }
}
