<?php
$nome = $_POST["nome"];
$email = $_POST["email"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="style.css" />
    <title>SpaceForm</title>
  </head>
  <body class="bg">
    <main>
      <div class="container">
        <form>
          <img src="./nasa-logo.svg" class="logo" />
          <h1 class="send">Email enviado com sucesso.</h1>

          <p class="send2">
           Olá <?= "$nome"?>. Recebemos sua mensagem, logo entraremos em contato pelo email <?="$email"?>
          </p>
          <br />
          <br />
          <a href="index.php" class="backTotop">Voltar</a>
        </form>
      </div>
    </main>
  </body>
</html>
