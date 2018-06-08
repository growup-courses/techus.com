<?php

namespace app\models;

use \yii\db\ActiveRecord;

class Producer extends ActiveRecord {
    public static function tableName() {
        return 'producers';
    }

    public function rules() {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }
}
