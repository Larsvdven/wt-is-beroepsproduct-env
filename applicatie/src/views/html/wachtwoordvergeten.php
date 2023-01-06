<?php
  require_once 'src/utils/header.php';
  require_once 'src/utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Wachtwoord vergeten Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader();
    ?>
        <main id="wachtwoordmain">
            <h1 class="flex-item">Wachtwoord resetten</h1>
            <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post" id="wachtwoordformulier">

                <div>
                <label class="label" for="email">Email:*</label>
                <input class="input" id="email" type="email" name="Email" size="25" required>
                </div>

                <div>
                <label class="label" for="oudwachtwoord">Oud wachtwoord:*</label>
                <input class="input" id="oudwachtwoord" type="password" name="Oudwachtwoord" size="30" required>
                </div>

                <div>
                <label class="label" for="nieuwwachtwoord1">Nieuw wachtwoord:*</label>
                <input class="input" id="nieuwwachtwoord1" type="password" name="Nieuwwachtwoord" size="30" required>
                </div>

                <div>
                <label class="label" for="nieuwwachtwoord2">Bevestig nieuw wachtwoord:*</label>
                <input class="input" id="nieuwwachtwoord2" type="password" name="Nieuwwachtwoord" size="30" required>
                </div>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Versturen">
            </form>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
