<?php
require_once(__DIR__ . "/controller/SessionController.php");
require_once(__DIR__ . "/util/config.php");

$sessionCont = new SessionController();



require_once(__DIR__ . "/view/include/header.php");





$contador = $sessionCont->getObjContador();

?>

<div class="text-center">
    <div class="row justify-content-center">

        <h1>Contador de valores em uma sessão </h1>
        <div class="col-2">
            <a href="<?= BASE_URL ?>view/session/adicionarContador.php"
                class="btn btn-outline-secondary 
                 <?= ($contador) ? "pe-auto" : "pe-none" ?>">
                Aumentar a contagem
            </a>
        </div>
        <div class="col-2">
            <a href="<?= BASE_URL ?>view/session/criarSessao.php" 
            class="btn btn-outline-info
            <?= ($contador) ? "pe-none" : "pe-auto" ?>">
            Inicializar Sessao</a>

        </div>

        <div class="col-2">
            <a href="<?= BASE_URL ?>view/session/finalizarSessao.php" class="btn btn-outline-danger"> Finalizar Sessão</a>

        </div>

        <h2>
            <?= ($contador) ?  "Valores salvos na sessão : " . $contador->getContagem() : "Nenhum Valor encontrado ativo!!!" ?>
        </h2>
    </div>

</div>


<?php

require_once(__DIR__ . "/view/include/footer.php");
?>