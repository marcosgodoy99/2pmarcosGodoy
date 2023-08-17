<?php 

//EJERCICIO 1
/*function sumadenumeros ($arreglo){

    $resultado = 0;

    foreach($arreglo as $posicion){

    $resultado = $posicion + $resultado; 

    };

    return $resultado;

};

$aux = [15,27,32,4,65];

$resultado = sumadenumeros($aux)

print_r ($resultado);*/


//EJERCICIO 2
/*$arreglo = [1,6,7,2,3,9,77,4,8,90];

sort($arreglo);

print_r($arreglo);*/

// EJERCICIO 3  
/*$arreglo = [1,3,5,2,6,3,4,1];

$resultado = array_unique($arreglo);

print_r($resultado); */




// EJERCICIO 4

 /* function busqueda($arreglo,$aux){

        $aux1 = [];
        
        $i = 0;
        $z = 0;

        foreach($arreglo as $elemento){
            
            foreach($aux as $elemento2){

                if ($elemento == $elemento2){

                    $aux1[$z] = $i;  
                    $z++;

                   }

            }
         
         $i++;   

        }

        return $arreglo = $aux1;

    };

    $aux = [4,1,5];
    $array=[1,4,5,6,7,2,3];
    $arreglo = busqueda($array,$aux);
    print_r($arreglo);
*/


// EJERCICIO 5
/*
function impares($arreglo){
    
    $aux2 = [];
    $aux = 0;
    $i = 0;

    foreach($arreglo as $elemento){

        $aux = ($elemento % 2);

        if($aux != 0){
           
            $aux2[$i] = $elemento;   
            $i++;
        }
        
        
    }

    return $aux2;
}


$arreglo1 = [1,4,6,7,8];
$arreglo2 = [2,3,5,9];
$resultado = array_merge($arreglo1,$arreglo2);
sort($resultado);
$result=[];
$result = impares($resultado);

print_r($result);

*/






// ARREGLO ASOCIATIVO
$clubes = array(
    "san lorenzo" =>array(
        "jugadores" => array(
            "Nahuel Barrios",
            "Adam Barreiro",
            "Augusto Batalla"
            ) 
    ),
    "independiente" => array(
        "jugadores" => array(
            "Rey",
            "Marcone",
            "cauterucho"
        )
    )
);   

// EJERCICIO 1 ARREGLO ASOCIATIVO
/*
function existejugador ($arreglo,$nombreclub,$nombrejugador){
    $aux = 0;
    foreach($arreglo[$nombreclub]["jugadores"] as $elemento){
        
        if ($nombrejugador == $elemento){

            return "EL JUGADOR: $nombrejugador. EXISTE";
            $aux = 1;
        }
       
    }
    
    if ($aux == 0){
        
        return "EL JUGADOR NO EXISTE";
    }

}


$nombrejugador = "Nahuel Barrios";
$nombreclub = "san lorenzo";

$resultado = existejugador($clubes,$nombreclub,$nombrejugador);

echo($resultado)
*/

// EJERCICIO 2 ARREGLOS ASOCIATIVOS
/*
function queclubjuega($clubes, $nombrejugador) {
    foreach ($clubes as $club => $datos) {
        $jugadores = $datos['Jugadores'];
        foreach ($jugadores as $jugador) {
            if ($jugador === $nombrejugador) {
                return $nombrejugador.' juega en el club ' . $club . '.';
              
            }
           
        }
    }
    return 'No se encontró información sobre el club de Marcone.';
  }
  
  $nombrejugador = "Caute";
  $resultado = queclubjuega($clubes,$nombrejugador);
  echo $resultado;
 */
?>