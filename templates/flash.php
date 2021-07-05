<? require_once "helper.php" ?>

<? if (Helper::has_flash()): ?>
  <div class="alert alert-<?= Helper::flash()->type ?>">
    <?= Helper::flash()->message ?>
  </div>
<? endif ?>