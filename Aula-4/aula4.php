<?php
    #Padroniza a saida de acordo com a regionalidade
    setlocale(LC_ALL, "pt_BR;")
/*
    $valor1="";
    $valor2="";

    $resultado=0;

    $opcao="";

      if(isset($_GET["sbtcalcular"]))
            {
                $opcao=$_GET["rdoOperacao"];
               if($opcao=="soma")
                {
                    $resultado=$valor1+$valor2;

                  }

            }

     */

#Decalaraçao de variaveis
        //Declaração de variavel com tipos de dados
            /*
                Tipos de dados php
                
                    int ou integer - numeros inteiros
                    float - numeros reais
                    double - numeros reais, com uma maior capacidade para amazenar
                    string - caracteres (texto)
                    boolean/bool - verdadeiro ou falso
                    
                    array - matriz de dados
                    object - objeto
                    
            */

    $valor1= (float) 0;

    $valor2= (float) 0;
    #inicilizando a variavel em branco
    $opcao=(string)null;
    $resultado= (double)0;
    $chkSubtrair= (string)null;
    

    
    

    //Constantes podemos utilizar o comando define ou const 

    define("ERRO_CAIXA_VAZIA", "<span class='msg'>Por favor inserir dados validos nas caixas de texto nao e possivel realizar calculos vazio!</span>");

    const ERRO_CARACTER_INVALIDO = "<span class='mgs'>Caracter digitado nao pode ser texto , por favor inserir apenas numeros validos</span>";

    const ERRO_OPERACAO_INVALIDA = "<span class='mgs'>Por favor escolha uma operação para ser calculada !</span>";

    #Recebendo dados enviados pelo formulario
    #ele converte de acordo com o que foi atribuido
    

    #gettype() retorna o tipo de dado da variavel
    #print(gettype($valor1));
    #settype() força a conversao para o tipo de dados que deseja atribuir
    #print_r(settype($valor2, float));
    

    
    #var_dump() retorna toda a estrutura de dados de um elemento
        
    
    #strtoupper - converte conteudo para maiusculo
    #strtolower - converte conteudo para minusculo
    #Verifica se o formulario foi submetido pelo botão
       if(isset($_POST['sbtcalcular']))
       {
                #str_replace() permite localizar um caracter e substituir por outro
                $valor1=str_replace(",",".",$_POST["txtValor1"]);
                $valor2=str_replace(",",".",$_POST["txtValor2"]);
                #strtoupper - converte o conteudo em Maisculuco
                #strtolwer - converte o numero em minusculo
           //Tratamento para validar se a operacao foi escolhida pelo usuario
           //precisamos usar o isset(), pois o elemento do radio nao e enviado quando nao for selecionado
           
           if(!isset($_POST['rdoOperacao']))
            {
               echo(ERRO_OPERACAO_INVALIDA);
           }else{
               $opcao= strtolower($_POST["rdoOperacao"]);
           

                    #podemos verificar se a caixa esta vazia com igualdade
                    #ou podemos usar a funcao empty()
                    #is_numeric verifica se e tipo numerico

                if(empty($valor1) || empty($valor2))
                {
                        echo(ERRO_CAIXA_VAZIA);
                }
                 elseif(!is_numeric($valor1) || !is_numeric($valor2))
                    {
                        echo(ERRO_CARACTER_INVALIDO);
                    }
                    else{
                     //Convertendo as variaveis que viraram string em numero
                    settype($valor1, "float");
                    settype($valor2, "float");

                    if($opcao == "soma")
                        $resultado = $valor1 + $valor2;
                    elseif($opcao == "subtrair")
                    {
                        $resultado = $valor1 - $valor2;
                        $chkSubtrair = 'checked';
                    }
                    elseif($opcao == "multiplicar")
                        $resultado = $valor1 * $valor2;
                    elseif ($opcao == "divisao")
                        $resultado = $valor1 / $valor2;
                    }
               
           }
               
        }


       
    
    


?>



<!DOCTYPE>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
        <title>Aula PHP - 4</title>
        
        <style>
            #conteiner{
                height: inherit;
                width: 600px;
                margin: auto;
                padding: auto;
                
                
            }
             h1{
                height: 50px;
                color: white;
                font-family: monospace;
                letter-spacing: 2px;
                 padding-top: 20px;
                 margin-left: 100px;
                 box-sizing: border-box;
            }
          
            #conteinerMae{
                height: 650px;
                width: 600px;
                margin: auto;
                
            }
            #conteinerTitulo{
                height: 150px;
                width: inherit;
                background-color: black;
            }
            .conteinerValores{
                height: 200px;
                width: inherit;
                padding-top: 40px;
                text-align: center;
                box-sizing: border-box;
            }
            .conteinerOpcoes , .conteinerResultado{
                height: 300px;
                width: 300px;
                float: left;
                padding-top: 40px;
                box-sizing: border-box;
                
            }
            .conteinerResultado{
                background-color: blue;
            }
           
            span{
                height: 80px;
                font-weight: bolder;
                font-size: 80px;
                padding-left: 120px;
            }
            .msg{
                width: 100%
                heigth:10px;
                border: solid 2px #00000;
                text-align: center;
                font-family: verdana;
                
            }
        
        
        
        </style>
        
        
    </head>
    <body>
        <div id="conteinerMae">
            <div id="conteiner">
                <div id="conteinerTitulo">
                    <h1>Calculadora simples</h1>
                
                </div>
                <form name="frmExercicio2" method="post" action="aula4.php">
                    <div class="conteinerValores">

                            Valor 1:
                            <input type="text" name="txtValor1" value="<?=$valor1?>" maxlength="15"><br><br>

                            Valor 2:
                            <input type="text" name="txtValor2" value=" <?=$valor2?> " maxlength="15"><br><br>




                    </div>
                    <div class="conteinerOpcoes">
<!--     Tres formas diferentes para continuar marcada a opcao anterior  -->
                        <input type="radio" name="rdoOperacao" value="soma" <?php if($opcao == 'soma')   #Forma com if else
                                                                                    echo ('checked')
                                                                                        ?>>Soma<br><br>
                        <input type="radio" name="rdoOperacao" value="subtrair" <?=$chkSubtrair?>>Subtrair<br><br><!--Forma com variavel -->
                        <input type="radio" name="rdoOperacao" value="multiplicar" <?=$opcao ==  "multiplicar" ? 'checked' : ''?>  >Multiplicar<br><br><!-- operador de comparacao ternario -->
                        <input type="radio" name="rdoOperacao" value="divisao" <?=$opcao == "divisao" ? 'checked' : ''  ?>>Divisao<br><br>
                        
                        
                        <input type="submit" name="sbtcalcular" value="Calcular">

                    </div>
                    <div class="conteinerResultado">
<!--                                        roud()- serve para limitar o numero de casas apos a virgula                  -->
                              <span><?php echo(round($resultado, 3)) ?> </span>
                    
                    </div>
               </form> 
            </div>
        </div>
    </body>
</html>