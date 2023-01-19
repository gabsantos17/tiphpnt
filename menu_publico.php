<?php 
    include "conn/connect.php";
    $lista_tipos = $conn->query('select * from tbtipos order by rotulo_tipo;');
    $row_tipos = $lista_tipos->fetch_all();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Menu Público</title>
</head>
<body>
    <!-- abre a barra de navegação -->
    <nav class="fixed navbar fixed-top navbar-light navbar-inverse bg-light">
        <div class="container-fluid">
            <!-- agrupamento mobile -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                    <span class="sr-only">Toogle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                    

                </button>
                <a href="index.php" class="navbar-brand">
                        <!-- logo - tamanho(192x32)-->
                    <img src="" alt="Logotipo Deck Roast Grill">
                </a>
            </div>
            <!-- fecha argumento mobile -->
            <!-- nav direita -->
                <div class="collapse navbar-collapse" id="menupublico">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li><a href="index.php#destaques">Destaques</a></li>
                        <li><a href="index.php#produtos">Produtos</a></li>
                        <!-- dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Tipos
                                <span class="caret"></span>     
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach($rows_tipos as $rows){?>
                                        <li><a href=""></a></li>
                                    <?php }?>
                            </ul>
                        </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
        </div>
    </nav>
</body>
</html>