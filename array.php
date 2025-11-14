<?php

// exemplo de variável
//$fruta = "Banana";

//exemplo de constante
//define("FRUTA", "Laranja");

//$fruta = "Maçã";

//echo FRUTA; //exibe o valor da contante fruta

// criar uma constante com array


$frutas = ["Banana", "Laranja", "Maçã"];
//echo "<pre>";
//var_dump($frutas);

echo $frutas[0]; //exibe o valor da primeira posição do array
echo $frutas[1];
echo $frutas[2];

$carros = array("Gol", "Fusca", "Uno");

echo "<br>";

echo "<h1> $carros[0] </h1>"; //exibe o valor da primeira posição do array

echo count($carros); //exibe a quantidade de elementos do array

//procurar registro no array
echo "<br>";

if(in_array("Golf", $carros)){
    echo "Tem esse carro";
}else{
    echo "Não tem esse carro";
    }
//exibe a estrutura do array em forma de looping

for($cont=0; $cont < count($carros); $cont++){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $carros[$cont];
}
echo "<br>
foreach($carros as $carro){
    echo "<br>";
    echo $carro;
}

//exit; //saída!!

array_push($carros, "Celta"); //adiciona um novo elemento no final do array

echo "<pre>";
var_dump($frutas);
var_dump($carros); //exibe todos os elementos do array

array_shift($carros); //remove o primeiro elemento do array


var_dump($carros); //exibe todos os elementos do array
echo "</pre>";
array_pop($carros); //remove o último elemento do array

unset($carros[2]); //remove o elemento da posição 1 do array


echo "<hr>";
echo "<h1>Array Associativo</h1>";

$cliente =[
"nome" => "Alessandra";
"email" => "alesankafka@gmail.com";
"telefone" => "(35) 997320084":
];

echo "<pre>";
var_dump($cliente);

echo $cliente['nome'];


?>