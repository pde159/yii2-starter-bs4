<?php


use yii\bootstrap4\Html;
use yii\bootstrap4\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>

<?= Html::beginTag('html', [
    'lang' => Yii::$app->language,
])?>

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?= Html::beginTag('body', [
    'class' => 'hold-transition sidebar-mini',
])?>

<?php $this->beginBody() ?>


<div class="wrapper">

<?php if (Yii::$app->user->isGuest) { ?>
    <?= $this->render('login',[
        'content' => $content,
    ]) ?>
<?php } else { ?>
    <?php NavBar::begin([
        'options'    => [
            'class' => 'main-header navbar navbar-expand bg-white navbar-light border-bottom',
        ],
    ]); ?>
    <?= $this->render('leftbar') ?>
    <?= $this->render('rightbar') ?>
    <?php NavBar::end(); ?>
    <?= $this->render('sidebar') ?>
    <?= $content ?>
    <?= $this->render('control') ?>
    <?= $this->render('footer') ?>
</div>

<?php $this->endBody() ?>

<?= Html::endTag('body') ?>

<?= Html::endTag('html') ?>

<?php $this->endPage() ?>

<?php } ?>