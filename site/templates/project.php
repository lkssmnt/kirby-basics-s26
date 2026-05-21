<?php snippet("head") ?>

<h1><?= $page->title() ?> (<?= $page->year() ?>)</h1>

<?php

$authorPage = $page->author()->toPage();

?>

<?php if($authorPage): ?>
  <a href="<?=$authorPage->url() ?>"><?=$authorPage->title() ?></a>
<?php else: ?>
  <p>Unknown Artist</p>
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