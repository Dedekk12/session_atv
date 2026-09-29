<?php
require_once(__DIR__ . "/controller/SessionController.php");
require_once (__DIR__ . "/util/config.php");

$sessionCont = new SessionController();



require_once(__DIR__ . "/view/include/header.php");





$contador = $sessionCont->getObjContador();

?>


<h1>Contador de valores em uma sessão </h1>

<a href="<?= BASE_URL ?>view/session/adicionarContador.php" class="btn">Aumentar a contagem</a>
<a href="<?= BASE_URL ?>view/session/criarSessao.php" class="btn btn-primary">Inicializar Sessao</a>

<a href="<?= BASE_URL ?>view/session/finalizarSessao.php" class="btn"> Finalizar Sessão</a >


<h2>Valores : 
    <?= ($contador) ? $contador->getContagem() : "Nenhum Valor encontrado ou sessão desativa!!" ?>
</h2>



<?php

require_once(__DIR__ . "/view/include/footer.php");
?>