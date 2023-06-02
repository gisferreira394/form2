<?php

 $altura =$_POST["altura"]; //essa variavel vai rceber as informaçoe
 $idade =$_POST["idade"] ;

 if($altura && $idade == "")

 echo "Digite os valores ";


else {

    echo "Sua idade é " . $idade . "com altura de " . $altura;
}

?>