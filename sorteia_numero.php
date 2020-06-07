<?php session_start(); //serve para acessar a sessao

if(isset($_POST['nome'])){
 $nome = $_POST['nome'];
 $_SESSION['nome'] = $nome;
}
//para sortear o numero ultilizamos a funçao rand

 $numero_sorteado = rand(1,10);

// criando as variaveis de sessao para armazenar o numero sorteado e o nome do jogador


$_SESSION['numero_sorteado'] = $numero_sorteado;

// comando para direcionar para uma pagina de forma automatica
// header("location:pagina.php") pagina é para onde se direcionada
header("location:verifica_numero.php");

