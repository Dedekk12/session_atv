<?php
require_once(__DIR__ . "/controller/SessionController.php");
require_once (__DIR__ . "/util/config.php");

$sessionCont = new SessionController();

require_once(__DIR__ . "/view/include/header.php");
?>


<h1>Contador de valores em uma sessão </h1>

<button class="btn"> Adicionar Contador</button>
<a href="<?= BASE_URL ?>view/session/criarSessao.php" class="btn btn-primary">Inicializar Sessao</a>
<button class="btn"> Finalizar Sessão</button>


    <?php if (!empty($_SESSION[SESSION_CONT_OBJ])): ?>

        <h2>Valores salvos : <?= $_SESSION[SESSION_CONT_OBJ]->getContagem() ?></h2>

    <?php endif; ?>


<?php

print_r($_SESSION);

echo session_status();

require_once(__DIR__ . "/view/include/footer.php");
?>