<?php
@$url=$_REQUEST['info'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href='vendor/boxicon/css/boxicons.css' rel='stylesheet'>
    <script src="assets/js/jquery-3.6.1.js"></script>
    <title>Document</title>
    <style>
        table tr:not(:first-child):hover{background-color:transparent;}
        table tr:not(:first-child){
            cursor: default;
        }   
        table, th, td {
            margin: 4px;
        } 
    </style>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <h1>
                        <i class='bx bx-package'></i>Stock schop
                    </h1>
                </div>
                <div class="settig">
                    <a href="./compras.php"></i>Compras</a>
                    <a href="./relatorio.php">Relatorio</a>
                    <a href="./cadastro.php"></i>Cadastro</a>
                    <?php if($url=="online"): ?>
                        <div class="last">
                            <a href="cc/">
                                Vendas
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($url=="offline"): ?>
                        <div class="last">
                            <a href="classes/openclose.php">
                                Abertura
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div></div>
            </div>
            <div class="corpo">
                <nav>
                    <?php include_once ('./layouts/side.php')?>
                </nav>
                <section>
                    <div class="sub-header">
                        <div><h2>Live / Status das</h2></div>
                    </div>
                    <div class="tabela">
                        <div class="produtos"></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<script src="assets/js/index.js"></script>
</body>
</html>