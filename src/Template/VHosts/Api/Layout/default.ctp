<!DOCTYPE html>
<html lang="en">
<head>
<title><?= h($this->fetch('title')); ?></title>
<?php
echo $this->Html->css('/css/api.css');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<nav>
  <h1><?= $this->Html->Link($this->fetch('title'), '/') ?>
  <?php if (isset($version)): ?>
    <?= h('> ') . $this->Html->Link($version, []) ?>
  <?php endif; ?>
  </h1>
  <span class="navmenu">
    <?= $this->Html->Link('Go to Tatoeba', $this->Api->getTatoebaUrl()) ?>
  </span>
</nav>

<?= $this->fetch('content') ?>

</body>
</html>
