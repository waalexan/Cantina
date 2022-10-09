<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/jquery-3.6.1.js"></script>
    <link href='vendor/boxicon/css/boxicons.css' rel='stylesheet'>
    <title>Document</title>
</head>
<style>
    body {
        overflow-y: hidden;
    }
</style>

<body>
    <div class="main">
        <div class="container">
           <?php include_once ('./layouts/header.php')?>
            <div class="corpo">
                <nav>
                    <?php include_once ('./layouts/side.php')?>
                </nav>
                <section style="width:70%">
                    <div class="sub-header">
                        <div>
                            <h2>
                                <a href="./index.php" class="voltar"><i class='bx bx-chevron-left'></i></a>
                                Difinicoes de cadastros
                            </h2>
                        </div>
                        <div id="buttons" style="display:none">
                            <button id="add" onclick="edicionar()">adicionar item</button></a>
                        </div>
                        <div>
                            <form action="" method="get">
                                <input type="text" name="busca">
                            </form>
                        </div>
                    </div>
                    <div class="tabela">
                        <?php
                        include_once("classes/displaycadastros.php")
                        ?>
                    </div>
                </section>
                <div class="esquerda">

                    <div class="wrapper">
                        <div class="top">
                            <div>
                                <h4>CADASTRO</h4>
                            </div>
                            <div>
                                <a href="#modalbox" class="btn-add">
                                    <i class="bx bx-add"></i>
                                    + Add produto
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="modalbox" class="modal">
                        <div class="modalcontent">
                            <form action="classes/cadastrar.php" method="post">
                                <div>
                                    <label for="">Codigo do produto:</label><input type="text" name="codigo" value="" required />
                                    <label for="">Nome do produto:</label> <input type="text" name="nome" value="" required />
                                    <label for="">Categoria:</label> <input type="text" name="categoria" value="" required />
                                    <label for="">Preco no armazem:</label><input type="text" name="armazem" value="" required />
                                    <label for="">Preco de venda:</label><input type="text" name="preco" value="" required />                                   
                                </div>
                                <div class="item">                                    
                                    <div>
                                        <label for="">Ano exp:</label> <input type="number" name="ano"value="" required />
                                    </div>
                                    <div>
                                        <label for="">Mes exp:</label> <input type="number" name="mes" value="" required />
                                    </div>
                                    <div>
                                        <label for="">Dia exp:</label><input type="number" name="dia" value="" required />
                                    </div>
                                </div>
                                <div class="item">                                    
                                    <div>
                                        <label for="">Caixas:</label> <input type="text" name="caixas" value="" required />
                                    </div>
                                    <div>
                                        <label for="">Item:</label> <input type="text" name="itens" value="" required />
                                    </div>
                                    <div>
                                        <label for="">Itens de alerta:</label><input type="text" name="lim" value="" required />
                                    </div>
                                </div>
                                <input type="submit" value="Cadastrar produto">
                            </form>
                            <a href="#" class="modalclose">&times;</a>
                        </div>
                    </div>
                    <div class="edit">
                        <img src="" alt="" id="perfil">
                        <label for="" class="codigo" style="display:none"></label>
                        <label for="">Codigo do produto:</label><input type="text" name="codigo" id="codigo"><br><br>
                        <label for="">Nome do produto:</label><input type="text" name="nome" id="nome"><br><br>
                        <label for="">Categoria do produto:</label><input type="text" name="categoria" id="categoria"><br><br>
                        <label for="">Preco do produto:</label><input type="text" name="preco" id="preco"><br><br>
                        <label for="">Itens em cada caixa:</label><input type="text" name="itens" id="itens"><br><br>
                        <label for="">Caixas de inicio:</label><input type="text" name="caixas" id="caixas"><br><br>
                        <label for="">Preco no armazem:</label><input type="text" name="armazem" id="armazem"><br><br>
                        <button onclick="editar()" class="btn-edit"><i class="bx bx-refresh"></i> Atualizar</button>
                        <button onclick="apagar()" class="btn-delete"><i class="bx bx-trash"></i> Apagar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script>
        // get selected row
        // display selected row data in text input

        var table = document.getElementById("table"),
            rIndex;
        var btnadd = document.getElementById("buttons");
        var add = document.getElementById("add");

        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function() {
                rIndex = this.rowIndex;
                console.log(rIndex);
                btnadd.style.display = "block";

                document.querySelector("#perfil").src = this.cells[0].src;
                document.querySelector(".codigo").textContent = this.cells[1].innerHTML;
                document.getElementById("codigo").value = this.cells[1].innerHTML;
                document.getElementById("nome").value = this.cells[2].innerHTML;
                document.getElementById("categoria").value = this.cells[3].innerHTML;
                document.getElementById("preco").value = this.cells[4].innerHTML;
                document.getElementById("armazem").value = this.cells[7].innerHTML;
                document.getElementById("itens").value = this.cells[8].innerHTML;
                document.getElementById("caixas").value = this.cells[9].innerHTML;

                add.textContent = "+ adicionar " + this.cells[2].innerHTML;
            };
        }

        function apagar() {
            window.location.href = "./classes/delete.php?code=" + document.querySelector(".codigo").textContent;
        }

        function edicionar() {
            window.location.href = "./add.php?code=" + document.querySelector(".codigo").textContent;
        }

        function editar() {
            let Codigo = document.querySelector(".codigo");
            let codigo = document.querySelector("#codigo").value;
            let nome = document.querySelector("#nome").value;
            let cate = document.querySelector("#categoria").value;
            let preco = document.querySelector("#preco").value;
            let caixas = document.querySelector("#caixas").value;
            let itens = document.querySelector("#itens").value;
            let armazem = document.querySelector("#armazem").value;
            window.location.href = "./classes/editar.php?cc=" + Codigo.textContent + "&code=" + codigo + "&produto=" + nome + "&categoria=" + cate + "&preco=" + preco + "&caixa=" + caixas + "&iten=" + itens + "&armazem=" + armazem
        }
    </script>

    <script src="assets/js/index.js"></script>
</body>

</html>