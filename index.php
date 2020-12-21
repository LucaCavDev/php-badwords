<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavicchioli php-badwords</title>
    <style>
        body {
          width: 100vw;
          height: 100vh;
          background: purple;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          overflow: hidden;
        }
    </style>
</head>

<!--
REPO: php-badwords
GOAL:
Creare una variabile con un paragrafo di
testo.
Visualizzare a schermo il paragrafo con la
relative lunghezza e sostituire la
badword passata in GET con tre *.
-->

<body>

  <?php
    $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $badword = $_GET['badword'];
    $paragrafoCensurato = str_replace($badword, '***', $paragrafo);
  ?>

  <p><h4>Il paragrafo base è:</h4>
    <?php
      echo ' ' . $paragrafo;
    ?>
  </p>

  <h2>
    <?php
      echo 'Il paragrafo base è lungo: ' . strlen($paragrafo) . ' caratteri.';
    ?>
  </h2>

  <p><h4>Il paragrafo con la BADWORD da censurare è:</h4>
    <?php
      echo ' ' . $paragrafoCensurato;
    ?>
  </p>

  <h2>
    <?php
      echo 'Il paragrafo censurato è lungo: ' . strlen($paragrafoCensurato) . ' caratteri.';
    ?>
  </h2>

  <h2>
    Per notare la differenza tra il $paragrafo e il $paragrafoCensurato va inserito nell'indirizzo: <br>
    localhost/?badword=Lorem <br>
    Lorem è la badword in questo esempio, ma puo essere sostituita con una qualunque parola all'interno del paragrafo base facendo attenzione perchè si opera in ambiente case sensitive
  </h2>
</body>
</html>
