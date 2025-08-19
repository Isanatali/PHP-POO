<?php

class Caneta {
            // atributos
            public $modelo;
            public $cor;
            private $ponta;
            protected $carga;
            protected $tampada;

            public function rabiscar() {

                // só vai rabiscar, se estiver destampada
                //se $c1 tiver tampada = true
                if ($this->tampada) {
                    echo '<p>ERRO! Não posso rabiscar</p>';
                } else {
                    echo '<p>Estou rabiscando</p>';
                }
            }

            public function tampar() {
                $this->tampada = true;
            }

            public function destampar() {
                $this->tampada = false;

            }
        }

?>