<?php

class Caneta {
            // atributos
            var $modelo;
            var $cor;
            var $ponta;
            var $carga;
            var $tampada;

            function rabiscar() {

                // só vai rabiscar, se estiver destampada
                //se $c1 tiver tampada = true
                if ($this->tampada) {
                    echo '<p>ERRO! Não posso rabiscar</p>';
                } else {
                    echo '<p>Estou rabiscando</p>';
                }
            }

            function tampar() {
                $this->tampada = true;
            }

            function destampar() {
                $this->tampada = false;

            }
        }

?>