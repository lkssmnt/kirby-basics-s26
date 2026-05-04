<?php snippet("head") ?>

<h1><?= $page->title() ?> (<?= $page->year() ?>)</h1>
<p><?= $page->author() ?></p>

<div class="images">
  <?php foreach ($page->gallery()->toFiles() as $image): ?>
    <img src="<?= $image->url() ?>">
  <?php endforeach ?>
</div>

<div class="text">
  <?= $page->text() ?>
</div>

<?php snippet("foot") ?>