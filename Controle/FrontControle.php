<?php
require_once("Conexao.php");
require_once("../Modelo/Front.php");
class UsuarioControle{
	function update($idF, $front){
            try{
                $conexao = new Conexao();
                $imgF = $front->getImgF();
                $titu = $front->getTit();
                $des = $front->getDesc();
                $come = $front->getComent();
                $cmd = $conexao->getConexao()->prepare("UPDATE front SET imgF = :if, titulo = :t, descricao = :d, coment = :c WHERE id=:id;");
                $cmd->bindParam("id", $idF);
                $cmd->bindParam("if", $imgF);
                $cmd->bindParam("t", $titu);
                $cmd->bindParam("d", $des);
                $cmd->bindParam("c", $come);            
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
    function remover($idF){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM front WHERE id=:id;");
                $cmd->bindParam("id", $idF);
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
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM front;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Front");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
    function inserir($front){
            try{
                $conexao = new Conexao();
                $imgF = $front->getImgF();
                $titu = $front->getTit();
                $des = $front->getDesc();
                $come = $front->getComent();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO front(imgF,titulo,descricao,coment) VALUES(:if,:t,:d,:c);");
                $cmd->bindParam("if", $imgF);
                $cmd->bindParam("t", $titu);
                $cmd->bindParam("d", $des);
                $cmd->bindParam("c", $come);         
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
    function selecionarPid($idF){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM front WHERE id=:id;");
                $cmd->bindParam("id", $idF);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Front");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
    