<?php

$id = $_GET['id'];

$margueritap = $_POST["margueritap"];
$margueritam = $_POST["margueritam"];
$margueritag = $_POST["margueritag"];
$margueritagg = $_POST["margueritagg"];
$calabresap = $_POST["calabresap"];
$calabresam = $_POST["calabresam"];
$calabresag = $_POST["calabresag"];
$calabresagg = $_POST["calabresagg"];
$portuguesap = $_POST["portuguesap"];
$portuguesam = $_POST["portuguesam"];
$portuguesag = $_POST["portuguesag"];
$portuguesagg = $_POST["portuguesagg"];
$frangop = $_POST["frangop"];
$frangom = $_POST["frangom"];
$frangog = $_POST["frangog"];
$frangogg = $_POST["frangogg"];
$mussarelap = $_POST["mussarelap"];
$mussarelam = $_POST["mussarelam"];
$mussarelag = $_POST["mussarelag"];
$mussarelagg = $_POST["mussarelagg"];
$queijop = $_POST["queijop"];
$queijom = $_POST["queijom"];
$queijog = $_POST["queijog"];
$queijogg = $_POST["queijogg"];
$cebola = $_POST["cebola"];
$extraqueijo = $_POST["queijoex"];
$bacon = $_POST["bacon"];
$borda = $_POST["borda"];


$pedidos = [
    $margueritap  , $margueritam , $margueritag , $margueritagg , $calabresap , $calabresam , $calabresag , $calabresagg ,  $portuguesap , $portuguesam ,
    $portuguesag  ,$portuguesagg , $frangop     , $frangom      , $frangog    , $frangogg   , $mussarelap ,
    $mussarelam   , $mussarelag  , $mussarelagg , $queijop      , $queijom    , $queijog    , $queijogg   , $cebola      , $extraqueijo  , $bacon       , 
    $borda
];

session_start();

if(empty($_SESSION['pedidos'])){
    $_SESSION['pedidos'] = [];
}


$_SESSION['pedidos'][] = [
    'id' => $id,
    'pedidos' => $pedidos
];

header('Location: /src/Views/user/shop.php');

?>