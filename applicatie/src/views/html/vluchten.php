<?php
  require_once '../../utils/header.php';
  require_once '../../utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Vluchten Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../../public/css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader('vluchten');
    ?>
        <main id="vluchtenmain">
            <table>
                <caption><strong>Aankomende vluchten:</strong></caption>
                    <tr>
                        <th>Vluchtnummer</th>
                        <th>Datum</th>
                        <th>Vertrek luchthaven</th>
                        <th>Vertrektijd</th>
                        <th>Aankomst luchthaven</th>
                        <th>Aankomsttijd</th>
                        <th>Kinderen toegestaan</th>
                    </tr>
                    <tr>
                        <td><a class="link knop" href="vluchtdetail.php">Info</a> 1101</td>
                        <td>20-12-2022</td>
                        <td>Gelre Airport</td>
                        <td>19:00</td>
                        <td>Heathrow Airport</td>
                        <td>19:30</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td><a class="link knop" href="vluchtdetail.php">Info</a> 1102</td>
                        <td>21-12-2022</td>
                        <td>Gelre Airport</td>
                        <td>20:00</td>
                        <td>Dubai International Airport</td>
                        <td>02:30</td>
                        <td>&#10006;</td>
                    </tr>
                    <tr>
                        <td><a class="link knop" href="vluchtdetail.php">Info</a> 1103</td>
                        <td>22-12-2022</td>
                        <td>Gelre Airport</td>
                        <td>18:00</td>
                        <td>Frankfurt am Main</td>
                        <td>19:00</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td><a class="link knop" href="vluchtdetail.php">Info</a> 1104</td>
                        <td>23-12-2022</td>
                        <td>Gelre Airport</td>
                        <td>21:00</td>
                        <td>J. F. K. Airport</td>
                        <td>05:15</td>
                        <td>&#10004;</td>
                    </tr>
            </table>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
