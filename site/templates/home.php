<?php snippet("head") ?>

<h1><?= $site->title() ?></h1>

<h2>Projects</h2>
<ul>
  <?php foreach(page("projects")->children() as $projectpage ): ?>
    <li>
      <a href="<?= $projectpage->url() ?>"><?= $projectpage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<h2>Texts</h2>
<ul>
  <?php foreach(page("texts")->children() as $textpage ): ?>
    <li>
      <a href="<?= $textpage->url() ?>"><?= $textpage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("foot") ?>