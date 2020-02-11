<?php

/*

        include()-
        include_once()-faz tratamento no apache para nao importar duas vezes 
        require()-faz basicamente a mesma coisa que include porem mais atual
        require_once()-faz tratamento no apache para nao importar duas vezes
*/
//Import de variaveis e constantes
    require_once('vars.php');

    #Function realiza calculos matematicos (Soma, substração, divisão, multiplicação)
    function calculadora($operacao, $n1, $n2)
    {
        //global deixa o escopo da variavel local para todos os elementos, raramente utilizar pois seria como uma gambiara , so utilizar quando nao for dever da função, so e visivel quando chama a função antes disso nao existe
       $result=(double)0;
       global $chkSubtrair;
                    switch(strtolower($operacao)){
                        case ("soma"):
                            $result = $n1 + $n2;
                            break;
                        case ("subtrair"):
                            $result = $n1 - $n2;
                            $chkSubtrair = 'checked';
                            break;
                        case ("multiplicar"):
                            $result = $n1 * $n2;
                            break;
                        case  ("divisao"):
                            if( $n2 ==  0)
                            {
                                echo(ERRO_DIV_ZERO);
                            }else{
                                $result = $n1 / $n2;
                            break;
                            }
                    }
        return $result;
    }






?>