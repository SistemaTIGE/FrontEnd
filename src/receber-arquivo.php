<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instrutor da Atividade</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Administrador</a></li>
                    <li><a href="#">Comunicação</a></li>
                    <li><a href="#">Adm. do Evento</a></li>
                    <li><a href="#">Palestrante</a></li>
                    <li><a href="#">Usuário</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <h1>Página do Instrutor da Atividade</h1>
    </div>

    <div class="container">
        <div class="page-header">
            <h2>Minicurso: wrawrawra</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Descrição da atividade</div>
                    <div class="panel-body">
                        <p>Wra wra wra wra wra wra
                            wrararararararrar </p>
                    </div>
                    <div class="panel-heading">Data</div>
                    <div class="panel-body">
                        <p>Wra wra wra wra wra wra
                            wrararararararrar </p>
                    </div>
                    <div class="panel-heading">Hora</div>
                    <div class="panel-body">
                        <p>Wra wra wra wra wra wra
                            wrararararararrar </p>
                    </div>
                    <div class="panel-heading">Local</div>
                    <div class="panel-body">
                        <p>Wra wra wra wra wra wra
                            wrararararararrar </p>
                    </div>
                </div>
            </div> 
        </div> 

    <form action="receb_arquivo.php" method="post" enctype="multipart/form-data"> 
        <input type="file" name="Arquivo" id="Arquivo"><br> 
        <input type="submit" value="Enviar"> 
        <input type="reset" value="Apagar">
    </form>

    <?php
        $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
        $nome_real=$_FILES["Arquivo"]["name"];
        copy($nome_temporario,"imagens/$nome_real");
    ?>

        <footer>
            <center>
                <p>© Copyright 2016 Sistema Tecnológico de Inovação no Gerenciamento de Eventos - Todos os direitos reservados.</p>
            </center>
        </footer>
</body>

</html>