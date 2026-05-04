<?php snippet("head") ?>

<h1>Projects</h1>

<ul>
  <?php foreach ($page->children() as $project):  ?>
    <li>
      <a href="<?= $project->url() ?>"><?= $project->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("foot") ?>