<?php
session_start();
var_dump($_SESSION);
include_once('../config.php');
include_once("../models/user.php");

Utilisateur::DeleteUser($_SESSION['user']['id_utilisateur']);

header("Location: controller-deco.php");
exit();
