<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Formularios - Parte 01</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <form action="">
                        <input type="text" class="input-block-level"/>
                    </form>
                    <form>
                        <input class="input-mini" type="text" placeholder="campo de texto"/><br>
                        <input class="input-small" type="text" placeholder="campo de texto"/><br>
                        <input class="input-medium" type="text" placeholder="campo de texto"/><br>
                        <input class="input-large" type="text" placeholder="campo de texto"/><br>
                        <input class="input-xlarge" type="text" placeholder="campo de texto"/><br>
                        <input class="input-xxlarge" type="text" placeholder="campo de texto"/>
                    </form>
                    <form>
                        <div class="controls">
                            <input type="text" class="span5"/>
                        </div>
                        
                        <div class="controls controls-row">
                            <input type="text" class="span4"/>
                            <input type="text" class="span1"/>
                        </div>
                    </form>
                </div>
            </div>
        </article>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
