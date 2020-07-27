<?php
include __DIR__ . "/server.php";
include __DIR__ . "/.." . $ref_header;
?>

<!-- MAIN -->
<main>
  <section id="modifica-stanza" class="sezione">
    <div class="container">
      <h2>_modifica dettagli stanza: <?php echo $stanza['room_number']; ?></h2>

      <!-- Modifica stanza -->
      <form class="form-modifica" action="<?php echo $url_base . '/dist/update/aggiorna.php'; ?>" method="post">

        <!-- singola modifica -->
        <div class="singola-modifica">
          <label>numero:&nbsp;</label>
          <input type="text" name="numero_stanza" value="<?php echo $stanza['room_number']; ?>">
        </div>
        <!-- fine singola modifica -->

        <!-- singola modifica -->
        <div class="singola-modifica">
          <label>letti:&nbsp;</label>
          <input type="text" name="letti_stanza" value="<?php echo $stanza['beds']; ?>">
        </div>
        <!-- fine singola modifica -->

        <!-- singola modifica -->
        <div class="singola-modifica">
          <label>piano:&nbsp;</label>
          <input type="text" name="piano_stanza" value="<?php echo $stanza['floor']; ?>">
        </div>
        <!-- fine singola modifica -->

        <!-- conferma modifiche -->
        <div class="conferma">
          <input type="hidden" name="id_stanza" value="<?php echo $stanza['id']; ?>">
          <input type="submit" value="conferma">
        </div>
        <!-- fine conferma modifiche -->
      </form>
      <!-- Fine Modifica stanza -->

      <!-- Tasto Home -->
      <a class="alert" href="<?php echo $url_base; ?>/dist">
        Torna alla Home
      </a>
      <!-- Fine Tasto Home -->
    </div>
  </section>
</main>
<!-- MAIN -->
