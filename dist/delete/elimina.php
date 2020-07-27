<?php
include __DIR__ . "/../database.php";

// Richiesta sql di eliminazione singola stanza
$id_stanza = $_POST['id_stanza'];
$sql = "DELETE FROM `stanze` WHERE `id` = $id_stanza";
$risultato = $conn->query($sql);

if (!$risultato) {
  die("Eliminazione non riuscita");
}
include __DIR__ . "/.." . $ref_header;
?>

<main>
  <section id="eliminazione-stanza" class="sezione">
    <div class="container">
      <p class="alert">elminazione avvenuta con successo!</p>
    </div>
  </section>
</main>
