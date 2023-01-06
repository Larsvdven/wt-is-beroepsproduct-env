<?php
  require_once '../utils/header.php';
  require_once '../utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Home Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../public/css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader();
    ?>

        <main id="indexmain">
            <img src="../../public/afbeeldingen/vliegtuig_banner_1702x372.jpg"
            alt="Een vliegtuig wat over een stad vliegt">
            <a class="link flex-item" href="html/vluchten.php">Doorgaan als passagier</a>
            <a class="link flex-item" href="html/login.php">Inloggen als medewerker</a>
        </main>

      <?php
        getFooter('index');
      ?>

    </body>
</html>
