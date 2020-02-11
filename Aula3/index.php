<!DOCTYPE HTML>
   <html>
        <head>
        <meta charset="utf-8">
        <title>Aula de Formularios</title>
            <style>
                textarea{
/*  Trava a caixa com barra de rolagem                  */
                    resize: none;
                }
            
            </style>
        </head>
        <body>
<!--     Todos os elementos de formularios , prescisam estar entre a tag form para conserguirmos retirar-los
para o php 
        
        action - define para qual pagina sera enviado os dados dos itens do form 

        method (get/post) - define como sera a retirada dos itens do form (get envia para a URL e post envia por variaveis(ocultas) no proprio navegador)


        maxlength - limita o numero de caracteres que a caixa ira receber

-->
            <form name="frmFormularios" action="index.php" method="get">
                Nome: <input type="text" name="txtNome" value="" size="40" maxlength="11"><br>
                 <br><br>
                Estado:
<!-- Cria aquele menu que desce para vc escolher a opçao                -->
                <select name="sltEstado" >

<!-- o formulario retira os elementos dentro do select  , para tira voce atribue um value                 -->
                    <option value="">Selecione um item</option>
                    <option value="RJ" > Rio de Janeiro / RJ</option>
                    <!-- selected forca um valor a aparecer                   -->
                    <option value="SP" selected>Sao Paulo  / SP</option>
                    <!-- Opçoes do select   -->
                </select>
                <br><br>
<!--radio e mais simples , cada radio sera uma opcao que sera o que ta no value  , radio e o unico elemento que os name sao iguais e cria um grupo              -->
<!-- Type="radio " - permite dar opçoes de escolha epara forçar apenas uma escolha precisamos deixar o elemento com o mesmo nome , checked força a uma opçao a ja ser selecionado      -->
                
                Sexo: 
                <input type="radio" name="rdoSexo" value="F" >Feminino
                <input type="radio" name="rdoSexo" value="M">Masculio
                <input type="radio" name="rdoSexo" value="Outros" checked>Outros
            
                
                 <br><br>
<!-- checkbox - cria um campo para prencher onde pode marcar mais de um valor               -->
                Idiomas
                <input type="checkbox" name="ckxPort" value="pt" checked>Português
                <input type="checkbox" name="ckxing" value="en">Ingles
                <input type="checkbox" name="ckxIta" value="it">Italiano
                
                 <br><br>
                OBS:
<!-- Cria uma caixa de texto maior com barra de rolagem , cols quantia - coluna , rows - quantia de  linha, nao se pode dar espaçamento entre a abertura e fechamendo gera bug , outro bug e mexer com a dimensao para nao permirtir editar no css -->
                <textarea name="txtObs" cols="15" rows="10"></textarea>
                <br><br>

                Senha:
<!--Caixa de texto para senha , nao aparece o q digita                -->
                <input type="password" name="txtSenha" value="">
                
                <br><br>
                
                <input type=submit name="sbtSalvar" value="Salvar">
<!--    reset limpa os elementos       -->
                <input type="reset" name="rstSalvar" value="Limpar">
                
                
            </form>
            
            
       </body>   
   </html>
