<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Spicy+Rice&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
        
        <div class="logo">
            <h1>PIZZARIA CALABRESO</h1>
        </div>

        <button id="dark-mode-btn">Modo Escuro</button>
    <button id="light-mode-btn">Modo Claro</button>

    <script src="script.js"></script>
        
    </header>

<h1>
<img src="pizzaportuguesa.png" alt="">
<img src="pizzacamarao.png" alt="">
<img src="pizzaalho.png" alt="">
<img src="pizzaqueijo.png" alt="">
<img src="pizzacalabresa.png" alt="">
</h1>

<h3>
<img src="valores.png" alt="">
</h3>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzaria";

// criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// primeiro formulário (Registro do Cliente)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_cliente"])) {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $numerocasa = $_POST["numerocasa"];
    $complemento = $_POST["complemento"];

    $sql = "INSERT INTO dadoscliente (nome, telefone, endereco, numerocasa, complemento) VALUES ('$nome', '$telefone', '$endereco', '$numerocasa', '$complemento')";

    if ($conn->query($sql) === true) {
        echo "<p class='concluido'>Novo registro criado com sucesso!</p>";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}

// segundo formulário (Pedidos)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_pedido"])) {
    $sabor = $_POST["sabor"];
    $tamanho = $_POST["tamanho"];
    $bordarecheada = $_POST["bordarecheada"];
    $bebida = $_POST["bebida"];

    $sql = "INSERT INTO pedidos (sabor, tamanho, bordarecheada, bebida) VALUES ('$sabor', '$tamanho', '$bordarecheada', '$bebida')";

    if ($conn->query($sql) === true) {
        echo "<p class='certo'>Seu pedido foi concluído!</p>";
    } else {
        echo "Erro ao inserir pedido: " . $conn->error;
    }
}

$conn->close();
?>
<br><br><br>
<h5>Faça seu pedido abaixo:</h5>
<h5>Registro do Cliente</h5>
<br><br>
<form action="" method="post">
    Nome: <br><input type="text" name="nome" required><br>
    Telefone: <br><input type="tel" name="telefone" required><br>
    Endereço: <br><input type="text" name="endereco" required><br>
    Numero Casa: <br><input type="text" name="numerocasa" required><br>
    Complemento: <br><input type="text" name="complemento" required><br>
    <p>
    <input type="submit" name="submit_cliente" value="Cadastrar">
    </p>
</form>


<h5>Fazer Pedido</h5>
<br><br>
<form action="" method="post">
    Sabor: <br><input type="text" name="sabor" required><br>
    Tamanho: <br><input type="text" name="tamanho" required><br>
    Borda Recheada: <br><input type="text" name="bordarecheada" required><br>
    Bebida: <br><input type="text" name="bebida" required><br>
<p>
    <input type="submit" name="submit_pedido" value="Finalizar Pedido">
    </p>
</form>

<h5>Pagamento: <br>
<img src="pagamento.png" alt="">
</h5>

<footer>
        <p>Bem-vindos CALABRESOS! <br> Todos os direitos reservados. <br> &copy; LUCAS ROSA / CAMILLA VITT &copy; </p>
    </footer>

</body>
</html>