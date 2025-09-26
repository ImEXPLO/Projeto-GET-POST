<?php
// Cria uma variavel para exibir erro
$nada = "Dado não informado!";
$resultado = "";

$exibir = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
// Com IF Ternário
// Sintaxe: var = condição ? TRUE : FALSE;
$nome = isset($_POST['nome']) && !empty($_POST['nome']) ? $_POST['nome'] : $nada;
$numero1 = isset($_POST['numero1']) && !empty($_POST['numero1']) ? $_POST['numero1'] : $nada;
$numero2 = isset($_POST['numero2']) && !empty($_POST['numero2']) ? $_POST['numero2'] : $nada;
$tipo = isset($_POST['tipo']) && !empty($_POST['tipo']) ? $_POST['tipo'] : $nada;

if($tipo == "Adição"){
$resultado = "$numero1" + "$numero2";
}

else if ($tipo == "Subtração"){
$resultado = $numero1 - $numero2;
}

else if ($tipo == "Divisão"){
$resultado = $numero1 / $numero2;
}

else if ($tipo == "Multiplicação"){
$resultado = $numero1 * $numero2;
}

else
echo "Operação Inválida";

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Sua conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">
    <?php if ($exibir): ?>

        <h1>Resultado de sua Operação</h1>
        <br>

        <div class="card" style="width: 18rem;">
            <img src="https://cdn.ahnegao.com.br/wp-content/uploads/2011/10/pericles.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Olá <?= $nome ?>. O Resultado da sua operação de <?= $tipo ?> é <?= $resultado ?></h5>
            </div>
            <a href="calculadora.php" class="btn btn-info">VOLTAR</a>
        </div>

    <?php endif; ?>

    <?php if (!$exibir): ?>
        <h1>Página aberta com GET</h1>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>