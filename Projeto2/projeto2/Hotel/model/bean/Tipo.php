<?php
class Tipo {
    // Atributos
    private $id_tipo;
    private $descricao;

    // Métodos Getter e Setter

    public function getId_Tipo() {
        return $this->id_tipo;
    }

    public function setId_Tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Método para retornar uma string do objeto
    public function __toString() {
        return $this->descricao;
    }
}
?>
