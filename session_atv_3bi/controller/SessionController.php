<?php
require_once (__DIR__ . "/../service/SessionService.php");
require_once(__DIR__ . "/../model/Contador.php");

class SessionController
{
    private SessionService $session_service;

    public function __construct()
    {
        $this->session_service = new SessionService();
    }

    public function salvarSessao(Contador $contador)
    {
        $this->session_service->saveSession($contador);
    }

    public function finalizarSessao()
    {
        $this->session_service->destroySession();
    }

    public function getObjContador()
    {
        return $this->session_service->getObjCounter();
    }

    public function aumentarContador()
    {
        $this->session_service->raiseCounter();
    }


    
    



}