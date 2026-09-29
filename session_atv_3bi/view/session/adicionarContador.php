<?php
require_once (__DIR__ . "/../../controller/SessionController.php");
require_once (__DIR__ . "/../../util/config.php");

$sessionCont = new SessionController();


$sessionCont->aumentarContador();


header("location:" . BASE_URL);
