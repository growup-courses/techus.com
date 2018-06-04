<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180603_071508_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'author' => $this -> string(),
            'text' => $this -> text(),
            'likes' => $this -> integer(),
            'dislikes' => $this -> integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
