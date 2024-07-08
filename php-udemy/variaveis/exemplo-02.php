<?php 

    $anoNascimento = 1996;
    echo "$anoNascimento";

    unset($anoNascimento);

    if(isset($anoNascimento)){
        echo "$anoNascimento";
    }
    else {
        echo "Variável não existe";
    }

    

?>