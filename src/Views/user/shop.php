<?php
    session_start();
    $pedidos = empty($_SESSION['pedidos']) ? [] : $_SESSION['pedidos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<header id="navbar">
   <h2><a href="\index.php">PIZZARIA</a></h2>
   <nav>
      <div>
         <a href="">Entrar</a>
      </div>
   </nav>
</header>
<main id="shop">
   <div id="preview">
      <ul>
         <?php 
            foreach($pedidos as $pedido)
            { 
         ?>
               <li>
                  <?= $pedido['pedidos'] ?>
               </li>
         <?php 
            } 
         ?>
      </ul>
   </div>
</main>
</body>
</html>