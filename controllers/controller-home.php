<?php
session_start();

require_once('../models/user.php');



if (!isset($_SESSION["user"])) {
    header("Location: controller-signin.php");
}

$dateDuJour = date("d-m-Y");

include_once '../views/view-home.php';

