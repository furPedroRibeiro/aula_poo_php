<?php
Class Veiculo{
    public $rodas;
    public $portas;
    public $cor;
    public $lugares;
    public $pesoSuportadoPorRoda = 50;
    public $pesoSuportadoPeloVeiculo;
    public $tipo;

    function PesoSuportado(){
        $this->pesoSuportadoPeloVeiculo = $this->pesoSuportadoPorRoda*$this->rodas;
    }
    function showInfo(){
        echo "Rodas: ".$this->rodas."<br>";
        echo "Portas: ".$this->portas."<br>";
        echo "Cor: ".$this->cor."<br>";
        echo "Lugares: ".$this->lugares."<br>";
        echo "Peso suportado pelo veículo: ".$this->pesoSuportadoPeloVeiculo."kg<br>";
        echo "Tipo: ".$this->tipo."<br><br>";
    }  
}

    $carro = new Veiculo();
    $carro->rodas = 4; 
    $carro->portas = 4; 
    $carro->cor = "Vermelho"; 
    $carro->lugares = "5"; 
    $carro->tipo = "Corolla";
    
    $carro->PesoSuportado();
    $carro->showInfo();

    $moto = new Veiculo();
    $moto->rodas = 2; 
    $moto->portas = 0; 
    $moto->cor = "Azul"; 
    $moto->lugares = "2"; 
    $moto->tipo = "SAARA";
    
    $moto->PesoSuportado();
    $moto->showInfo();
?>