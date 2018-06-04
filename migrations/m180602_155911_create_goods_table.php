<?php

use yii\db\Migration;

class m180602_155911_create_goods_table extends Migration {

    public function safeUp() {
        $this->createTable('goods', [
            'id' => $this->primaryKey(),
            'category_id' => $this -> integer(),
            'name' => $this -> string(50) -> notNull(),
            'price' => $this -> decimal(),
            'old_price' => $this -> decimal(),
            'color' => $this -> string(50),
            'producer_id' => $this-> integer(),
            'weight' => $this -> integer(),
            'width' => $this -> integer(),
            'height' => $this -> integer(),
            'model_name' => $this -> string(50),
            'active' => $this -> boolean(),
            'quantity' => $this -> integer(),
            'like' => $this -> integer(),
            'dislike' => $this -> integer()
        ]);

        $this->addForeignKey('fk-goods-category_id', 'goods', 'category_id', 'categorys', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-goods-producer_id', 'goods', 'producer_id', 'producers', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown() {
        $this->dropForeignKey(
            'fk-goods-category_id',
            'goods'
        );

        $this->dropForeignKey(
            'fk-goods-producer_id',
            'goods'
        );

        $this->dropTable('goods');
    }
}
