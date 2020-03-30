<?php
require_once __DIR__ . '/classes/ClassSetGet.php';
require_once __DIR__ . '/classes/Dipendenti.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dipendenti</title>
</head>

<body>
  <h1 style="color: purple">ID Dipenendente: <span style="color: red"><?php echo $DanieleRiccardi->getId() ?></span></h1>
  <ul>
    <li style="color: green">Nome e Cognome: <span style="color: red"><?php echo $DanieleRiccardi->getNome() ?></span></li>
    <li style="color: green">Ruolo: <span style="color: red"><?php echo $DanieleRiccardi->getRuolo() ?></span></li>
    <li style="color: green">Contratto: <span style="color: red"><?php echo $DanieleRiccardi->getContratto() ?></span></li>
  </ul>
  <h1 style="color: purple">ID Dipenendente: <span style="color: red"><?php echo $AndreaParis->getId() ?></span></h1>
  <ul>
    <li style="color: green">Nome e Cognome: <span style="color: red"><?php echo $AndreaParis->getNome() ?></span></li>
    <li style="color: green">Ruolo: <span style="color: red"><?php echo $AndreaParis->getRuolo() ?></span></li>
    <li style="color: green">Contratto: <span style="color: red"><?php echo $AndreaParis->getContratto() ?></span></li>
  </ul>
  <h1 style="color: purple">ID Dipenendente: <span style="color: red"><?php echo $MauroLanzi->getId() ?></span></h1>
  <ul>
    <li style="color: green">Nome e Cognome: <span style="color: red"><?php echo $MauroLanzi->getNome() ?></span></li>
    <li style="color: green">Ruolo: <span style="color: red"><?php echo $MauroLanzi->getRuolo() ?></span></li>
    <li style="color: green">Contratto: <span style="color: red"><?php echo $MauroLanzi->getContratto() ?></span></li>
  </ul>
</body>

</html>