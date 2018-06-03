<?php

namespace app\models;

use Yii;

class Goods extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'good';
    }

    public function rules() {
        return [
            [['category_id', 'producer_id', 'weight', 'width', 'height', 'active', 'quantity', 'like', 'dislike'], 'integer'],
            [['name'], 'required'],
            [['price', 'old_price'], 'number'],
            [['name', 'color', 'model_name'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'color' => 'Color',
            'producer_id' => 'Producer ID',
            'weight' => 'Weight',
            'width' => 'Width',
            'height' => 'Height',
            'model_name' => 'Model Name',
            'active' => 'Active',
            'quantity' => 'Quantity',
            'like' => 'Like',
            'dislike' => 'Dislike',
        ];
    }
}
