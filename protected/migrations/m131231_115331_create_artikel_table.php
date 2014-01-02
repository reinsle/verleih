<?php

class m131231_115331_create_artikel_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('artikel', array(
            'id' => 'pk',
            'artikel_typ_id' => 'bigint NOT NULL',
            'name' => 'varchar(128) NOT NULL',
            'bemerkung' => 'text',
        ));
        $this->addForeignKey('fk_artikel_typ_id', 'artikel', 'artikel_typ_id', 'artikel_typ', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_artikel_typ_id', 'artikel');
        $this->dropTable('artikel');
    }
}