<nav>
  <ul>
    <?php foreach ($site->nav()->toPages() as $navPage): ?>
      <li>
        <a href="<?= $navPage->url() ?>"><?= $navPage->navlabel()->isNotEmpty() ? $navPage->navlabel() : $navPage->title() ?></a>
      </li>
    <?php endforeach ?>
  </ul>

  <ul>
    <?php foreach ($kirby->languages() as $language): ?>
      <li>
        <a href="<?= $page->url($language->code()) ?>"><?= $language ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>