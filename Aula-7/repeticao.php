<?php

    $cont = (integer) 1;
    $valor1 = (integer)0;

    if(isset($_POST['sbtCalcular']))
    {
        $valor1 = $_POST['txtNumero'];
        
        echo("********** While *******************");
        
        while($cont<= $valor1)
        {
            echo("<br>".$cont);
            $cont++;
        }
        
        echo("*******************************for************");
        
        for($i=(int) 1; $i<=$valor1;$i++){
            echo("<br>".$i);
        }
    }



?>







<!DOCTYPE>
<html lang="pt-br">
    <head>
        <title>Aula PHP</title>
        <style>
            body{
                background-color: darkred;
                color: aliceblue;
            }
        
        </style>

    </head>
    <body>
            <form name="frmRepeticao" method="post" action="repeticao.php">
                Digite um numero:
                    <input type="text" name="txtNumero" value=" " maxlength="6">
                    <input type="submit" name="sbtCalcular" value="Calcular">
                

                
                
            
            
            </form>
        
    
    </body>
</html>