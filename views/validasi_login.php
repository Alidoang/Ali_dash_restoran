<?php


if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin ") {
        header("location:views/home.php");
    } else if ($_SESSION['role'] == "user") {
        header("location:views/home_user.php");
    } else {
        echo '';
    }
}

?>