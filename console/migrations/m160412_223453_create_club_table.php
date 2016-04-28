<?php

use yii\db\Migration;
use yii\db\Schema;

class m160412_223453_create_club_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%club}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT.' NOT NULL ',
            'description' => Schema::TYPE_TEXT.' NOT NULL DEFAULT ""',
            'created_at' => Schema::TYPE_DATE ,
            'updated_at' => Schema::TYPE_DATE,
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('club_table');
    }
}