<?php

namespace app\models;

use Yii;

class News extends \yii\db\ActiveRecord {
    public static function tableName() {
        return 'news';
    }

    public function rules() {
        return [
            [['text'], 'string'],
            [['likes', 'dislikes'], 'integer'],
            [['author'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'text' => 'Text',
            'likes' => 'Likes',
            'dislikes' => 'Dislikes',
        ];
    }

    public function extraFields() {
      return ['comments'];
    }

    public function getComments() {
        return $this->hasMany(Comments::className(), ['news_id' => 'id']);
    }
}
