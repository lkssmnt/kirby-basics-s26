<?php snippet("head") ?>

<h1><?= $page->title() ?> (<?= $page->year() ?>)</h1>

<?php

$authorPage = $page->author()->toPage();

?>

<?php if($authorPage): ?>
  <a href="<?=$authorPage->url() ?>"><?=$authorPage->title() ?></a>
<?php else: ?>
  <div class="placeholder">Placeholder</div>
<?php endif ?>

<div class="images">
  <?php foreach ($page->gallery()->toFiles() as $image): ?>
    <img src="<?= $image->url() ?>">
  <?php endforeach ?>
</div>

<div class="text">
  <?= $page->text() ?>
</div>

<?php snippet("foot") ?>