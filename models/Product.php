<?php
/**
 * Created by PhpStorm.
 * User: polis
 * Date: 26.09.2016
 * Time: 15:51
 */

namespace app\models;

use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}