<?php
class Person {
    //Atributos
    public  string $corOlhos;
    public int $qtdBraco;
    public int $qtdPena;

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
    public function setqQtdBraco(int $qtdBraco): void
    {
        $this->qtdBraco = $qtdBraco;
    }

    public function getQtdBraco(): int
    {
        return $this->qtdBraco;
    }

    ############ PERNAS ##############################

   public function setQtdPena(int $qtdPena): void
    {
        $this->qtdPena = $qtdPena;
    }

    public function getQtdPena(): int
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
