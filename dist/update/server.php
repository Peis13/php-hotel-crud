<?php
include __DIR__ . "/../database.php";

// Richiesta sql mediante id dei dati di una singola stanza
$id_stanza = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_stanza";
$risultato = $conn->query($sql);

if ($risultato && $risultato->num_rows > 0) {

  // risultato di ritorno richiesta database (singola stanza)
  $stanza = $risultato->fetch_assoc();

} elseif ($risultato) {
  die("La stanza non esiste");

} else {
  die("query error");
}
$conn->close();
?>
