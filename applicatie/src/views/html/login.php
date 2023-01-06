<?php
  require_once 'src/utils/header.php';
  require_once 'src/utils/footer.php';

  session_start();
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Login Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader();
    ?>
        <main id="loginmain">
            <h1 class="flex-item">Inloggen als medewerker:</h1>
            <form class="flex-item" action="vluchten_medewerker.php" method="post" id="inlogformulier">
                <!--Action verwijst nu door naar de overzicht pagina maar er kan getest worden of hij
                    werkt door "https://jkorpela.fi/cgi-bin/echo.cgi" te gebruiken.-->

                <label class="label" for="email">Email:*</label>
                <input class="input" id="email" type="email" name="Email" size="25" required>

                <label class="label" for="wachtwoord">Wachtwoord:*</label>
                <input class="input" id="wachtwoord" type="password" name="Wachtwoord" size="30" required>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Versturen">
            </form>
            <a class="flex-item" href="wachtwoordvergeten.php">Wachtwoord vergeten</a>
            <!--Deze link verwijst nu nergens naar omdat ik eventuele wachtwoordwijzigingen toch niet
                kan verwerken met enkel html en css.-->
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
