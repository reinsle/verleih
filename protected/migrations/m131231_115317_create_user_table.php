<?php

class m131231_115317_create_user_table extends CDbMigration
{
    public function up()
    {
        date_default_timezone_set('Europe/Berlin');
        $this->createTable('user', array(
            'id' => 'pk',
            'email' => 'varchar(128) NOT NULL',
            'password' => 'varchar(128) NOT NULL',
            'create_time' => 'int NOT NULL',
            'update_time' => 'int NOT NULL',
            'last_login_time' => 'int',
        ));
        $this->createIndex('user_email_unique', 'user', 'email', true);
        $this->insert('user', array(
            "email" => "admin@einsle.de",
            "password" => sha1("ni.xd.ol"),
            "create_time" => strtotime('now'),
            "update_time" => strtotime('now'),
        ));
    }

    public function down()
    {
        $this->dropIndex('user_email_unique', 'user');
        $this->dropTable('user');
    }
}