<?php
require_once("Conexao.php");
require_once("../Modelo/Usuario.php");
class UsuarioControle{
	function update($idU, $usuario){
            try{
                $conexao = new Conexao();
                $imgUs = $usuario->getImgU();
                $nome = $usuario->getNome();
                $user = $usuario->getUser();
                $email = $usuario->getEmail();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("UPDATE usuario SET imgU = :is, nome = :n, user = :u, email = :e, senha = :s WHERE id=:id;");
                $cmd->bindParam("id", $idU);
                $cmd->bindParam("is", $imgUs);
                $cmd->bindParam("n", $nome);
                $cmd->bindParam("u", $user);
                $cmd->bindParam("e", $email);
                $cmd->bindParam("s", $senha);              
				if($cmd->execute()){
					return true;
				}else{
					return false;
				}
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
    
    
        
        function remover($idU){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM usuario WHERE id=:id;");
                $cmd->bindParam("id", $idU);
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro de PDO: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        
    
        function selecionarTodos(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        function inserir($usuario,$a){
            try{
                $conexao = new Conexao();
                $imgUs = $a;
                $nome = $usuario->getNome();
                $user = $usuario->getUser();
                $email = $usuario->getEmail();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO usuario(imgU,nome,user,email,senha) VALUES(:iu,:n,:u,:e,:s);");
                $cmd->bindParam("iu",$imgUs);
                $cmd->bindParam("n", $nome);
                $cmd->bindParam("u", $user);  
                $cmd->bindParam("e", $email);
                $cmd->bindParam("s", $senha);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        function selecionarPid($idU){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE id=:id;");
                $cmd->bindParam("id", $idU);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        function login($usuario){
            try{
                $conexao = new Conexao();
                $nome = $usuario->getUser();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE user = :u AND senha = :p;");
                $cmd->bindParam("u",$nome);
                $cmd->bindParam("p",$senha);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS,"Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        
        }
    }
?>
