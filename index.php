<!DOCTYPE html>
<html>
    <head>
        <title>Informações climáticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>
        
        <!-- Tags Gerais -->
     <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque e região"/>
     <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
     <meta name="keywords" content="clima, temperatura, temperatura em brusque, tempo para brusque "/>
     <meta NAME="title" CONTENT="http://hostogio-clima.herokuapp.com/" />
     <meta NAME="identifier-url" content="" />
     <meta NAME="author" content="Hostogio Raphael" />
     <meta NAME="ROBOTS" CONTENT="All" />
     <meta NAME="RATING" CONTENT="general" />
     <meta NAME="DISTRIBUTION" CONTENT="global" />
     <meta NAME="LANGUAGE" CONTENT="pt-br" />
     <meta name="content-language" content="portuguese" />
     <meta name="doc-class" content="Completed" /> 
     <meta name="reply-to" content="hostogio_oliveira@estudante.sc.senai.br"/>

     <!-- Tags Para rede social Facebook -->
     <meta property="og:url" content="http://hostogio-clima.herokuapp.com/" />
     <meta property="og:locale" content="pt_BR" />
     <meta property="og:type" content="website" />
     <meta property="og:site_name" content="Clima Brusque e região" />
     <meta property="og:title" content="Clima Brusque e Região" />
     <meta property="og:description" content="Site de informações climáticas de Brusque e região" />
     <meta property="og:image" content="https://i.pinimg.com/originals/12/63/b4/1263b41e9234545223b3ec33568c3207.jpg" />
     <meta property="og:image:width" content="400" />
     <meta property="og:image:height" content="120" />
     <meta property="fb:app_id" content="" />

     <!-- Tags Para rede social Twitter -->
     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:description" content="" />
     <meta name="twitter:title" content="" />

    </head>
    <body>
        <div class="alert alert-danger mt-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Cuidado!</strong> Temperatura muito elevada, se cuide!!
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bg-success">
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/icones/02d.png">
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Umidade do ar | <span id="umidade"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/uAr.png" width="100px">
                </div>
                <div class="col">
                    <h2>Pressão do ar | <span id="pressaoVento"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/pAr.png" width="100px">
                </div>
                <div class="col">
                    <h2>Temperatura Máxima | <span id="tempMax"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/tMax.png" width="100px">
                </div>
                <div class="col">
                    <h2>Temperatura Mínima | <span id="tempMin"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/tMin.png" width="100px">
                </div>
                <div class="col">
                    <h2>Velocidade do vento | <span id="velocidadeVento"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/vv.png" width="100px">
                </div>
                <div class="col">
                    <h2>Amanhecer | <span id="amanhecer"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/vv.png" width="100px">
                </div>
            </div>
        </div>
    </body>
</html>
                                                     