<?php

/**
 * This is the model class for table "artikel".
 *
 * The followings are the available columns in table 'artikel':
 * @property integer $id
 * @property string $artikel_typ_id
 * @property string $name
 * @property string $bemerkung
 *
 * The followings are the available model relations:
 * @property Verleih[] $verleihs
 * @property ArtikelTyp $artikelTyp
 */
class Artikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('artikel_typ_id, name', 'required'),
			array('name', 'length', 'max'=>128),
			array('bemerkung', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, artikel_typ_id, name, bemerkung', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'verleih' => array(self::HAS_MANY, 'Verleih', 'artikel_id'),
			'artikelTyp' => array(self::BELONGS_TO, 'ArtikelTyp', 'artikel_typ_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'artikel_typ_id' => 'Artikel Typ',
			'name' => 'Name',
			'bemerkung' => 'Bemerkung',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('artikel_typ_id',$this->artikel_typ_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('bemerkung',$this->bemerkung,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artikel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
