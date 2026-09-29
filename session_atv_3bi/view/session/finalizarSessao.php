<?php
require_once (__DIR__ . "/../../controller/SessionController.php");
require_once (__DIR__ . "/../../util/config.php");

echo session_status();

$sessionCont = new SessionController();


$sessionCont->finalizarSessao();

header("location:" . BASE_URL);