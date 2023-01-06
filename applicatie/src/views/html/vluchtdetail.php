<?php
  require_once 'src/utils/header.php';
  require_once 'src/utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Vluchtdetail Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader('vluchtdetail');
    ?>
        <main id="vluchtdetailmain">
            <table>
                <caption><strong>Vlucht 1101</strong></caption>
                    <tr>
                        <th>Vluchtnummer</th>
                        <td>1101</td>
                    </tr>
                    <tr>
                        <th>Gate</th>
                        <td>A</td>
                    </tr>
                    <tr>
                        <th>Datum</th>
                        <td>20-12-2022</td>
                    </tr>
                    <tr>
                        <th>Vertrek luchthaven</th>
                        <td>Gelre Airport</td>
                    </tr>
                    <tr>
                        <th>Vertrektijd</th>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <th>Aankomst luchthaven</th>
                        <td>Heathrow Airport</td>
                    </tr>
                    <tr>
                        <th>Aankomsttijd</th>
                        <td>19:30</td>
                    </tr>
                    <tr>
                        <th>Vluchtduur</th>
                        <td>0,5 uur</td>
                    </tr>
                    <tr>
                        <th>Kinderen toegestaan</th>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <th>Maatschappij</th>
                        <td>KLM</td>
                    </tr>
                    <tr>
                        <th>Type vliegtuig</th>
                        <td>Boeing 737</td>
                    </tr>
                    <tr>
                        <th>Prijs retour</th>
                        <td>&euro;300</td>
                    </tr>
                    <tr>
                        <th>Prijs enkel</th>
                        <td>&euro;180</td>
                    </tr>
            </table>
            <a class="link knop" id="incheckenknop" href="inchecken.php">Inchecken</a>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
