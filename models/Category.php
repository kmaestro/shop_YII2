<?php
/**
 * Created by PhpStorm.
 * User: polis
 * Date: 26.09.2016
 * Time: 15:45
 */

namespace app\models;

use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}