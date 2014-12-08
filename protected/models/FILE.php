<?php

/**
 * This is the model class for table "FILE".
 *
 * The followings are the available columns in table 'FILE':
 * @property integer $ID_FILE
 * @property string $NAME
 * @property string $CREATION_DATE
 * @property integer $FILETYPE_ID_FILETYPE
 * @property integer $POST_ID_POST
 *
 * The followings are the available model relations:
 * @property FILETYPE $fILETYPEIDFILETYPE
 * @property POST $pOSTIDPOST
 */
class FILE extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'FILE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME, CREATION_DATE, FILETYPE_ID_FILETYPE, POST_ID_POST', 'required'),
			array('FILETYPE_ID_FILETYPE, POST_ID_POST', 'numerical', 'integerOnly'=>true),
			array('NAME', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_FILE, NAME, CREATION_DATE, FILETYPE_ID_FILETYPE, POST_ID_POST', 'safe', 'on'=>'search'),
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
			'fILETYPEIDFILETYPE' => array(self::BELONGS_TO, 'FILETYPE', 'FILETYPE_ID_FILETYPE'),
			'pOSTIDPOST' => array(self::BELONGS_TO, 'POST', 'POST_ID_POST'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_FILE' => 'Id File',
			'NAME' => 'Name',
			'CREATION_DATE' => 'Creation Date',
			'FILETYPE_ID_FILETYPE' => 'Filetype Id Filetype',
			'POST_ID_POST' => 'Post Id Post',
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

		$criteria->compare('ID_FILE',$this->ID_FILE);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('CREATION_DATE',$this->CREATION_DATE,true);
		$criteria->compare('FILETYPE_ID_FILETYPE',$this->FILETYPE_ID_FILETYPE);
		$criteria->compare('POST_ID_POST',$this->POST_ID_POST);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FILE the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
