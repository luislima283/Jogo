<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
</head>
<bodyclass="bg-light">

<?php
include "topo.php";
?>

 <div class="container bg-white">
     <?php  session_start();

     $nome = $_SESSION['nome'];

     ?>

    <div class="row ">


         <div class="col-sm-6 offset-3 text-center mt-3" >


      <form method="POST" action="verifica_numero.php">
        <div class="form-group">
           <?php
           echo "<h1>$nome tente descobrir o número sorteado entre 1 e 10 </h1>";
           //exibe numero na tela para testes
           //echo $_SESSION['numero_sorteado'];
           ?>

             <input type="text" name="numero" autofocus="autofocus">
          </div>
               <button type="submit" class="btn btn-primary form-control">
                 verificar número
               </button>

      </form>
             <?php
             // if para verificar se o numero foi informado
             if (@$_POST['numero']>''){

                 $numero = $_POST['numero'];//numero informado pelo usuario

                 //verficar se o numero digitado pelo usuario é igual ao numero sorteado que esta na session
                 $numero_sorteado = $_SESSION['numero_sorteado'];

                 //verificar se o numero digitado pelo usuario é igual ao numero sorteado que esta na session
              if($numero < $numero_sorteado){

                  echo "<p> Você errou, o número sorteado é maior que $numero </p>";

              }elseif ($numero > $numero_sorteado){

                  echo "<p> Você errou, o número sorteado é menor que $numero </p>";

              }else{

                  echo "<p> Parabéns, você acertou, o nùmero sorteado é $numero 
                  <br>
                  <a href='sorteia_numero.php'button type=\"submit\" class=\"btn btn-primary form-control\">Jogar novamente</a>
                  </p>";
              }

             }// fim if principal
             ?>

       </div>

     </div>
     
    </div>



</body>

</html>

