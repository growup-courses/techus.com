<?php

use yii\db\Migration;

class m180602_155912_create_comments_table extends Migration {

    public function safeUp() {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this -> string(50) -> notNull(),
            'comment_text' => $this -> text() -> notNull(),
            'good_id' => $this -> integer()
        ]);

        $this->addForeignKey('fk-comments-good_id', 'comments', 'good_id', 'goods', 'id', 'CASCADE');
    }

    public function safeDown() {
      $this->dropForeignKey(
          'fk-comments-good_id',
          'comments'
      );

      $this->dropTable('comments');
    }
}
