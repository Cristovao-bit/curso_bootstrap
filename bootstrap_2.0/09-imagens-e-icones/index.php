<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Imagens e Icones</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <!--As classes rounded e circle não vão funcionar no internet explorer 7 e 8.-->
        <section class="container-fluid">
            <article class="row-fluid">
                <img class="img-rounded" src="img/imagens.jpg"/>
                <img class="img-circle" src="img/imagens.jpg"/>
                <img class="img-polaroid" src="img/imagens.jpg"/>
            </article>
        </section>
        
        <section class="container">
            <ul class="inline">
                <li><a href="#!"><i class="icon-home icon-white"></i> Home</a></li>
                <li><a href="#!"><i class="icon-lock"></i> Empresa</a></li>
                <li><a href="#!"><i class="icon-wrench"></i> Serviços</a></li>
                <li><a href="#!"><i class="icon-globe"></i> Blog</a></li>
                <li><a href="#!"><i class="icon-envelope"></i> Contato</a></li>
            </ul>
            
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a href="#!" class="btn"><i class="icon-align-left"></i></a>
                    <a href="#!" class="btn"><i class="icon-align-center"></i></a>
                    <a href="#!" class="btn"><i class="icon-align-right"></i></a>
                    <a href="#!" class="btn"><i class="icon-align-justify"></i></a>
                </div>
            </div>
            
            <form action="">
                <div class="controls input-prepend">
                    <span class="add-on"><i class="icon-user"></i> </span>
                    <input type="text" class="span5" placeholder="Informe Seu Usuário"/>
                </div>
                
                <div class="controls input-prepend">
                    <span class="add-on"><i class=" icon-asterisk"></i> </span>
                    <input type="text" class="span5" placeholder="Informe Sua Senha"/>
                </div>
            </form>
        </section>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
