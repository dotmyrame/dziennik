<?php
session_start();
require_once('../libs/mysqli.php');

$login = $_POST['login'];

$userInfo = explode('_', $login);
$query = "SELECT nazwisko, id_ucznia FROM uczniowie WHERE nazwisko='$userInfo[0]' AND id_ucznia='$userInfo[1]'";

$result = mysqli_query($connection, $query);
$row0 = null;
$row1 = null;
while ($row = mysqli_fetch_row($result)) {
    $row0 = $row[0];
    $row1 = $row[1];
};

if ($row0 == null || $row1 == null) {
    header('Location: ../../login.php');
    echo 'a';
} else {
    $_SESSION['login'] = true;
    $_SESSION['id'] = $row1;
    header('Location: ../../index.php');
}
