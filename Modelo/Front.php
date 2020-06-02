<?php
    class Front{
        private $idF;
        private $imgF;
        private $titulo;
        private $descricao;
        private $coment;
        
        public function getIdF(){
            return $this->idF;
        }
        public function getImgF{
            return $this->imgF;
        } 
        public function getTit(){
            return $this->titulo;
        }
        public function getDesc(){
            return $this->descricao;
        }
        public function getComent(){
            return $this->coment;
        }
        public function setIdF($iF){
            $this->idF = $iF; 
        }
        public function setImgF($imF){
            $this->imgF = $imF;
        }
        public function setTit($t){
            $this->titulo = $t;
        }
        public function setDesc($d){
            $this->descricao = $d;
        }
        public function setComent($c){
            $this->coment = $c;
        }
    }
?>  
