<?php

use yii\db\Migration;

class m180602_153839_create_products_table extends Migration {

    public function safeUp()
    {
        $this->createTable('products', [
          'id' => $this->primaryKey(),
          'name' => $this -> string() -> notNull()
      ]);
    }

  public function safeDown() {
        $this->dropTable('products');
    }
}
