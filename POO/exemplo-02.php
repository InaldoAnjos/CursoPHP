<?php

    class Carro{
        private $modelo, $ano, $cor; //atributos do tipo private
        
        public function getModelo(){ //método do tipo get(pegar) -> "pega" os valores que estão nos atributos
            return $this -> modelo;
        }
        public function setModelo($value){ //método do tipo set(definir) ->  "definir" os valores
            $this -> modelo = $value;
        }
        
        public function getAno():int{//método do tipo get(pegar)
            return $this -> ano;
        }
        public function setAno($value){//método do tipo set(definir)
            return $this -> ano = $value;
        }
        
        public function getCor(){//método do tipo get(pegar)
            return $this -> cor;
        }
        public function setCor($value){//método do tipo set(definir)
            $this -> cor = $value;
        }

        public function exibir(){
            return array(
                "modelo" => $this -> getModelo(),
                "ano" => $this -> getAno(),
                "cor" => $this -> getCor()
            );
        }
    }//fechando a classe Carro

    $golf = new Carro(); //declaração de uma variável do tipo Classe
    $golf -> setModelo("Golf GTI"); //para definir um valor é necessário passar o método
    $golf -> setAno("2022");
    $golf -> setCor("Vermelho");

    print_r($golf->exibir()) . "<br>";
    var_dump($golf->exibir());

?>