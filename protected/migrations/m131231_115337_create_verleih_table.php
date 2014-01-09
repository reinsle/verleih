<?php

class m131231_115337_create_verleih_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('verleih', array(
            'id' => 'pk',
            'artikel_id' => 'bigint NOT NULL REFERENCES artikel(id)',
            'verleih' => 'date NOT NULL',
            'rueckgabe' => 'date',
            'bemerkung' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('verleih');
    }
}