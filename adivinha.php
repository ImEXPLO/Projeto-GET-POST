<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adivinha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">

    <h1>Qual o Endereço? Vou adivinhar!</h1>
    <form method="POST" action="recebe-form.php">
        <div class="mb-3">
            <label for="rua" class="form-label">Digite a Rua</label>
            <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Digite o Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Digite o Número</label>
            <input type="number" class="form-control" id="numero" name="numero">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Digite a Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
        <a href="index.php" class="btn btn-info">VOLTAR</a>
        <button type="reset" class="btn btn-warning">LIMPAR</button>
        <button type="submit" class="btn btn-success">ENVIAR PARA O PHP</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>