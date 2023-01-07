<?php
  require_once '../../utils/header.php';
  require_once '../../utils/footer.php';
?>

<!DOCTYPE html> <!--Dit is de passagierdetailpagina die toegankelijk is voor de medewerker-->
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Passagierdetail medewerker Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../../public/css/stylesheet.css">
    </head>
    <body>

        <?php
          getHeader('passagierdetailM');
        ?>
        <main id="passagierdetail_medewerkermain">
            <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post" id="passagierzoekformulier">
                <label class="label" for="passagier">Welke passagier wilt u inchecken? (passagier ID)</label>
                <input class="input" id="passagier" type="number" name="Passagier zoekopdracht" placeholder="Zoek..."><br>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Zoek">
            </form>

            <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post" id="vluchtzoekformulier">
                <label class="label" for="vlucht">Voor welke vlucht wilt u deze passagier inchecken? (vluchtnummer)</label>
                <input class="input" id="vlucht" type="number" name="Vlucht zoekopdracht" placeholder="Zoek..."><br>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Zoek">
            </form>

            <h1>Passagier 1 inchecken voor vlucht 1101</h1>
            <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post" id="incheckformulier">
                <label for="koffer1">Gewicht koffer 1 in kilo's:</label>
                <input id="koffer1" type="number" step="any" name="Gewicht koffer 1"
                placeholder="Bijvoorbeeld 7"><br>

                <label for="koffer2">Gewicht koffer 2 in kilo's:</label>
                <input id="koffer2" type="number" step="any" name="Gewicht koffer 2"><br>

                <label for="koffer3">Gewicht koffer 3 in kilo's:</label>
                <input id="koffer3" type="number" step="any" name="Gewicht koffer 3"><br>

                <label for="koffer4">Gewicht koffer 4 in kilo's:</label>
                <input id="koffer4" type="number" step="any" name="Gewicht koffer 4"><br>

                <label for="koffer5">Gewicht koffer 5 in kilo's:</label>
                <input id="koffer5" type="number" step="any" name="Gewicht koffer 5"><br>

                <label for="koffer6">Gewicht koffer 6 in kilo's:</label>
                <input id="koffer6" type="number" step="any" name="Gewicht koffer 6"><br>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Inchecken">
            </form><br>
            <div>
                Als de passagier geen baggage meeneemt vul dan niks in bij koffers.<br>
                Als de passagier meer koffers meeneemt dan er vakjes zijn,
                tel dan gewoon het overige gewicht bij een van de koffers op.
            </div>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</html>
