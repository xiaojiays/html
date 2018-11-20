<?php

namespace app\models;

use yii\db\ActiveRecord;

class Text extends ActiveRecord
{
    public static function tableName()
    {
        return 'texts';
    }
}
