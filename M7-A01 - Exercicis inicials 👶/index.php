<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>M7-A01 - Exercicis inicials 👶</title>
</head>
<body>
  <h1>M7-A01 - Exercicis inicials 👶</h1>
  <h2>Web que mostra els números del 0 al 100 fent servir un bucle for.</h2>
  <p>
    <?php
      for ($i = 0; $i <= 100; $i++) {
        echo "Numero: $i ";
      }
    ?>
  </p>
  <h2>Web que mostra els números del 100 al 0 fent servir un bucle for, però els números parells en negreta, els senars en cursiva i el 0 en negreta, cursiva i subratllat.
  </h2>
  <p>
    <?php
      for ($i = 0; $i <= 100; $i++) {
        if ($i == 0) {
          echo "<strong><em><u>Numero $i </u></em></strong>";
        } else if ($i % 2 == 0) {
          echo "<strong>Numero $i </strong>";
        } else {
          echo "<em>Numero $i </em>";
        }
      }
    ?>
  </p>
  <h2>Web que mostra la taula de multiplicar del 7:
  </h2>
  <p>
    <?php
      $numeroMutiplicar = 7;
      for ($i = 0; $i <= 10; $i++) {
        $resultado = 0;
        $resultado = $i * $numeroMutiplicar;
        echo "El resultado de la multiplicacion entre $i y $numeroMutiplicar es: $resultado <br>";
      }
    ?>
  </p>
  <h2>Web que mostra els números de l’1 al 10, fent que cada número sigui un hipervincle a la pàgina corresponent de la Vikipèdia:
  </h2>
  <p>
    <?php
      for ($i = 0; $i <= 10; $i++) {
        echo "<a href='https://es.wikipedia.org/wiki/$i'>Viquipedia $i</a><br>";
      }
    ?>
  </p>
</body>
</html>
