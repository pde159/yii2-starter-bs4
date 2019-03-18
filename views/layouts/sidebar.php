<?php

use yii\bootstrap4\Html;
use kartik\icons\Icon;
use app\widgets\Menu;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <?= Html::a(
        Html::img('@web/img/yii-logo.png', [
            'alt'   => 'App Logo',
            'class' => 'brand-image img-circle elevation-3',
            'style' => 'opacity: .8',
        ]).Html::tag('span', 'TOT', ['class' => 'brand-text font-weight-light']),
        ['site/index'],
        ['class' => 'brand-link']
    ) ?>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <?= cebe\gravatar\Gravatar::widget([
                    'email' => Yii::$app->user->identity->profile->getAttribute('gravatar_email') || null,
                    'options' => [
                        'alt' => 'User Image',
                        'class' => "img-circle elevation-2"
                    ],
                ]) ?>
            </div>
            <div class="info">
                <?= Html::a('Alexander Pierce', ['#'], ['class' => 'd-block']) ?>
                <?= Html::a(
                    Icon::show('circle',['class' => 'text-success fa-fw']).Yii::t('app', 'Online'),
                    ['/user/settings/account'],
                    ['class' => 'd-block']
                ) ?>
            </div>
        </div>

        <nav class="mt-2">
        <?= Menu::widget([
            'items' => [
                ['label' => 'Menu', 'options' => ['class' => 'text-white']],
                [
                    'label' => 'dashboard',
                    'url'   => ['/site'],
                    'icon'  => Icon::show('tachometer-alt'),
                ],
                [
                    "label" => Yii::t('app', 'Admin'),
                    "icon"  => Icon::show('users'),
                    "items" => [
                        [
                            "label" => Yii::t('app', 'Users Management'),
                            "icon" => Icon::show('user'),
                            "url" => ["/user/admin/index"],
                            "visible" => Yii::$app->user->can('userManage'),
                        ],
                        [
                            "label" => Yii::t('app', 'Advanced'),
                            "icon" => Icon::show('microchip'),
                            "items" => [
                                [
                                    "label" => "OP Cache",
                                    "icon" => Icon::show('archive'),
                                    "url" => ["/opcache/default/index"]
                                ],
                                [
                                    "label" => "GII helper", 
                                    "icon" => Icon::show('thumbs-up'),
                                    "url" => ["/gii"]],
                            ],
                            "visible" => Yii::$app->user->can('advancedView'),
                        ],
                    ],
                    "visible" => Yii::$app->user->can('userManage') || Yii::$app->user->can('advancedView'),
                ],
            ],
        ]); ?>
        </nav>
    </div>
</aside>