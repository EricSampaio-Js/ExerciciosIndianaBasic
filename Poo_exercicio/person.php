<!-- A classe Pessoa deve ter os seguintes atributos:
- nome;
- idade;
- corDosOlhos;
- gênero;
- altura;
- peso;

No caso do atributo corDosOlhos só poderá ser inserido uma dessas opções: 
- Azul;
- Castanho;
- Verde;
- Preto.

E no gênero estas opções:
- Masculino;
- Feminino;

Tarefa: Implemente o encapsulamento na sua classe Pessoa levando em consideração as informações acima. -->

<?php 

class Person {

  public function __construct(
    private string $nome,
    private string $corDosOlhos,
    private string $genero,

    private int $altura,
    private int $peso,
    private int $idade
  ){

    $verifiqueCorDosOlhos = 
    strtolower($this->corDosOlhos) == strtolower('Azul')  || 
    strtolower($this->corDosOlhos) == strtolower('Castanho')  || 
    strtolower($this->corDosOlhos) == strtolower('Verde')  || 
    strtolower($this->corDosOlhos) == strtolower('Preto'); 

    if($verifiqueCorDosOlhos){
      $this->corDosOlhos = ucfirst($corDosOlhos) ; 
  }else{
      echo 
      "
      Error : Cor não permitida <br>
      Use Apenas <br>
          Azul
          Castanho
          Verde
          Preto
      ";
      exit();
    }

    $verifiqueGenero =  
    strtolower($genero) == strtolower('Feminino') ||
    strtolower($genero) == strtolower('Masculino') ;
    
    if($verifiqueGenero){
      $this->genero = ucfirst($genero);
  }else{
      echo 
      "
      Error : Genero não permitido <br>
      Use Apenas <br>
          Masculino ou   Feminino 
      ";
      exit();
    }

  }

    ##################### NOME ###############
    public function setNome (string $nome):void 
    {   $this->nome = $nome;    }

    public function getNome(): string
    {   return $this->nome;   }

    ##################### OLHOS ###############
    // - Azul;
    // - Castanho;
    // - Verde;
    // - Preto.

  
    public function setCorDosOlhos (string $corDosOlhos):void 
    {   
      $verifiqueCorDosOlhos = 
      strtolower($corDosOlhos) == strtolower('Azul')  || 
      strtolower($corDosOlhos) == strtolower('Castanho')  || 
      strtolower($corDosOlhos) == strtolower('Verde')  || 
      strtolower($corDosOlhos) == strtolower('Preto'); 
        
        if($verifiqueCorDosOlhos){
            $this->corDosOlhos = ucfirst($corDosOlhos) ; 
        }else{
            echo 
            "
            Error : Cor não permitida <br>
            Use Apenas <br>
                Azul
                Castanho
                Verde
                Preto
            ";
            exit();
            
        }
    }
    
    public function getCorDosOlhos(): string
    {   return $this->corDosOlhos;  }

  
    ################### GENERO ##################
    // - Masculino;
    // - Feminino;
    public function setGenero (string $genero):void 
    {   

        $vefiqGenero = 
        strtolower($genero) == strtolower('Feminino') ||
        strtolower($genero) == strtolower('Masculino') ;
        
        if($vefiqGenero){
            $this->genero = ucfirst($genero);
        } else {
            echo 
            "
            Error : Genero não permitido <br>
            Use Apenas <br>
                Masculino <br> 
                Feminino 
            ";
            exit();
        }
    }
    
    public function getGenero(): string
    {   return $this->genero;  }

    ################### ALTURA ##################
    public function setAltura (int $altura):void 
      {   $this->genero = $altura; }
      
    public function getAltura(): int
      {   return $this->altura;  }

    ################### PESO ##################
    public function setPeso (int $peso):void 
      {   $this->peso = $peso; }
      
    public function getPeso(): int
      {   return $this->peso;  }

    ################### IDADE ##################
    public function setIdade (int $idade):void 
      {   $this->idade = $idade; }
      
    public function getIdade(): int
      {   return $this->idade;  }

}

// private string $nome,
// private string $corDosOlhos,
// private string $genero,

// private int $altura,
// private int $peso,
// private int $idade

$objetoPerson1 = new Person('joão','Verde','Masculino',12,1.5,50);

// lançando ERROR
// $objetoPerson1 = new Person('joão','Verde','Mascasdaulino',12,1.5,50);

echo "<br>";

echo $objetoPerson1->getNome();  
echo "<br>";
echo $objetoPerson1->getCorDosOlhos();
echo "<br>";

// lançando Error 
// echo $objetoPerson1->setCorDosOlhos('sdadasdda');

echo "<br>";
echo $objetoPerson1->getGenero();
echo "<br>";

// Lançando Error
// echo $objetoPerson1->setGenero('femindsadasino');
echo "<br>";
echo $objetoPerson1->getGenero();
echo "<br>";

echo $objetoPerson1->getIdade();
echo "<br>";
echo "<br>";

var_dump($objetoPerson1);




?>