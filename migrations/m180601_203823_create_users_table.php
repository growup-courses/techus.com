<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180601_203823_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this -> string(50) -> notNull() -> unique(),
            'password' => $this -> string(),
            'is_online' => $this -> boolean(),
            'name' => $this -> string() -> notNull(),
            'surname' => $this -> string(),
            'avatar' => $this -> string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
