<?php
// o isset() verifica se uma variável existe
// $_GET guarda os dados quando enviado por GET
// Dentro dos [] colocamos o NAME de um input pra obter o seu valor
// Esse IF verifica se o campo foi enviado por GET.
if (isset($_GET['nome'])) {
    echo "<h1>Campos Enviado por GET</h1>";
    echo "Nome: " . $_GET['nome'] . "<br>";
    // Podemos colocar o valor que veio por GET em outra variável
    $ano = $_GET['ano_nascimento'];
    // date (Y) retorna o ano atual do SERVIDOR
    $idade = date("Y") - $ano;
    echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
} else {
    echo "<p style='color: red;'>Não veio nada por GET!</p>";
}

// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1>Campos Enviado por POST</h1>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    // Podemos colocar o valor que veio por POST em outra variável
    $ano = $_POST['ano_nascimento'];
    // date (Y) retorna o ano atual do SERVIDOR
    $idade = date("Y") - $ano;
    echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
} else {
    echo "<p style='color: red;'>Não veio nada por POST!</p>";
}
?>

<pre>
    <?php 
    // Olhe o resultado na página e descreva aqui o que aconteceu...
    print_r($_SERVER);
    
    // Mostrou todo o array - ou seja, as informações sobre qual tipo
    // de navegador é, o metodo de requisição (no caso foi o POST)
    ?>

    
</pre>