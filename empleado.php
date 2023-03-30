<?php

class Empleados{
    public $id;
    public $nombrecompleto;
    public $salario;
    public $descuento;

    public function __construct($one,$two,$tree){
      $this->id = $one;
      $this->nombrecompleto = $two;
      $this->salario = $tree;
    }

    public function mostrarifo(){
        echo 'id-> '. $this->id .'<br>'. 'nombre '. $this->nombrecompleto .'<br>' .'salario'. $this->salario.'<br>';

    }

    public function calcularsalario(){
       

     if($this->salario >=300 && $this->salario<=500){
      echo 'No hay descuento';
     }
     elseif($this->salario >=500 && $this->salario<=700){
       $this->descuento = $this->salario*0.10;
        echo 'Tiene un descuento de 10% su total es '. $this->descuento  .'<br>';
     }
     elseif($this->salario >700){
        $this->descuento = $this->salario*0.25;
        echo 'Tiene un descuento de 25% su total es: '. $this->descuento .'<br>';
     }
    }

}

class vendedor extends Empleados{
    public $ventas_realizadas;

    public function __construct($id,$nombrecompleto,$salario,$ventas){
     parent::__construct($id,$nombrecompleto,$salario);
     $this->ventas_realizadas = $ventas;
    }
    public function mostrarventa(){
        
        echo '--------------Clase Hija--------------------<br>';
        echo 'id-> '. $this->id .'<br>'. 'nombre '. $this->nombrecompleto .'<br>' .'salario'. $this->salario.'<br>' . 'ventas Realizadas' . $this->ventas_realizadas;
    }
}

$empleado1 = new Empleados(12,"melvin Adiel Vasquez Mejia ", 600);
$empleado1 -> mostrarifo();
$empleado1 -> calcularsalario();
$vendedor1 = new vendedor(12,"melvin Adiel Vasquez Mejia ", 600,10);
$vendedor1 -> mostrarventa();

?>