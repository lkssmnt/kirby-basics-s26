<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>


<a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a>

<p>Date of birth: <?= $page->birthdate()->toDate("n/d/Y") ?></p>

<div class="text">
  <?= $page->bio() ?>
</div>

<?php snippet("foot") ?>