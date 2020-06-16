<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Formulários - Parte 03</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <form action="" class="form-horizontal">
                    
                    <div class="controls input-prepend">
                        <span class="add-on">@</span>
                        <input type="text" id="prependInput" placeholder="Informe Seu Twitter"/>
                    </div>
                    
                    <div class="controls controls-row">
                        <div class="input-append">
                            <input type="text" id="appendInput"/>
                            <span class="add-on">.00</span>
                        </div>
                    </div>
                    
                    <div class="input-append">
                        <input type="text" id="prependInput" placeholder="Campo de texto"/>
                        <button class="btn">Entrar</button>
                        <button class="btn">Sair</button>
                    </div>
                    
                    <div class="control-group">
                        <label for="" class="control-label">Email</label>
                        <div class="controls">
                            <input type="email" id="inputEmail" required/>
                        </div>
                    </div>
                    
                    <div class="controls">
                        <input type="email" id="inputEmail" disabled/>
                    </div>
                    
                    <span class="uneditable-input">Input Desabilitado</span>
                    
                    <div class="control-group warning">
                        <label class="control-label">Input com Aviso!</label>
                        <div class="controls">
                            <input type="text"/>
                            <span class="help-inline">Alguma coisa deu Errado!</span>
                        </div>
                    </div>
                    
                    <div class="control-group error">
                        <label class="control-label">Input com Erro!</label>
                        <div class="controls">
                            <input type="text"/>
                            <span class="help-inline">Por favor, corrija o Erro!</span>
                        </div>
                    </div>
                    
                    <div class="control-group info">
                        <label class="control-label">Input com Informação!</label>
                        <div class="controls">
                            <input type="text"/>
                            <span class="help-inline">Este campo é obrigatório!</span>
                        </div>
                    </div>
                    
                    <div class="control-group success">
                        <label class="control-label">Input com Sucesso!</label>
                        <div class="controls">
                            <input type="text"/>
                            <span class="help-inline">Tudo Ok!</span>
                        </div>
                    </div>
                
                </form>
            </div>
        </article>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
