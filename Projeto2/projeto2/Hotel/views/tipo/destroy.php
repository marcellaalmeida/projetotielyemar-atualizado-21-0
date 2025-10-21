<?php
    require "../../autoload.php";

    // Excluir do Banco de Dados
    $dao = new TipoDAO();
    $dao->destroy($_GET['id_tipo']);

    // Redirecionar para o index (Comentar quando não funcionar)
    header('Location: index.php');