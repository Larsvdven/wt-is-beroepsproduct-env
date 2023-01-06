<?php

function getHeader($pagina = 'uitgelogd'){
  $vluchten = '';
  $vluchtenM = '';
  $inchecken = '';
  $passagierdetail = '';
  $passagierdetailM = '';
  $vluchtdetail = '';
  $vluchttoevoegen = '';
  $privacystatement = '';

  if($pagina === 'uitgelogd'){
    ?>
      <header class="groteheader"><a class="link" href="/index.php">Gelre airport</a></header>
    <?php
  }
  else{

    switch ($pagina) {
      case "vluchten":
        $vluchten = 'huidigepagina';
        break;
      case "vluchtenM":
        $vluchtenM = 'huidigepagina';
        break;
      case "inchecken":
        $inchecken = 'huidigepagina';
        break;
      case "passagierdetail":
        $passagierdetail = 'huidigepagina';
        break;
      case "passagierdetailM":
        $passagierdetailM = 'huidigepagina';
        break;
      case "vluchtdetail":
        $vluchtdetail = 'huidigepagina';
        break;
      case "vluchttoevoegen":
        $vluchttoevoegen = 'huidigepagina';
        break;
      case "privacystatement":
        $privacystatement = 'huidigepagina';
        break;
    }
      ?>
        <header>
          <a class="link" href="/index.php">Gelre airport</a>
          <nav>
            <ul class="navigatielijst">
              <li class="submenu <?=$vluchten?> <?=$vluchtenM?>">Vluchten
                <ul>
                  <li><a class="link <?=$vluchten?>" href="vluchten.php">
                      Vluchten</a></li>
                  <li><a class="link <?=$vluchtenM?>"
                    href="vluchten_medewerker.php">Vluchten M</a></li>
                </ul>
                  </li>
                    <li><a class="link <?=$inchecken?>" href="inchecken.php">Inchecken</a></li>
                    <li class="submenu <?=$passagierdetail?> <?=$passagierdetailM?>">Passagier detail
                      <ul>
                        <li><a class="link <?=$passagierdetail?>"
                        href="passagierdetail.php">Passagier detail</a></li>
                        <li><a class="link <?=$passagierdetailM?>"
                        href="passagierdetail_medewerker.php">
                          Passagier detail M</a></li>
                    </ul>
              </li>
            </ul>
          </nav>
        </header>
      <?php
  }
}

?>



