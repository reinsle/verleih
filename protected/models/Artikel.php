<?php

Yii::import('application.models._base.BaseArtikel');

class Artikel extends BaseArtikel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}