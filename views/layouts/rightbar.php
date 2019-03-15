<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use kartik\icons\Icon;
use kartik\bs4dropdown\Dropdown;

?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => [
        [
            'label'  => Icon::show('user').'<span class="badge badge-danger navbar-badge">3</span>',
            'encode' => false,
            'url' => ['#'],
            'linkOptions' => [
                'data-toggle' => 'dropdown',
            ],
            'items' => [
                [
                    'label'  => 'username',
                    'url' => ['#'],
                ],
            ],
        ],
    ],
    'dropdownClass' => Dropdown::classname()
]); ?>
