<?php

use yii\db\Migration;

class m190318_140713_init_rbac extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $userManage = $auth->createPermission('userManage');
        $userManage->description = 'Can manage users and permissions';
        $auth->add($userManage);

        $auth = Yii::$app->authManager;
        $advancedView = $auth->createPermission('advancedView');
        $advancedView->description = 'Can view advanced application informations';
        $auth->add($advancedView);

        $administrators = $auth->createRole('administrators');
        $auth->add($administrators);
        $auth->addChild($administrators, $userManage);
        $auth->addChild($administrators, $advancedView);
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }
}
