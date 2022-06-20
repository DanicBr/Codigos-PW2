<?php 
class Contato{	
	private $id; 
	private $nome;
	private $senha;
	private $pdo;

	public Function getId(){
		return $this->id;
	}
	public Function getnome(){
	 	return $this->nome;
	}
	public Function getsenha(){
	 	return $this->senha;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

    function setSenha($senha){
    	$this->senha = $senha;
    }

	public function __construct(){

		$dns   = "mysql:dbname=contato;host=localhost";
		$user  = "root";
		$senha = "";

		try {
			$this->pdo = new PDO($dns, $user, $senha);
			echo "Conectado ao banco!";
		} catch (Exception $e) {
			echo "Tente mais tarde!!";
			
		}	
	}

	public function adicionarContato($nome, $senha, $email){
		$cmd = "INSERT INTO contatos set nome = :n, senha = :s, email =:e";
		$cmd = $this->pdo->prepare($cmd);
		$cmd->bindvalue(":n" , $nome);
		$cmd->bindValue(":s" , $senha);
		$cmd->bindvalue(":e" , $email);

		if($cmd->execute()){
			return true;
		}else{
			echo "Não consegui inserir o registro!";
		}
	}
}








