<?php

use yii\db\Migration;

class m180602_153907_create_categorys_table extends Migration {

    public function safeUp() {
        $this->createTable('categorys', [
            'id' => $this->primaryKey(),
            'name' => $this -> string() -> notNull()
        ]);
    }

    public function safeDown() {
        $this->dropTable('categorys');
    }
}
