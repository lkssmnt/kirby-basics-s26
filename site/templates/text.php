<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>
<p><?= $page->author() ?></p>
<p><?= $page->year() ?></p>

<div class="text">
  <?= $page->text() ?>
</div>

<?php snippet("foot") ?>