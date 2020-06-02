<?php
session_start();
require_once("UsuarioControle.php");
try{
    $arquivo = $_FILES['upload'];
    $usuario = new Usuario();
if($arquivo['name'] != ""){
    $a = file_get_contents($arquivo['tmp_name']);
    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setUser($_POST['user']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha(md5($_POST['senha']));
    $control = new UsuarioControle();
    if($control->inserir($usuario,$a)){
        header("location: ../userLogado/indexlog.php");
    }else{
        echo "Erro ao Inserir";
    }
}
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}
  
?>
