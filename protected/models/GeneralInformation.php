<?php

/**
 * This is the model class for table "GENERAL".
 *
 * The followings are the available columns in table 'GENERAL':
 * @property integer $ID
 * @property string $HISTORY
 * @property string $WELCOME_MESSAGE
 * @property string $LOCATION
 * @property string $PHONES
 * @property string $FAX
 * @property string $EMAIL
 * @property string $MISSION
 * @property string $VISION
 */
class GeneralInformation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'GENERAL';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HISTORY, WELCOME_MESSAGE, LOCATION, PHONES', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('PHONES, FAX, EMAIL', 'length', 'max'=>45),
			array('MISSION, VISION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, HISTORY, WELCOME_MESSAGE, LOCATION, PHONES, FAX, EMAIL, MISSION, VISION', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'HISTORY' => 'Historia',
			'WELCOME_MESSAGE' => 'Mensaje de bienvenida',
			'LOCATION' => 'Como llegar',
			'PHONES' => 'Telefono',
			'FAX' => 'Fax',
			'EMAIL' => 'Email',
			'MISSION' => 'Misión',
			'VISION' => 'Visión',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('HISTORY',$this->HISTORY,true);
		$criteria->compare('WELCOME_MESSAGE',$this->WELCOME_MESSAGE,true);
		$criteria->compare('LOCATION',$this->LOCATION,true);
		$criteria->compare('PHONES',$this->PHONES,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('MISSION',$this->MISSION,true);
		$criteria->compare('VISION',$this->VISION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GeneralInformation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
