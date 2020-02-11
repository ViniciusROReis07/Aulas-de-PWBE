<?php
#Inicializar as variaveis em vazio
$n1=0;
$n2=0;
$n3=0;
$n4=0;
$media="";
    

    #Isset () - verifica a existencia de uma variavel ou objeto
if(isset($_GET["sbtCalcular"]))
    {
                #Resgata os valores digitado pelo usuario
            $n1 =$_GET['txtNota1'];
            $n2 =$_GET['txtNota2'];
            $n3 =$_GET['txtNota3'];
            $n4 =$_GET['txtNota4'];
                #processamento do calculo

            $media = ($n1+$n2+$n3+$n4)/4;

    }

    



?>

    





<!DOCTYPE HTML>
    <HTML>
        <head>
            
            <meta charset="utf-8">
             <title>Media</title>
                <style>
                    .conteiner{
                        height:inherit;
                        width: 1000px;
                        margin: auto;
                       
                    }
                    h1, h2{
                        font-family: fantasy;
                        font-size: 30px;
                        padding-left: 400px;
                        color: white;
                    }
                    h2{
                        font-size: 20px;
                        color: black;
                    }
                    p{
                        font-family: monospace;
                        font-size: 20px;
                        text-align: center;
                        color: white;
                    }
                    form{
                        margin-left: 370px;
                        width: 50px;
                    }
                    #conteinerMae{
                        height: 600px;
                        width: 1000px;
                        margin: auto;
                         background-color: black;
                    }
                    #areaEntradaDados{
                        height: 300px;
                        width: 1000px;;
                        background-color: white;
                    }
                    #rodape{
                        height: 190px;
                        width: 1000px;
                        background-color: blue;
                        color: red;
                    }
        
                </style>
        </head>
        <body>
           <div id="conteinerMae">
             <div class="conteiner">
               <h1> Calculo de medias</h1>
                 <div id="areaEntradaDados">
                     <div class="conteiner">
                       <h2> Dados</h2>
<!--                         form apenas aonde vai se retirar dados-->
                            <form name="frmFormularios" action="media.php" method="get">
                                Nota 1:<input type="text" name="txtNota1" value="<?php echo($n1)?>" maxlength="5">
                                <br><br>
                                    
<!--   @ antes de um erro ira esconter ele                             -->
                                Nota 2:
                                    <input type="text" name="txtNota2" value="<?=$n2?>" maxlength="5" >
                                    <br><br>
                                Nota 3:
                                    <input type="text" name="txtNota3" value="<?=$n3?>" maxlength="5">
                                    <br><br>
                                Nota 4:
                                    <input type="text" name="txtNota4" value="<?=$n4?>" maxlength="5">
                                    <br><br>
                                
                                <input type="submit" name="sbtCalcular"
                                value="Calcular">
                                
                                
                            </form>
                     </div>
                </div>
                <div id="rodape">
                    <div class="conteiner">
                       <p> A media : <?php echo($media); ?> </p>
                       
                    </div>
                 
                </div>
             </div>
           </div>
        
        </body>
    </HTML>