<?php
require_once __DIR__ . '/ClassSetGet.php';

try {
  $DanieleRiccardi = new Dipendente(1, 'Daniele Riccardi', 'Barman/Cameriere', 'Intermittenti');
  $DanieleRiccardi->setId(1);
  // echo $DanieleRiccardi->getId();
  // var_dump($DanieleRiccardi->getAll());
} catch (\Exception $e) {
  echo "Errore: " . $e->getMessage();
}

try {
  $AndreaParis = new Dipendente(2, 'Andrea Paris', 'Barman/Cassiere/Artistic Director', 'Intermittenti');
  $AndreaParis->setId(2);
  // echo $AndreaParis->getId();
  // var_dump($AndreaParis->getAll());
} catch (\Exception $e) {
  echo "Errore: " . $e->getMessage();
}

try {
  $MauroLanzi = new Dipendente(3, 'Mauro Lanzi', 'Barman/Barista/Cassiere', 'Indeterminato');
  $MauroLanzi->setId(3);
  // echo $MauroLanzi->getId();
  // var_dump($MauroLanzi->getAll());
} catch (\Exception $e) {
  echo "Errore: " . $e->getMessage();
}
?>

