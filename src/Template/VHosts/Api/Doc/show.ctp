<?php
$this->Html->script('/js/openapi-explorer.min.js', ['block' => 'script', 'type' => 'module']);
$this->Html->css('/css/openapi-explorer.css', ['block' => 'css']);
$this->assign('title', 'Tatoeba API');
$specurl = "/openapi-$version.json";
?>
<openapi-explorer spec-url="<?= h($specurl) ?>">
</openapi-explorer>
