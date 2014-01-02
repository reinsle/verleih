<?php

class m131231_115326_create_artikel_typ_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('artikel_typ', array(
            'id' => 'pk',
            'name' => 'varchar(128) NOT NULL',
        ));
        $this->insert('artikel_typ', array(
            "name" => "Buch",
        ));
        $this->insert('artikel_typ', array(
            "name" => "CD / DVD",
        ));
    }

    public function down()
    {
        $this->dropTable('artikel_typ');
    }
}