<?php

use yii\db\Migration;
use yii\db\Schema;

class m160422_175820_create_member_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%member}}', [

            'club_id' => Schema::TYPE_INTEGER. ' NOT NULL ',
            'user_id' => Schema::TYPE_INTEGER. ' NOT NULL ',
            'role' => Schema::TYPE_TEXT.' NOT NULL ',
            'date_join_club' => Schema::TYPE_DATE . ' NOT NULL ',
            'created_at' => Schema::TYPE_DATE,
            'updated_at' => Schema::TYPE_DATE,
        ], $tableOptions);
        $this->addPrimaryKey('member_pk', 'member', ['club_id', 'user_id']);
        $this->addForeignKey('fk_user_id', '{{%member}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_club_member', '{{%member}}', 'club_id', '{{%club}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_club_member', '{{%member}}');
        $this->dropForeignKey('fk_user_id', '{{%member}}');
        $this->dropTable('member_table');

    }
}