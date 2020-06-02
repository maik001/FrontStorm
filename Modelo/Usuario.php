<?php
    class Usuario{
        private $idU;
        private $imgU;
        private $nome;
        private $user;
        private $email;
        private $senha;
        
        public function getIdU(){
            return $this->idU;
        }
        public function getImgU(){
            return $this->imgU;
        } 
        public function getNome(){
            return $this->nome;
        }
        public function getUser(){
            return $this->user;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setId($iU){
            $this->idU = $iU; 
        }
        public function setImgU($imU){
            $this->imgU = $imU;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setUser($u){
            $this->user = $u;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
    }
?>  
