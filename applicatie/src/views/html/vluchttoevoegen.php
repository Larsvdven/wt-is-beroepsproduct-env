<?php
  require_once '../../utils/header.php';
  require_once '../../utils/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Vluchtdetail Gelre Airport</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../../public/css/stylesheet.css">
    </head>
    <body>

    <?php
      getHeader('vluchttoevoegen');
    ?>
        <main id="vluchttoevoegenmain">
            <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="post" id="vluchttoevoegformulier">

                <label class="label" for="vluchtID">Vluchtnummer:*</label>
                <input class="input" id="vluchtID" type="number" name="VluchtID" required>

                <label class="label" for="gate">Gate:*</label>
                <input class="input" id="gate" type="text" name="Gate" required>

                <label class="label" for="datum">Datum:*</label>
                <input class="input" id="datum" type="date" name="Datum" required>

                <label class="label" for="vertrek_luchthaven">Vertrek luchthaven:*</label>
                <input class="input" id="vertrek_luchthaven" type="text" name="Vertrek luchthaven"
                 required>

                <label class="label" for="vertrektijd">Vertrektijd:*</label>
                <input class="input" id="vertrektijd" type="time" name="Vertrektijd" required>

                <label class="label" for="aankomst_luchthaven">Aankomst luchthaven:*</label>
                <input class="input" id="aankomst_luchthaven" type="text" name="Aankomst luchthaven"
                 required>

                <label class="label" for="aankomsttijd">Aankomsttijd:*</label>
                <input class="input" id="aankomsttijd" type="time" name="Aankomsttijd" required>

                <label class="label" for="vluchtduur">Vluchtduur in uren:*</label>
                <input class="input" id="vluchtduur" type="number" step="any"
                name="Vluchtduur" required>
                <!--step="any" is nodig om kommagetallen mee te kunnen geven-->

                <fieldset>
                    <legend>Kinderen toegestaan*:</legend>
                    <label for="ja"><input id="ja" type="radio" name="Kinderen toegestaan"
                        value="ja">Ja</label>
                    <label for="nee"><input id="nee" type="radio" name="Kinderen toegestaan"
                        value="nee">Nee</label>
                </fieldset>

                <label class="label" for="maatschappij">Vliegmaatschappij:*</label>
                <input class="input" id="maatschappij" type="text" name="Vliegmaatschappij"
                required>

                <label class="label" for="vliegtuig">Type vliegtuig:*</label>
                <input class="input" id="vliegtuig" type="text" name="Vliegtuigtype"
                 required>

                <label class="label" for="retour">Retourprijs in euro's:*</label>
                <input class="input" id="retour" type="number" name="Retourprijs" required>

                <label class="label" for="enkel">Enkel prijs in euro's:*</label>
                <input class="input" id="enkel" type="number" name="EnkelPrijs" required>

                <input class="form-knop" type="reset" value="Herstellen">
                <input class="form-knop" type="submit" value="Toevoegen">
            </form>
        </main>
        <?php
          getFooter();
        ?>

    </body>
</php>
