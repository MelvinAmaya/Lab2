<?php

    class Banco{

        public $nombre;
        public $dui;
        public $cantidad_ingersada;
        public $cantidad_retirar;
        public $fodo;

        public function __construct($name,$dui,$can_ing,$cant_ret){

            $this->nombre = $name;
            $this->dui = $dui;
            $this->cantidad_ingersada = $can_ing;
            $this->cantidad_retirar = $cant_ret;

        }

        public function crearCuenta(){
            if ($this->cantidad_ingersada < 10){

                echo "El minimo para abrir una cuentan es de $10 dolares.";

            }
            else{
                echo "Felicidades!, Has creado una cuenta bancaria";
                $this->fodo= $this->fodo + $this->cantidad_ingersada;
            }
        }

        public function consultar(){
            echo "<br>";
            echo "-----------------------------------------------------------";
            echo "<br>";
            echo "<br>";
            echo "Informacion de la cuenta:";
            echo "<br>";
            echo "----------------------------";
            echo "<br>";
            echo "Propietario: ".$this->nombre;
            echo "<br>";
            echo "Fondo: ".$this->fodo;
        }

        public function abonar(){
            echo "<br>";
            echo "-----------------------------------------------------------";
            echo "<br>";
            echo "<br>";
            echo "Informacion de abono de la cuenta:";
            echo "<br>";
            echo "----------------------------";
            echo "<br>";
            echo "Propietario: ".$this->nombre;
            echo "<br>";
            echo "Uiltilo abono: ".$this->cantidad_ingersada;
            echo "<br>";
            echo "Fondo: ".$this->fodo;
        }

        public function retiro(){
            echo "<br>";
            echo "-----------------------------------------------------------";
            echo "<br>";
            echo "<br>";
            echo "Informacion de retiro de la cuenta:";
            echo "<br>";
            echo "----------------------------";
            echo "<br>";
            echo "Propietario: ".$this->nombre;
            echo "<br>";
            echo "Uiltilo retiro: ".$this->cantidad_retirar;
            echo "<br>";
            echo "Fondo: ".$this->fodo - $this->cantidad_retirar;
        }


    }
    $nombre1 = "Melvin";
    $dui1 = "1234567-8";
    $ingreso = 10;
    $retiro = 0;

    $banco = new Banco($nombre1,$dui1,$ingreso,$retiro);
    $banco->crearCuenta();
    if($ingreso >= 10){
        $banco->consultar();
        $banco->abonar();
        $banco->retiro();
    }
   

?>