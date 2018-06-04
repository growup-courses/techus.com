<?php

namespace app\models;

use \yii\db\ActiveRecord;

class Good extends ActiveRecord {

    public static function tableName() {
        return 'goods';
    }

    public function rules()
    {
        return [
            [['category_id', 'producer_id', 'weight', 'width', 'height', 'active', 'quantity', 'like', 'dislike'], 'integer'],
            [['name'], 'required'],
            [['price', 'old_price'], 'number'],
            [['name', 'color', 'model_name'], 'string', 'max' => 50],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categorys::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producers::className(), 'targetAttribute' => ['producer_id' => 'id']],
        ];
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['good_id' => 'id']);
    }


    public function getCategory()
    {
        return $this->hasOne(Categorys::className(), ['id' => 'category_id']);
    }


    public function getProducer()
    {
        return $this->hasOne(Producers::className(), ['id' => 'producer_id']);
    }
}
