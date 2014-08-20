<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property integer $contact_id
 * @property string $name_en
 * @property string $name_cy
 * @property string $phonenumber
 * @property string $emailaddress
 * @property string $officehours_en
 * @property string $webaddress
 * @property string $description_en
 * @property string $description_cy
 * @property string $officehours_cy
 */
class Contacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_en, name_cy', 'required'),
			array('name_en, name_cy, emailaddress, officehours_en, webaddress, officehours_cy', 'length', 'max'=>255),
			array('phonenumber', 'length', 'max'=>45),
			array('description_en, description_cy', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contact_id, name_en, name_cy, phonenumber, emailaddress, officehours_en, webaddress, description_en, description_cy, officehours_cy', 'safe', 'on'=>'search'),
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
			'contact_id' => 'Contact',
			'name_en' => 'Name En',
			'name_cy' => 'Name Cy',
			'phonenumber' => 'Phonenumber',
			'emailaddress' => 'Emailaddress',
			'officehours_en' => 'Officehours En',
			'webaddress' => 'Webaddress',
			'description_en' => 'Description En',
			'description_cy' => 'Description Cy',
			'officehours_cy' => 'Officehours Cy',
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

		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('name_cy',$this->name_cy,true);
		$criteria->compare('phonenumber',$this->phonenumber,true);
		$criteria->compare('emailaddress',$this->emailaddress,true);
		$criteria->compare('officehours_en',$this->officehours_en,true);
		$criteria->compare('webaddress',$this->webaddress,true);
		$criteria->compare('description_en',$this->description_en,true);
		$criteria->compare('description_cy',$this->description_cy,true);
		$criteria->compare('officehours_cy',$this->officehours_cy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterSave()
    {
    	$sql = 'SELECT * FROM Contacts';


    	$my_file = realpath(Yii::app()->basePath . '/../api/contacts.json');
    	$d = Yii::app()->db->createCommand($sql)->queryAll();

    	$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

    	$pending_data = array();

    	foreach ($d as $row) 
    	{
    		$user_logs_update = array(
    			"contact_id" => $row['contact_id'],
    			"name_en" => $row['name_en'],
				"name_cy" => $row['name_cy'],
				"phonenumber" => $row['phonenumber'],
				"emailaddress" => $row['emailaddress'],
				"officehours_en" => $row['officehours_en'],
				"officehours_cy" => $row['officehours_cy'],
				"webaddress" => $row['webaddress'],
				"description_en" => $row['description_en'],
				"description_cy" => $row['description_cy'],
    			);
    		array_push($pending_data, $user_logs_update);
    	}
    	$formatted_data = array(
            "results" => $pending_data,
            "success" => true
            );

    	$data = json_encode($formatted_data, 128);
    	fwrite($handle, "Ext.data.JsonP.callback3(" . $data . ");");
    	fclose($handle);
    }

}
