<?php

use yii\db\Migration;

class m180607_211159_create_comments_table extends Migration {

    public function safeUp() {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this -> string(50) -> notNull(),
            'comment_text' => $this -> text() -> notNull(),
            'news_id' => $this -> integer()
        ]);

        $this->addForeignKey('fk-comments-news_id', 'comments', 'news_id', 'news', 'id', 'CASCADE' , 'CASCADE');
    }

    public function safeDown() {
      $this->dropForeignKey(
          'fk-comments-news_id',
          'comments'
      );

      $this->dropTable('comments');
    }
}
