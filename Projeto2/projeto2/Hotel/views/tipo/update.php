<?php
    require "../../autoload.php";

    // Construir o objeto do Tipo
    $tipo = new Tipo();
    $tipo->setId_Tipo($_POST['id_tipo']);
    $tipo->setDescricao($_POST['descricao']);

    // Atualizar registro no Banco de Dados
    $dao = new TipoDAO();
    $dao->update($tipo);

    // Redirecionar para o index
    header('Location: index.php');
?>
