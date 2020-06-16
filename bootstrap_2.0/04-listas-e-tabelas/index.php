<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="curso de bootstrap para iniciantes do PontoCanal">
        <title>Listas e Tabelas</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span8 corp">
                    <h1>Tabela</h1>
                    <table class="table table-hover">
                        <caption>Aprovados e Reprovados</caption>
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nome</th>
                                <th>Nota</th>
                                <th>Situação</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <tr>
                                <td>01.</td>
                                <td>Ana Maria</td>
                                <td>9.0</td>
                                <td>Aprovada</td>
                            </tr>
                            <tr>
                                <td>02.</td>
                                <td>João Vitor</td>
                                <td>8.5</td>
                                <td>Aprovado</td>
                            </tr>
                            <tr>
                                <td>03.</td>
                                <td>Alanna Ferraz</td>
                                <td>6.0</td>
                                <td>Recuperação</td>
                            </tr>
                            <tr>
                                <td>04.</td>
                                <td>José Henrique</td>
                                <td>5.0</td>
                                <td>Reprovado</td>
                            </tr>
                            <tr>
                                <td>05.</td>
                                <td>Maria Clara</td>
                                <td>4.0</td>
                                <td>Pendente</td>
                            </tr>
                        </tbody>
                    </table> 
                    
                    <br>
                    
                    <table class="table table-striped table-bordered">
                        <caption>Aprovados e Reprovados</caption>
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nome</th>
                                <th>Nota</th>
                                <th>Situação</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <tr>
                                <td>01.</td>
                                <td>Ana Maria</td>
                                <td>9.0</td>
                                <td>Aprovada</td>
                            </tr>
                            <tr>
                                <td>02.</td>
                                <td>João Vitor</td>
                                <td>8.5</td>
                                <td>Aprovado</td>
                            </tr>
                            <tr>
                                <td>03.</td>
                                <td>Alanna Ferraz</td>
                                <td>6.0</td>
                                <td>Recuperação</td>
                            </tr>
                            <tr>
                                <td>04.</td>
                                <td>José Henrique</td>
                                <td>5.0</td>
                                <td>Reprovado</td>
                            </tr>
                            <tr>
                                <td>05.</td>
                                <td>Maria Clara</td>
                                <td>4.0</td>
                                <td>Pendente</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    
                    <table class="table table-hover table-bordered table-condensed">
                        <caption>Aprovados e Reprovados</caption>
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nome</th>
                                <th>Nota</th>
                                <th>Situação</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <tr class="success">
                                <td>01.</td>
                                <td>Ana Maria</td>
                                <td>9.0</td>
                                <td>Aprovada</td>
                            </tr>
                            <tr class="success">
                                <td>02.</td>
                                <td>João Vitor</td>
                                <td>8.5</td>
                                <td>Aprovado</td>
                            </tr>
                            <tr class="warning">
                                <td>03.</td>
                                <td>Alanna Ferraz</td>
                                <td>6.0</td>
                                <td>Recuperação</td>
                            </tr>
                            <tr class="error">
                                <td>04.</td>
                                <td>José Henrique</td>
                                <td>5.5</td>
                                <td>Reprovado</td>
                            </tr>
                            <tr class="info">
                                <td>05.</td>
                                <td>Maria Clara</td>
                                <td>4.0</td>
                                <td>Pendente</td>
                            </tr>
                        </tbody>
                    </table>                   
                </div>
                
                <div class="span4 barl">
                    <h1>Barra Lateral</h1>
                    <ul class="unstyled">
                        <li>Menu 1</li>
                        <li>Menu 2</li>
                        <li>Menu 3
                            <ul>
                                <li>Sub menu 1</li>
                                <li>Sub menu 2</li>
                                <li>Sub menu 3</li>
                            </ul>
                        </li>
                        <li>Menu 4</li>
                        <li>Menu 5</li>
                    </ul>
                    <ol class="inline">
                        <li>Menu 1</li>
                        <li>Menu 2</li>
                        <li>Menu 3</li>
                        <li>Menu 4</li>
                        <li>Menu 5</li>
                        <li>Menu 6</li>
                    </ol>
                     <dl class="dl-horizontal">
                        <dt>Item 1</dt>
                        <dd>Descrição da lista.</dd>
                        <dt>Item 2</dt>
                        <dd>Descrição da lista.</dd>
                        <dt>Item 3</dt>
                        <dd>Descrição da lista.</dd>
                        <dt>Item 4</dt>
                        <dd>Descrição da lista.</dd>
                        <dt>Item 5</dt>
                        <dd>Descrição da lista.</dd>
                    </dl>
                </div>
            </div>
        </article>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
