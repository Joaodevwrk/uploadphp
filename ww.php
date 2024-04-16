<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Upload de Imagem</title>
</head>
<body>

<form action="processar_formulario.php" method="post" enctype="multipart/form-data">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required>
  <br>
  <label for="imagem">Selecione uma imagem:</label>
  <input type="file" id="imagem" name="imagem" accept=".jpg, .png, .bmp" required>
  <br>
  <button type="submit">Enviar</button>
</form>

</body>
</html>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visualizar Dados</title>
</head>
<body>

<h2>Dados Enviados</h2>

<?php
echo $_POST["nome"];
echo "<br>";
$file = $_FILES["imagem"]["name"];

move_uploaded_file($_FILES["imagem"]["tmp_name"], $file);

// Verifica se há um nome e uma imagem enviados por meio do formulário

    $nome = $_POST["nome"];
    // $imagem = $_POST["imagem"]["NAME"];
    
    // Exibe o nome e a imagem
    echo "<p>Nome: $nome</p>";
    echo "<p>Imagem:</p>";
    echo "<img src=".$file." alt='Imagem Enviada'>";
    echo "<br>";
    // echo $imagem;
// } else {
//     // Se não houver nome ou imagem enviados, exibe uma mensagem de erro
//     echo "<p>Nenhum dado foi enviado.</p>";
// }
?>

</body>
</html>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visualizar Dados</title>
</head>
<body>

<?php
// Verifica se os parâmetros foram passados via GET
if (isset($_GET["nome"]) && isset($_GET["imagem"])) {
    $nome = $_GET["nome"];
    $imagem = $_GET["imagem"];

    // Exibe o nome e a imagem
    echo "<h2>Dados Enviados</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Imagem:</p>";
    echo "<img src='$imagem' alt='Imagem Enviada'>";
    echo $imagem;
} else {
    // Se os parâmetros não foram passados, exibe uma mensagem de erro
    echo "<p>Nenhum dado foi enviado.</p>";
}
?>

</body>
</html>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visualizar Dados</title>
</head>
<body>

<h2>Dados Enviados</h2>

<?php
// Verifica se há um nome e uma imagem enviados por meio do formulário
if (isset($_POST["nome"]) && isset($_POST["imagem"])) {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    
    // Exibe o nome e a imagem
    echo "<p>Nome: $nome</p>";
    echo "<p>Imagem:</p>";
    echo "<img src='$imagem' alt='Imagem Enviada'>";
    echo $imagem;
} else {
    // Se não houver nome ou imagem enviados, exibe uma mensagem de erro
    echo "<p>Nenhum dado foi enviado.</p>";
}
?>

</body>
</html>