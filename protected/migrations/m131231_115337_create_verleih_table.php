<?php

class m131231_115337_create_verleih_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('verleih', array(
            'id' => 'pk',
            'artikel_id' => 'bigint NOT NULL',
            'verleih' => 'timestamp NOT NULL',
            'rueckgabe' => 'timestamp',
            'bemerkung' => 'text',
        ));
        $this->addForeignKey('fk_artikel_id', 'verleih', 'artikel_id', 'artikel', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_artikel_id', 'verleih');
        $this->dropTable('verleih');
    }
}