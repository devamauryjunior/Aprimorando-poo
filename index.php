<?php
 
// Feito por Amaury Junior
 
function bicho($string) {
    switch($string) {
        case "gato":
            echo "Você tem um {$string}, que tem como características: ser é um mamífero carnívoro e quadrúpede pertencente à família Felidae e à ordem carnívora";
            break;
        case "gata":
            echo "Você tem um {$string}, que tem como características: ser é um mamífero carnívoro e quadrúpede pertencente à família Felidae e à ordem carnívora";
            break;
        case "cachorro":
            echo "Voce tem um {$string}, que tem como características: ser um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano.";
            break;
        case "cachorra":
            echo "Voce tem um {$string}, que tem como características: ser um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano.";
            break;
        default:
            echo "Você tem um {$string}, que bonito!";
            break;
    }
}
 
abstract class Animal {
    protected $tipoDeAnimal; // atributo privado, que diz que a variável só pode ser acessada dentro da classe e seus respectivos classes "filhos"
    protected $nomeDoPet; // atributo privado, que diz que a variável só pode ser acessada dentro da classe e seus respectivos classes "filhos"
    protected $cor; // atributo privado, que diz que a variável só pode ser acessada dentro da classe e seus respectivos classes "filhos"
   
    public function __construct($tipoDeAnimal, $nomeDoPet, $cor) { // Método construct
        $this->tipoDeAnimal = $tipoDeAnimal;
        $this->nomeDoPet = $nomeDoPet;
        $this->cor = $cor;
    }
 
    public function showDescription() { // outro método, que irá mostrar a descrição do animal
        $typeAnimal = strtolower($this->tipoDeAnimal);
        $typeName = strtolower($this->nomeDoPet);
        echo "Tipo:".ucfirst($typeAnimal)."<br/>Nome:".ucfirst($typeName)."<br/>Cor:{$this->cor}";
    }
}
 
final class Dono extends Animal {
    private $nome; // atributo privado, que diz que a variável só pode ser acessada dentro da classe
    private $idade; // atributo privado, que diz que a variável só pode ser acessada dentro da classe
    public function __construct($tipoDeAnimal, $nomeDoPet, $cor, $nomeDoDono, $idadeDoDono = 1) { // Método construct
        parent::__construct($tipoDeAnimal, $nomeDoPet, $cor);
        $this->nome = $nomeDoDono;
        $this->idade = $idadeDoDono;
    }
 
    public function informacaoes() {
        if($this->idade != 1) {
            echo "Seu nome é " .$this->nome. ".<br>Sua idade é " .$this->idade. " anos.<br/>";
        } else {
            echo "Não foi passada a idade do dono, então por definição suas informações são:<br/>";
            echo "Seu nome é " .$this->nome. "<br>Sua idade é " .$this->idade. " ano.<br/>";
        }
        $validar = (
            $this->tipoDeAnimal == strtolower($this->tipoDeAnimal) || $this->tipoDeAnimal == strtoupper($this->tipoDeAnimal) || $this->tipoDeAnimal == ucfirst($this->tipoDeAnimal)
        );
        if(!($validar)){
            echo "Algo de errado não está certo :)";
        } else if($validar == 1) {
            $animal = strtolower($this->tipoDeAnimal);
            echo bicho($animal);
        }
    }
}
$animal = new Dono("macaco", "chupeta", "preto", "José", 1);
$animal->informacaoes(); // as mensagens
echo "<br/><br/>";
$animal->showDescription(); // as mensagens