<?php

/**
 * This is the model class for table "POST".
 *
 * The followings are the available columns in table 'POST':
 * @property integer $ID_POST
 * @property string $TITLE
 * @property string $CONTENT
 * @property integer $FILE_ONLY
 * @property integer $USER_ID_USER
 * @property integer $SECTION_ID_SECTION
 *
 * The followings are the available model relations:
 * @property FILE[] $FILES
 * @property SECTION $SECTION
 * @property USER $USER
 */
class POST extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'POST';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('USER_ID_USER, SECTION_ID_SECTION', 'required'),
            array('FILE_ONLY, USER_ID_USER, SECTION_ID_SECTION', 'numerical', 'integerOnly' => true),
            array('TITLE', 'length', 'max' => 256),
            array('CONTENT', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID_POST, TITLE, CONTENT, FILE_ONLY, USER_ID_USER, SECTION_ID_SECTION', 'safe', 'on' => 'search'),
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
            'FILES' => array(self::HAS_MANY, 'FILE', 'POST_ID_POST'),
            'SECTION' => array(self::BELONGS_TO, 'SECTION', 'SECTION_ID_SECTION'),
            'USER' => array(self::BELONGS_TO, 'USER', 'USER_ID_USER'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'ID_POST' => 'Id Publicacion',
            'TITLE' => 'Titulo',
            'CONTENT' => 'Contenido',
            'FILE_ONLY' => 'Publicar unicamente el archivo',
            'USER_ID_USER' => 'Usuario',
            'SECTION_ID_SECTION' => 'Seccion',

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

        $criteria->compare('ID_POST', $this->ID_POST);
        $criteria->compare('TITLE', $this->TITLE, true);
        $criteria->compare('CONTENT', $this->CONTENT, true);
        $criteria->compare('FILE_ONLY', $this->FILE_ONLY);
        $criteria->compare('USER_ID_USER', $this->USER_ID_USER);
        $criteria->compare('SECTION_ID_SECTION', $this->SECTION_ID_SECTION);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return POST the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave() {
        if ($this->isNewRecord)
            $this->CREATION_DATE = new CDbExpression('NOW()');

        return parent::beforeSave();
    }
}
