<?php
// Cria uma variavel para exibir erro
$nada = "Dado não informado!";

$exibir = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se o campo nome existe
    // empty retorna TRUE se a variavel estiver vazia
    // ! inverte o resultado, se TRUE vira FALSE
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        // Só chega aqui se o name="nome" existir
        // e o campo não estiver vazio
        $nome = $_POST['nome'];
    } else {
        // Se estiver vazio, coloca a mensagem de erro
        $nome = $nada;
    }
    // Com IF Ternário
    $rua = isset($_POST['rua']) && !empty($_POST['rua']) ? $_POST['rua'] : $nada;

    // Sintaxe: var = condição ? TRUE : FALSE;
    $bairro = isset($_POST['bairro']) && !empty($_POST['bairro']) ? $_POST['bairro'] : $nada;
    $cidade = isset($_POST['cidade']) && !empty($_POST['bairro']) ? $_POST['cidade'] : $nada;
    $estado = isset($_POST['estado']) && !empty($_POST['bairro']) ? $_POST['estado'] : $nada;
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário com Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">
    <?php if ($exibir): ?>

        <h1>Dados do Endereço</h1>

        <div class="card" style="width: 18rem;">
            <img src="https://www.quintoandar.com.br/guias/wp-content/uploads/2024/01/vantagens-de-morar-em-cidade-grande.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Olá <?= $nome ?></h5>
                <p class="card-text"><b>Rua: </b> <?php echo $rua ?></p>
                <p class="card-text"><b>Bairro: </b> <?= $bairro ?></p>
                <p class="card-text"><b>Cidade: </b> <?= $cidade ?></p>
                <p class="card-text"><b>Estado: </b> <?= $estado ?></p>
            </div>
        </div>

    <?php endif; ?>

    <?php if (!$exibir): ?>
        <h1>Página aberta com GET</h1>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>