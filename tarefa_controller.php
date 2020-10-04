<?php

// BUSCAR O ARQUIVO APP_LISTA_TARAFAS_PUBLICO 
require "../../app_lista_tarefas_private/tarefa_model.php"; 
require "../../app_lista_tarefas_private/tarefa_service.php";
require "../../app_lista_tarefas_private/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if ($acao == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

        header ('Location: nova_tarefa.php?inclusao=1');

    } else if ($acao == 'recuperar'){
        
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }
    


?>