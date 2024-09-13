<?php 

class Servico {
    private $id;
    private $nome;
    private $tempo;
    private $valor;
    private $logo;
    private $empresa;


    function __construct($id, $nome, $tempo, $valor, $logo){
        $this->id = $id;
        $this->nome = $nome;
        $this->tempo = $tempo;
        $this->valor = $valor;
        $this->logo = $logo;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getTempo(){
        return $this->tempo;
    }
    function setTempo($tempo){
        $this->tempo = $tempo;
    }

    function getValor(){
        return $this->valor;
    }
    function setValor($valor){
        $this->valor = $valor;
    }

    function getLogo(){
        return $this->logo;
    }
    function setLogo($logo){
        $this->logo = $logo;
    }

    function getEmpresa(){
        return $this->empresa;
    }
    function setEmpresa($empresa){
        $this->empresa = $empresa;
    }
}
?>