<?php

include_once('connection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$conteudo = $_POST['conteudo'];

$result = mysqli_query($teste, "INSERT INTO contatos(nome,email,assunto,conteudo)
VALUES('$nome','$email','$assunto','$conteudo')");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h2>Enviar Mensagem</h2>

    <form action="index.php" method="post">
        <div class="teste">
            <label for="nome" class="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" required><br><br>


        </div>
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="O melhor email" required><br><br>

        <label>Assunto: </label>
        <input type="text" name="assunto" id="assunto" placeholder="Assunto da mensagem" required><br><br>

        <label>Conteúdo: </label>
        <input type="text" name="conteudo" id="conteudo" placeholder="Conteúdo da mensagem" required><br><br>

        <input type="submit" value="enviar" name="enviar">
    </form>

</body>

</html>