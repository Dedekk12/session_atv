<?php
require_once(__DIR__ . "/../model/Contador.php");
class SessionService
{


    public function saveSession(Contador $contador)
    {
        $this->startSession();

        $_SESSION[SESSION_CONT] = $contador;
    }





    public function destroySession()
    {
        $this->startSession();

        session_unset();
        session_destroy();
    }

    public function raiseCounter()
    {
        $this->startSession();
        
        $_SESSION[SESSION_CONT]->adicionarContagem();
    }



    public function getObjCounter()
    {
        $this->startSession();
        if($this->issetCounter())
            return $_SESSION[SESSION_CONT];        
        
    }



    private function issetCounter() : bool
    {
        $this->startSession();
        if (isset($_SESSION[SESSION_CONT])) 
            return true;
        return false;
    }

        private function startSession()
    {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }


}
