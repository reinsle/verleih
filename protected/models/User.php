<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $last_login_time
 */
class User extends CActiveRecord
{
    public $password_repeat;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('email, password, , password_repeat', 'required'),
            array('create_time, update_time, last_login_time', 'numerical', 'integerOnly' => true),
            array('email, password', 'length', 'max' => 128),
            array('email', 'email'),
            array('email', 'unique'),
            array('password', 'compare'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, email, password, create_time, update_time, last_login_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'last_login_time' => 'Last Login Time',
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
        $criteria->compare('email', $this->email, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('create_time', $this->create_time);
        $criteria->compare('update_time', $this->update_time);
        $criteria->compare('last_login_time', $this->last_login_time);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Attach behavors to the class
     *
     * @return array whith behavors
     */
    public function behaviors()
    {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_time',
                'updateAttribute' => 'update_time',
                'setUpdateOnCreate' => true,
            ),
        );
    }

    /**
     * apply a hash to the password before store in database
     */
    protected function afterValidate()
    {
        parent::afterValidate();
        if (!$this->hasErrors()) {
            $this->password = $this->hashPassword($this->password);
        }
    }

    /**
     * Checks if the given password matches the tored one
     *
     * @param $password the password to check
     * @return bool if password are equal
     */
    public function validatePassword($password)
    {
        return $this->hashPassword($password) === $this->password;
    }

    /**
     * Generates the password hash to store in database
     *
     * @param $password the unencrypted password
     * @return string the encrypted password
     */
    public function hashPassword($password)
    {
        return sha1($password);
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
