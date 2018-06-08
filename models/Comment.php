<?php

namespace app\models;

use \yii\db\ActiveRecord;

class Comment extends ActiveRecord {
    public static function tableName() {
        return 'comments';
    }

    public function rules() {
        return [
            [['name', 'comment_text'], 'required'],
            [['comment_text'], 'string'],
            [['good_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['good_id' => 'id']],
        ];
    }

    public function getGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'good_id']);
    }
}
