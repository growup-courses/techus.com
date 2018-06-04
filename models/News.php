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

    public static function maxLike() {
      return self::find() -> max('likes');
    }

    public static function maxDislike() {
      return self::find() -> max('dislikes');
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
}
