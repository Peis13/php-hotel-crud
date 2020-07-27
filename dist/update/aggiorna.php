<?php
include __DIR__ . "/../database.php";

// Richiesta sql di aggiornamento singola stanza
$id_stanza = $_POST['id_stanza'];
$numero_stanza = $_POST['numero_stanza'];
$letti_stanza = $_POST['letti_stanza'];
$piano_stanza = $_POST['piano_stanza'];

$sql = "UPDATE `stanze` SET `room_number` = $numero_stanza, `beds` = $letti_stanza, `floor` = $piano_stanza, `updated_at` = NOW() WHERE `id` = $id_stanza" ;
$risultato = $conn->query($sql);

if ($risultato) {
  header('Location: ' . $url_base . '/dist/index.php?stanza_aggiornata=' . $numero_stanza);

} else {
  die("query error");
}
$conn->close();
?>
