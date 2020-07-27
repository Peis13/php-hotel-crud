<!-- MAIN -->
<main>
  <section id="tabella-stanze" class="sezione">
    <div class="container">

      <?php if (isset($_GET['stanza_aggiornata'])) { ?>
        <p class="alert">stanza <?php echo $_GET['stanza_aggiornata']; ?> aggiornata con successo!</p>
      <?php } ?>
      <h2>_stanze</h2>

      <!-- Tabella stanze -->
      <table class="stanze">

        <!-- intestazione tabella -->
        <thead>
          <tr>
            <th class="id">id</th>
            <th>numero_stanza</th>
            <th>piano</th>
            <th>info</th>
            <th>modifica</th>
            <th>elimina</th>
          </tr>
        </thead>
        <!-- fine intestazione tabella -->

        <!-- corpo tabella -->
        <tbody>
          <?php foreach ($stanze as $singola_stanza) { ?>
            <tr>
              <td><?php echo $singola_stanza['id']; ?></td>
              <td><?php echo $singola_stanza['room_number']; ?></td>
              <td><?php echo $singola_stanza['floor']; ?></td>

              <!-- info -->
              <td class="testo-centrato">
                <a href="<?php echo $url_base . "/dist/read/info.php?id=" . $singola_stanza['id']; ?>">
                  <i class="far fa-hand-point-right"></i>
                </a>
              </td>
              <!-- fine info -->

              <!-- modifica -->
              <td class="testo-centrato">
                <a href="<?php echo $url_base . "/dist/update/modifica.php?id=" . $singola_stanza['id']; ?>">
                  <i class="fas fa-edit"></i>
                </a>
              </td>
              <!-- fine modifica -->

              <!-- elimina -->
              <td class="testo-centrato">
                <form action="<?php echo $url_base . "/dist/delete/elimina.php"; ?>" method="post">
                  <input type="hidden" name="id_stanza" value="<?php echo $singola_stanza['id']; ?>">
                  <input class="elimina" type="submit" name="delete" value="X">
                </form>
              </td>
              <!-- fine elimina -->
            </tr>
          <?php } ?>
        </tbody>
        <!-- fine corpo tabella -->
      </table>
      <!-- Fine Tabella stanze -->
    </div>
  </section>
</main>
<!-- FINE MAIN -->
