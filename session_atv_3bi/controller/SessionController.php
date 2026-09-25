<?php
require_once (__DIR__ . "/../service/SessionService.php");

class SessionController
{
    private SessionService $session_service;

    public function __construct()
    {
        $this->session_service = new SessionService();
    }

    public function iniciarSessao(){
        $this->session_service->startSession();
    }

    public function salvarSessao()
    {
        $this->session_service->saveSession();
    }
}