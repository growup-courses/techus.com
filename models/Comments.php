<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Comments".
 *
 * @property int $id
 * @property string $name
 * @property string $comment_text
 * @property int $news_id
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'comment_text'], 'required'],
            [['comment_text'], 'string'],
            [['news_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'comment_text' => 'Comment Text',
            'news_id' => 'News ID',
        ];
    }
}
