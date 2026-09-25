<?php
require_once(__DIR__ . "/../model/Contador.php");
class SessionService
{


    public function saveSession()
    {
        $this->startSession();

        $_SESSION[SESSION_CONT_OBJ] = new Contador();
    }



    public function startSession()
    {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function destroySession()
    {
        $this->startSession();

        session_unset();
        session_destroy();
    }



}
