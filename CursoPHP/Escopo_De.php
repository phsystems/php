<?php
/**
 * Created by PhpStorm.
 * User: Pedro Henrique
 * Date: 16/07/2018
 * Time: 15:07
 */
$nome = "Pedro henrique";

function teste(){
    global $nome;
    echo $nome;
    echo "<br>";
}
function teste2(){
    $nome = "Hcode";
    echo $nome . "Alguma coisa";
    echo $nome .= "treinamento";
    echo "<br>";
}
teste();
teste2();