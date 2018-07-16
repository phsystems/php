<?php
/**
 * Created by PhpStorm.
 * User: Pedro Henrique
 * Date: 29/04/2018
 * Time: 16:26
 */

$nome = "Pedro"; //variaveis sempre inicia com $. nunca colocar $1nome.
$sobreNome = "Henrique<br/>";
$nomeCompleto = $nome." ".$sobreNome; //concatenação o ponto(.) e como colocar espaço


echo $nomeCompleto;
//exit; // para programa aqui.
$anoNascimento = "1985<br/>";


echo $nome, $anoNascimento; // echo para imprimir na tela
//unset($anoNascimento); // Destroi variavel apatir.

if (isset($anoNascimento)){ // isset ve se a variavel existe.
    echo $anoNascimento;
}
var_dump($nome);//vai me mostrar o tipo de variavel e o tamanho.

$nome1 = "Hcode"; //variavel tipo String colocasse aspas pois é uma texto.
$site = 'www.hcode.cpm.br';

$ano = 1990; // variavel tipo interio nao vai aspas pois é um numero.
$anoN = "1990"; // por exemplo agora virou um texto pois esta entre aspas.
$salario = 5500.99; // variavel tipo double ou ponto flutuante.
$bloqueado = false; // variavel tipo booleana.


$frutas = array("Abacaxi", "laranja", "manga");// Variaveis tipo array/ compostas

echo $frutas[2]; //Vai imprimir a manga pois comeca o arry no 0.
$nascimento = new DateTime(); //orientado a objeto.
var_dump($nascimento);

$arquivo = fopen("exemplo-01.php", "r"); // ele Leo um arquivo.
echo "<br/>"; // quebra linha.
var_dump($arquivo);

echo "<br/>";
$nulo = null; // a variavel é nula.
$vazio = ""; //variavel vazia esta ali mas nao tem um valor.


$nomee = (int)$_GET["a"];
//var_dump($nomee);
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
$ipp = $_SERVER["SCRIPT_NAME"];
echo $ipp;

