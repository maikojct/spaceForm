
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
        <form
          action="sucesso.php"
          method="POST"
        >
          <img src="./nasa-logo.svg" class="logo" />
          <input type="hidden" name="_captcha" value="false" />
          <input
            type="hidden"
            name="_next"
            value="sucesso.php"
          />

          <input
            type="text"
            class="inputs"
            name="nome"
            placeholder="Escreva seu nome"
          />
          <br />

          <br />
          <input
            type="email"
            class="inputs"
            name="email"
            placeholder="Escreva seu email"
          />
          <br />

          <br />
          <input
            type="text"
            class="inputs"
            name="subject"
            placeholder="Escreva o assunto"
          />
          <br />

          <br />
          <textarea
            name="message"
            placeholder="Mensagem"
            class="text"
          ></textarea>
          <br />

          <button type="submit">Enviar</button>
        </form>
      </div>
    </main>
  </body>
</html>
