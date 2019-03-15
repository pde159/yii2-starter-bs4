<?php

use yii\bootstrap4\Html;
use kartik\icons\Icon;
use app\widgets\Menu;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <?= Html::a(
        Html::img('@web/images/logo.png', [
            'alt'   => 'AdminLTE Logo',
            'class' => 'brand-image img-circle elevation-3',
            'style' => 'opacity: .8',
        ]).Html::tag('span', 'TOT', ['class' => 'brand-text font-weight-light']),
        ['site/index'],
        ['class' => 'brand-link']
    ) ?>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <?= Html::img('@web/images/user2-160x160.jpg', [
                'alt'   => 'User Image',
                'class' => 'img-circle elevation-2',
            ]) ?>
            </div>
            <div class="info">
                <?= Html::a('Alexander Pierce', ['#'], ['class' => 'd-block']) ?>
            </div>
        </div>

        <nav class="mt-2">
        <?= Menu::widget([
            'items' => [
                [
                    'label' => 'dashboard',
                    'url'   => ['#'],
                    'icon'  => Icon::show('tachometer-alt'),
                ],
                [
                    'label' => 'Products',
                    'url'   => ['product/index'],
                    'icon'  => Icon::show('cubes'),
                    'badge' => 'New',
                    'badgeOptions' => [
                        'class' => 'badge badge-danger',
                    ],
                    'items' => [
                        [
                            'label' => 'New Arrivals',
                            'url'   => ['product/index'],
                            'badge' => 'New',
                            'badgeOptions' => [
                                'class' => 'right badge badge-danger',
                            ],
                        ],
                        [
                            'label' => 'Most Popular',
                            'url'   => ['product/index',
                            'tag'   => 'popular']
                        ],
                    ],
                ],
                [
                    'label' => 'Login', 
                    'url' => ['site/login'],
                ],
                [
                    'label' => 'User Manage', 
                    'url' => ['/user/admin/index'],
                ],
                [
                    'label' => Yii::t('app', 'RBAC Rules'),
                    'url' => '#',
                    'icon' => Icon::show('flag'),
                    'active' => in_array(Yii::$app->controller->id, ['rbac-auth-assignment', 'rbac-auth-item', 'rbac-auth-item-child', 'rbac-auth-rule']),
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Auth Assignment'),
                            'url' => ['/rbac/rbac-auth-assignment/index'],
                            'icon' => Icon::show('circle'),
                        ],
                        [
                            'label' => Yii::t('app', 'Auth Items'),
                            'url' => ['/rbac/rbac-auth-item/index'],
                            'icon' => Icon::show('circle'),
                        ],
                        [
                            'label' => Yii::t('app', 'Auth Item Child'),
                            'url' => ['/rbac/rbac-auth-item-child/index'],
                            'icon' => Icon::show('circle'),
                        ],
                        [
                            'label' => Yii::t('app', 'Auth Rules'),
                            'url' => ['/rbac/rbac-auth-rule/index'],
                            'icon' => Icon::show('circle'),
                        ],
                    ],
                ],
            ],
        ]); ?>
        </nav>
    </div>
</aside>