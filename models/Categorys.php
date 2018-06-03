<?php

namespace app\models;

use Yii;

class Categorys extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'category';
    }

    public function rules() {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
