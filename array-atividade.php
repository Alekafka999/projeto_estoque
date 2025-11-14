<?php
$prods = array("Caneta", "Lápis", "Borracha");

array_push($prods, "Apontador");

array_shift($prods);

array_pop($prods);

if(in_array("Apagador", $prods)){
    echo "Tem esse carro";
}else{
    echo "Não tem esse carro";
    }


var_dump($prods);


for($cont=0; $cont < count($prods); $cont++){     
echo "<br>";          
echo $prods[$cont];
}

foreach($prods as $prod){     
    echo "<br>";     
    echo $prod; 
}


?>