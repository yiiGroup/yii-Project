<?php

use yii\db\Migration;
use yii\db\Schema;

class m160413_185614_create_event_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%event}}', [
            'id' => Schema::TYPE_PK,
            'club_id' => Schema::TYPE_INTEGER.' NOT NULL',
            'event_type' => Schema::TYPE_TEXT.' NOT NULL ',
            'description' => Schema::TYPE_TEXT.' NOT NULL DEFAULT ""',
            'date' => Schema::TYPE_DATE . ' NOT NULL ',
            'event_place' => Schema::TYPE_INTEGER.' NOT NULL ',
            'created_at' => Schema::TYPE_DATE ,
            'updated_at' => Schema::TYPE_DATE ,
        ], $tableOptions);
        $this->addForeignKey('fk_event_owner', '{{%event}}', 'club_id', '{{%club}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_event_place', '{{%event}}', 'event_place', '{{%place}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_event_owner', '{{%event}}');
        $this->dropForeignKey('fk_event_place', '{{%event}}');
        $this->dropTable('event_table');

    }
}