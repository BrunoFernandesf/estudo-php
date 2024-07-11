<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar"> 
</form>
<?php
    foreach($_GET as $index => $value){
        echo "Nome do campo: $index";
        echo "<br>";
        echo "Valor do campo: $value";
        echo "<hr>";
    }
?>