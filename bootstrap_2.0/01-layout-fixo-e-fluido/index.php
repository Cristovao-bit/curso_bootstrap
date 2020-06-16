<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="curso de bootstrap para iniciantes do PontoCanal">
        <title>Estrutura e Configuração Básica, Layouts Fixo e  Fluido na Prática</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <!--Layout Fluido 1170px-->
        <section class="container-fluid">
            <div class="row-fluid">
                <div class="span8 bloc3">Span8 no Layout Fluido</div>
                <div class="span4 bloc4">Span4 no Layout Fluido</div>
            </div>
        </section>
        
        <br>
        
        <!--Layout Fixo 940px-->
        <section class="container">
            <div class="row">
                <div class="span8 bloc1">Span8 - cada coluna:70px e o espaço entre elas:30px | Tamanho Coluna: 560px + Espaços Coluna: 210px = 770px total </div>
                <div class="span4 bloc2">Span4 - Tamanho C.:280px + Espaço C.:90px = 370px total</div>
            </div>
        </section>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
