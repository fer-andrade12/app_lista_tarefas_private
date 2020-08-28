<?php

class Tarefa {
    private $id;
    private $id_status;
    private $tarefa;
    private $date_cadastro;
    
    public function __set($atributo,  $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->atributo;
    }

}

?>