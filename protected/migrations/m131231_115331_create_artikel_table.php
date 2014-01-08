<?php

class m131231_115331_create_artikel_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('artikel', array(
            'id' => 'pk',
            'artikel_typ_id' => 'bigint NOT NULL REFERENCES tbl_artikel_typ(id)',
            'name' => 'varchar(128) NOT NULL',
            'bemerkung' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('artikel');
    }
}