<?php

/**
 * This is the model class for table "SECTION".
 *
 * The followings are the available columns in table 'SECTION':
 * @property integer $ID_SECTION
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property integer $ACTIVE
 *
 * The followings are the available model relations:
 * @property POST[] $pOSTs
 */
class SECTION extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SECTION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME, DESCRIPTION', 'required'),
			array('ACTIVE', 'numerical', 'integerOnly'=>true),
			array('NAME', 'length', 'max'=>100),
			array('DESCRIPTION', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_SECTION, NAME, DESCRIPTION, ACTIVE', 'safe', 'on'=>'search'),
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
			'POSTS' => array(self::HAS_MANY, 'POST', 'SECTION_ID_SECTION'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_SECTION' => 'Id de Sección',
			'NAME' => 'Nombre',
			'DESCRIPTION' => 'Descripción',
			'ACTIVE' => 'Activo',
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

		$criteria->compare('ID_SECTION',$this->ID_SECTION);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('ACTIVE',$this->ACTIVE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SECTION the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
