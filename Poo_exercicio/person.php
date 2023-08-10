<?php
class Person {
    //Atributos
    public  $corOlhos;
    public $qtdBraco;
    public $qtdPena;

    public bool $correr;
    public bool $andar;


    ################# METODOS #################################
    
    ################  COR OLHOS #################################
    
    public function setCorOlhos(string $corOlhos): void
    {
        $this->corOlhos = $corOlhos;
    }

    public function getCorOlhos(): string
    {
        return $this->corOlhos;
    }
    ############ BRAÇO ###############################
    public function setqQtdBraco(string $qtdBraco): void
    {
        $this->qtdBraco = $qtdBraco;
    }

    public function getQtdBraco(): string
    {
        return $this->qtdBraco;
    }

    ############ PERNAS ##############################

   public function setQtdPena(string $qtdPena): void
    {
        $this->qtdPena = $qtdPena;
    }

    public function getQtdPena(): string
    {
        return $this->qtdPena;
    }
    ##################### AÇÕES ##############################
  

    public function setCorrer(bool $correr): void
    {
        $this->correr = $correr;
    }

    public function getCorrer(): string
    {
         return  $this->correr;
    }

    ############## ANDAR    #############################

    public function setAndar(bool $andar): void
    {
        $this->andar = $andar;
    }

    public function getAndar(): string
    {
        return $this->andar;
    }


}
?>
