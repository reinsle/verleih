<?php

/**
 * This is the model class for table "verleih".
 *
 * The followings are the available columns in table 'verleih':
 * @property integer $id
 * @property string $artikel_id
 * @property string $verleih
 * @property string $rueckgabe
 * @property string $bemerkung
 *
 * The followings are the available model relations:
 * @property Artikel $artikel
 */
class Verleih extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'verleih';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('artikel_id, verleih', 'required'),
            array('rueckgabe, bemerkung', 'safe'),
            array('rueckgabe, bemerkung', 'default', 'setOnEmpty' => true, 'value' => null),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, artikel_id, verleih, rueckgabe, bemerkung', 'safe', 'on' => 'search'),
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
            'artikel' => array(self::BELONGS_TO, 'Artikel', 'artikel_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'artikel_id' => 'Artikel',
            'verleih' => 'Verleih-Datum',
            'rueckgabe' => 'Rueckgabe-Datum',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('artikel_id', $this->artikel_id, true);
        $criteria->compare('verleih', $this->verleih, true);
        $criteria->compare('rueckgabe', $this->rueckgabe, true);
        $criteria->compare('bemerkung', $this->bemerkung, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Verleih the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
