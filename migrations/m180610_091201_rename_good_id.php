<?php

use yii\db\Migration;

/**
 * Class m180610_091201_rename_good_id
 */
class m180610_091201_rename_good_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->dropForeignKey('fk-comments-good_id', 'comments');
      $this->renameColumn('comments', 'good_id', 'news_id', $this->integer());
      $this->addForeignKey('fk-comments-news_id', 'comments', 'news_id', 'news', 'id', 'CASCADE' , 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropForeignKey('fk-comments-news_id', 'comments');
      $this->renameColumn('comments', 'news_id', 'good_id', $this->integer());
      $this->addForeignKey('fk-comments-good_id', 'comments', 'good_id', 'goods', 'id', 'CASCADE' , 'CASCADE');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180610_091201_rename_good_id cannot be reverted.\n";

        return false;
    }
    */
}
