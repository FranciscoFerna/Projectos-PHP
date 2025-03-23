<!--
Estem començant a programar en llenguatge de servidor, i encara ens falten molts coneixements per adquirir, però ja estem capacitats per a fer diverses coses…
Així doncs, sabent que la funció rand ens retorna un aleatori dins un rang…
Volem una aplicació que simuli el llançament d’una moneda 1000 cops, i mostri per pantalla el resultat de forma absoluta (han sortit 519 cares i 481 creus) i en percentatge (51.90% cares i 48.10% creus).

Volem una aplicació que simuli el llançament d’un dau de 6 cares 1000 cops, i igual que a l’exercici anterior, mostri els resultats absoluts i percentuals.
Si voleu aprendre una mica més (creiem que aquest és el vostre objectiu d’estar realitzant una formació presencial), podeu afegir-li una mica d’interfície gràfica, ja sigui fent-vos un css, o bé aprofitant un biblioteca o marc css ja existent, com Bootstrap o TailWind.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>M7-A02 - Estadístiques bàsiques 🎲
  </title>
</head>

<body>
  <h1>M7-A02 - Estadístiques bàsiques 🎲</h1>
  <h2>Volem una aplicació que simuli el llançament d’una moneda 1000 cops, i mostri per pantalla el resultat de forma
    absoluta (han sortit 519 cares i 481 creus) i en percentatge (51.90% cares i 48.10% creus).</h2>

  <p>
    <?php
    $resultadosCaras = 0;
    $resultadosCruz = 0;

    for ($i = 0; $i < 1000; $i++) {
      $lanzamiento = rand(1, 2);
      if ($lanzamiento == 1) {
        $resultadosCaras++;
      } else {
        $resultadosCruz++;
      }
    }
    $porcentajeCaras = ($resultadosCaras / 1000) * 100;
    $porcentajeCruz = ($resultadosCruz / 1000) * 100;
    ?>
    <strong>Resultats:</strong> <br>
    Han sortit <strong><?= $resultadosCaras ?></strong> cares i <strong><?= $resultadosCruz ?></strong> creus.<br>
    En percentatge: <strong><?= number_format($porcentajeCaras, 2) ?>%</strong> cares i
    <strong><?= number_format($porcentajeCruz, 2) ?>%</strong> creus.
  </p>

  <h2>Volem una aplicació que simuli el llançament d’un dau de 6 cares 1000 cops, i igual que a l’exercici anterior,
    mostri els resultats absoluts i percentuals.</h2>
  <>
    <?php
    $resultadoDadoUno = 0;
    $resultadoDadoDos = 0;
    $resultadoDadoTres = 0;
    $resultadoDadoCuatro = 0;
    $resultadoDadoCinco = 0;
    $resultadoDadoSeis = 0;

    for ($i = 0; $i < 1000; $i++) {
      $dado = rand(1, 6);
      switch ($dado) {
        case 1:
          $resultadoDadoUno++;
          break;
        case 2:
          $resultadoDadoDos++;
          break;
        case 3:
          $resultadoDadoTres++;
          break;
        case 4:
          $resultadoDadoCuatro++;
          break;
        case 5:
          $resultadoDadoCinco++;
          break;
        case 6:
          $resultadoDadoSeis++;
          break;
      }
    }
    $porcentajeDadoUno = ($resultadoDadoUno / 1000) * 100;
    $porcentajeDadoDos = ($resultadoDadoDos / 1000) * 100;
    $porcentajeDadoTres = ($resultadoDadoTres / 1000) * 100;
    $porcentajeDadoCuatro = ($resultadoDadoCuatro / 1000) * 100;
    $porcentajeDadoCinco = ($resultadoDadoCinco / 1000) * 100;
    $porcentajeDadoSeis = ($resultadoDadoSeis / 1000) * 100;
    ?>

    Resultats del llançament del dau 1000 cops: <br>
     Ha sortit <strong><?= $resultadoDadoUno ?></strong> vegades (<?= number_format($porcentajeDadoUno, 2) ?>%)<br>
     Ha sortit <strong><?= $resultadoDadoDos ?></strong> vegades (<?= number_format($porcentajeDadoDos, 2) ?>%)<br>
     Ha sortit <strong><?= $resultadoDadoTres ?></strong> vegades (<?= number_format($porcentajeDadoTres, 2) ?>%)<br>
     Ha sortit <strong><?= $resultadoDadoCuatro ?></strong> vegades
    (<?= number_format($porcentajeDadoCuatro, 2) ?>%)<br>
     Ha sortit <strong><?= $resultadoDadoCinco ?></strong> vegades
    (<?= number_format($porcentajeDadoCinco, 2) ?>%)<br>
     Ha sortit <strong><?= $resultadoDadoSeis ?></strong> vegades (<?= number_format($porcentajeDadoSeis, 2) ?>%)<br>
    </p>
</body>

</html>
