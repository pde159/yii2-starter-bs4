<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use kartik\icons\Icon;
use kartik\bs4dropdown\Dropdown;

?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => [
        [
            'label'  => Icon::show('bars'),
            'encode' => false,
            'url' => ['#'],
            'linkOptions' => [
                'data-widget' => 'pushmenu',
            ],
        ],
        [
            'label' => Icon::show('home').Yii::t('app', 'Home'),
            'encode' => false,
            'url' => ['/site/index']
        ],
    ],
    'dropdownClass' => Dropdown::classname()
]); ?>

<?= Html::beginForm(['/site/search'], 'get', ['class' => 'form-inline ml-3']);?>

    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <?= Icon::show('search') ?>
            </button>
        </div>
    </div>

<?= Html::endForm(); ?>