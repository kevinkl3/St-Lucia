<?php

/**
 * This is the model class for table "USER".
 *
 * The followings are the available columns in table 'USER':
 * @property integer $ID_USER
 * @property string $NAME
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $CREATION_DATE
 * @property string $LAST_LOGIN
 * @property string $EMAIL
 * @property integer $ACTIVE
 *
 * The followings are the available model relations:
 * @property POST[] $pOSTs
 */
class USER extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'USER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USERNAME, PASSWORD', 'required'),
			array('ACTIVE', 'numerical', 'integerOnly'=>true),
			array('NAME, USERNAME, EMAIL', 'length', 'max'=>45),
			array('PASSWORD', 'length', 'max'=>64),
			array('CREATION_DATE, LAST_LOGIN', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_USER, NAME, USERNAME, PASSWORD, CREATION_DATE, LAST_LOGIN, EMAIL, ACTIVE', 'safe', 'on'=>'search'),
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
			'pOSTs' => array(self::HAS_MANY, 'POST', 'USER_ID_USER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_USER' => 'Id User',
			'NAME' => 'Name',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'CREATION_DATE' => 'Creation Date',
			'LAST_LOGIN' => 'Last Login',
			'EMAIL' => 'Email',
			'ACTIVE' => 'Active',
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

		$criteria->compare('ID_USER',$this->ID_USER);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('CREATION_DATE',$this->CREATION_DATE,true);
		$criteria->compare('LAST_LOGIN',$this->LAST_LOGIN,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('ACTIVE',$this->ACTIVE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return USER the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
