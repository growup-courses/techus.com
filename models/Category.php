<?php

namespace app\models;

use \yii\db\ActiveRecord;

class Category extends ActiveRecord{
    public static function tableName() {
        return 'categorys';
    }

    public function rules() {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function getGoods() {
        return $this->hasMany(Goods::className(), ['good_id' => 'id']);
    }
}
