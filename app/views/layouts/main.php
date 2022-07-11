<?php
/**
 * @var \yii\web\View $this
 * @var string $content
 */
\app\Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= app()->language ?>">
<head>
<title><?= $this->title ?? app()->name ?></title>
<meta charset="<?= app()->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<main class="container">
    <?= $content ?>
</main>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>