<?php

// BUSCAR O ARQUIVO APP_LISTA_TARAFAS_PUBLICO 
require "../../app_lista_tarefas_private/tarefa_model.php"; 
require "../../app_lista_tarefas_private/tarefa_service.php";
require "../../app_lista_tarefas_private/conexao.php";

echo '<pre>';

print_r($_POST);

echo'</pre>';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);

?>