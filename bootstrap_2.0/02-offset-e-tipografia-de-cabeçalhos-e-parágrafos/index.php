<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="curso de bootstrap-2.0 para iniciantes do PontoCanal">
        <title>Classe Offset e Tipografia de Cabeçalhos e Parágrafos</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <!--Classe Offset-->
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span6 offset1 bloc1">span6 | 420px de col. + 150px de esp. = 570px total e um offset1 que corresp. ap tam. da col.</div>
                <div class="span5 bloc2">span5 | 350px de colunas + 120px de espaços = 470px</div>
            </div>
        </article>
        
        <br>
        <br>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span8 cab">
                    <h1>h1. Cabeçalho h1</h1>
                    <h2>h2. Heading h2</h2>
                    <h3>h3. Heading h3</h3>
                    <h4>h4. Heading h4</h4>
                    <h5>h5. Heading h5</h5>
                    <h6>h6. Heading h5</h6>
                </div>
                <div class="span4 barl">
                    <h1>Barra Lateral</h1>
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
                </div>
            </div>
        </article>
        
        <br>
        
        <article class="container-fluid">
            <div class="row-fluid">
                <div class="span8 cab">
                    <h1>Corpo</h1>
                    <!--As tags strong e em é para negrito e italico quando vamos da importância a palavra-->
                    <p><strong>Lorem Ipsum</strong> é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o <em>século XVI</em>, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                    <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                   <!--A tag small foi usada para tirar a enfase da classe well-->
                    <p class="well"><small>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</small></p>
                </div>
                <div class="span4 barl">
                    <h1>Barra Lateral</h1>
                    <p class="well">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                </div>
            </div>
        </article>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
