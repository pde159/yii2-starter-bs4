<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use kartik\icons\Icon;
use kartik\bs4dropdown\Dropdown;
use cebe\gravatar\Gravatar;

?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => [
        [
            'label'  => Icon::show('sign-out-alt'),
            'encode' => false,
            'url' => ['/user/security/logout'],
            'linkOptions' => [
                'data-method' => 'POST',
                'data-toggle' => 'tooltip',
                'title' => Yii::t('app', 'Sign Out')
            ],
        ],
    ],
    
    'dropdownClass' => Dropdown::classname()
]); ?>
