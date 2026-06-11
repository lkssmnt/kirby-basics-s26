<?php snippet("head") ?>

<h1><?= $site->title() ?></h1>

<p><?= $site->introtext() ?></p>

<button><?= t("crazy-button-label") ?></button>

<h2>Projects</h2>
<ul>
  <?php foreach(page("projects")->children()->listed() as $projectpage ): ?>
    <li>
      <a href="<?= $projectpage->url() ?>"><?= $projectpage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>

<h2>Texts</h2>
<ul>
  <?php foreach(page("texts")->children()->listed() as $textpage ): ?>
    <li>
      <a href="<?= $textpage->url() ?>"><?= $textpage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>


<?php if(page("artists")->hasChildren()): ?>
<h2>Artists</h2>
<ul>
  <?php foreach(page("artists")->children()->listed()->sortBy("birthdate", "desc") as $artistpage): ?>
    <li>
      <a href="<?= $artistpage->url() ?>"><?= $artistpage->title() ?></a>
    </li>
  <?php endforeach ?>
</ul>
<?php endif ?>

<?php snippet("foot") ?>