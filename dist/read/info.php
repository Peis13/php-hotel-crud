<?php
include __DIR__ . "/server.php";
include __DIR__ . "/.." . $ref_header;
?>

<!-- MAIN -->
<main>
  <section id="info-stanza" class="sezione">
    <div class="container">
      <h2>_stanza numero:&nbsp;<?php echo $stanza['room_number']; ?></h2>

      <!-- Info stanza -->
      <ul class="lista-info">
        <li>
          <span class="id">id:&nbsp;</span>
          <?php echo $stanza['id']; ?>
        </li>
        <li>
          <span>numero:&nbsp;</span>
          <?php echo $stanza['room_number']; ?>
        </li>
        <li>
          <span>letti:&nbsp;</span>
          <?php echo $stanza['beds']; ?>
        </li>
        <li>
          <span>piano:&nbsp;</span>
          <?php echo $stanza['floor']; ?>
        </li>
        <li>
          <span>data aggiornamento:&nbsp;</span>
          <?php echo $stanza['updated_at']; ?>
        </li>
      </ul>
      <!-- Fine Info stanza -->

      <!-- modifica -->
      <a class="modifica" href="<?php echo $url_base . "/dist/update/modifica.php?id=" . $stanza['id']; ?>">
        modifica
      </a>
      <!-- fine modifica -->

      <!-- Tasto Home -->
      <a class="alert" href="<?php echo $url_base; ?>/dist">
        Torna alla Home
      </a>
      <!-- Fine Tasto Home -->
    </div>
  </section>
</main>
<!-- FINE MAIN -->
