<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $title
 * @property string $content
 */
class Post extends ActiveRecord
{
    public static function getItems(): array
    {
        return self::find()->all();
    }
}