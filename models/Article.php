<?php

namespace app\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }

    public static function getNewest($id, $len = 15)
    {
        $condtions = [
            'top_menu_id' => $id,
            'status' => 0,
        ];

        $order = [
            'publish_time' => SORT_DESC,
            'id' => SORT_DESC,
        ];

        $selects = ['id', 'title', 'keyword', 'publish_time', 'uname', 'uuid', 'menu_id', 'mode'];

        return static::find()->select($selects)
            ->where($condtions)->andWhere(['<>', 'tag', ''])->orderBy($order)
            ->limit($len)->all();
    }

    public static function getFirst($id)
    {
        $condtions = [
            'menu_id' => $id,
            'mode' => 0,
            'status' => 0,
        ];

        return static::find()->where($condtions)->orderBy(['id' => SORT_ASC])->one();
    }

    public static function getArticleByUuid($uuid)
    {
        $condtions = [
            'uuid' => $uuid,
            'status' => 0,
        ];

        return static::find()->where($condtions)->one();
    }

    public static function articleList($id)
    {
        $selects = ['id', 'title', 'keyword', 'publish_time', 'uname', 'uuid', 'tag'];

        $condtions = [
            'menu_id' => $id,
            'mode' => 0,
            'status' => 0,
        ];

        return static::find()->select($selects)->where($condtions)->all();
    }

}
