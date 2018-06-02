<?php

use yii\db\Migration;

class m180602_153855_create_good_table extends Migration {

    public function safeUp() {
        $this->createTable('good', [
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
    }

    public function safeDown() {
        $this->dropTable('good');
    }
}
