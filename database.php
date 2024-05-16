<?php
session_start();

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASSWORD = "";
$DATABASE_NAME = "barsite";

$_SESSION['conn'] = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit("Failed to connect to database : " . mysqli_connect_error());
}
