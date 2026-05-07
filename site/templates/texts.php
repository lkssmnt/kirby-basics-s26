<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>

<ul>
  <?php foreach ($page->children() as $textpage): ?>
    <li>
      <a href="<?= $textpage->url() ?>"><?= $textpage->title() ?></a>

      <ul>
        <?php foreach($textpage->children() as $childtextpage): ?>
          <li>
            <a href="<?= $childtextpage->url() ?>"><?= $childtextpage->title() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("foot") ?>