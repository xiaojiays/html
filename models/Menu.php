<?php

namespace app\models;

use yii\db\ActiveRecord;

class Menu extends ActiveRecord
{
    public static function tableName()
    {
        return 'menus';
    }

    public static function getIndexMenus()
    {
        $conditions = [
            'pid' => 0,
            'status' => 0,
        ];

        return static::find()->where($conditions)
            ->orderBy(['sortNo' => SORT_DESC])->all();
    }

    public static function getMenuByUname($uname)
    {
        return static::find()->where(['uname' => $uname])->one();
    }

    public static function getSubMenus($id)
    {
        $conditions = [
            'pid' => $id,
            'status' => 0,
        ];

        return static::find()->where($conditions)
            ->orderBy(['sortNo' => SORT_DESC])->all();
    }

    public static function getSubMenu($id)
    {
        $conditions = [
            'pid' => $id,
            'status' => 0,
        ];

        return static::find()->where($conditions)
            ->orderBy(['sortNo' => SORT_DESC])->one();
    }
}
