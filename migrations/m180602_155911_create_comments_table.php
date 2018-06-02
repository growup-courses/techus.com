<?php

use yii\db\Migration;

class m180602_155911_create_comments_table extends Migration {

    public function safeUp() {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this -> string(50) -> notNull(),
            'comment_text' => $this -> text() -> notNull()
        ]);
    }

    public function safeDown() {
        $this->dropTable('comments');
    }
}
