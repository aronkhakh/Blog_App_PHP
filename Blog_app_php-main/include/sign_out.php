<?php


if (isset($_POST["sign_out"])) {
    session_start();
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>