<!--
Aluno: Lucas Mendonça Martins
Matricula: 202220714
-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="situacaoCamisas.css">
</head>

<body style="background-color: #000;">
    <nav class="navbar navbar-expand-lg" style="background-color: #eae215">
        <div class="container-fluid" style="justify-content: center;">
            <a class="navbar-brand">Situação  <i class="fa-solid fa-spinner fa-spin"></i></a>
        </div>
    </nav>
    <div class="situacao">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $qtdPequeno = ($_POST['pequeno']);
            $qtdMedio = ($_POST['medio']);
            $qtdGrand = ($_POST['grande']);

            $tamanhoPequeno = 25;
            $tamanhoMedio = 38;
            $tamanhoGrande = 46;

            $totalPequeno = $qtdPequeno * $tamanhoPequeno;
            $totalMedio = $qtdMedio * $tamanhoMedio;
            $totalGrande = $qtdGrand * $tamanhoGrande;
            $valorTotal = $totalPequeno + $totalMedio + $totalGrande;

            echo "<h2>Valores arrecadados por camiseta:</h2>";
            echo "<li>Pequena: R$ $totalPequeno </li>";
            echo "<li>Média: R$ $totalMedio </li>";
            echo "<li>Grande: R$ $totalGrande </li>";

            echo "<h2>Valor total arrecadado:</h2>";
            echo "<p>R$ $valorTotal </p>";

            if ($valorTotal > 1000) {
                echo "<p>Valor total maior que R$ 1000,00</p>";
            } else {
                $desconto = $valorTotal * 1.10;
                echo "<p>Valor total com 10% de aumento: R$ $desconto </p>";
            }
        }

        ?>

        <a class="btn btn-primary" href="index.html" role="button">voltar</a>
    </div>
</body>

</html>