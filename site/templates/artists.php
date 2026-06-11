<?php snippet("head") ?>

<h1>Artists</h1>

<ul>
  <?php foreach ($page->children() as $artist):  ?>
    <li>
      <a href="<?= $artist->url() ?>"><?= $artist->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("foot") ?>