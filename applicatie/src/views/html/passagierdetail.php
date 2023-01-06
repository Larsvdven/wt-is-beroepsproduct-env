<?php
  require_once 'src/utils/header.php';
  require_once 'src/utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Passagierdetail Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>

        <?php
          getHeader('passagierdetail');
        ?>
        <main id="passagierdetailmain">
            <h1>Uw vluchten:</h1>
            <p>U bent ingecheckt voor vlucht 1101.</p>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
