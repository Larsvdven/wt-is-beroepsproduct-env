<?php

function getFooter($pagina = 'overig'){
  $voorvoegsel = '';
  $class = '';
  if($pagina === 'index'){
    $voorvoegsel = 'html/';
  }
  elseif($pagina === 'huidige'){
    $class = 'huidigepagina';
  }
    ?>
        <footer>
            <div>Copyright &#169;2022</div>
            <a class="link <?=$class?>" href="<?=$voorvoegsel?>privacystatement.php">Privacystatement</a>
            <div>All rights reserved</div>
        </footer>
    <?php
}
?>
