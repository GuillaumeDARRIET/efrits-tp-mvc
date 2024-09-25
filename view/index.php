<?php insertIntoView('/layout.php', $params) ?>

<main>
  <?php importView('/components/title.php',  ['value' => $title]); ?>
  <?php importView('/components/paragraphe.php',  ['value' => $description]); ?>
</main>