<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body class="container">
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <?= Html::a('Главная', '/web')?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Статьи', ['post/index'])?>
                </li>
                <li class="nav-item">
                <?= Html::a('Статья', ['post/show'])?>
                </li>
            </ul>
        </div>
        <?= $content?>
    </div>   
    <?php 
    if (isset ($this->blocks['Block1'])):
        echo $this->blocks['Block1'];
    endif;
    ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>