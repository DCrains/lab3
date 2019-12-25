<?php

use yii\db\Migration;

class m191211_155936_03_create_table_trains extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%kursi}}', [
            'id' => $this->primaryKey(),
            'kursname' => $this->string(),
            'description' => $this->string(1000)->notNull(),
            
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%trains}}');
    }
}
