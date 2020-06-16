<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Formulários - Parte 02</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <form action="" class="form-search">
                        <input type="text" class="input-medium search-query"/>
                        <button class="btn">Busca</button>
                    </form>
                    <form action="" class="form-inline">
                        <input type="text" class="input-small" placeholder="Email"/>
                        <input type="text" class="input-small" placeholder="Password"/>
                        <button class="btn">Entrar</button>
                    </form>
                    <form action="" class="form-horizontal">
                        <div class="control-group">
                            <label for="" class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" id="inputEmail"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label for="" class="control-label">Password</label>
                            <div class="controls">
                                <input type="password" id="inputPassword"/>
                                <button class="btn">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
