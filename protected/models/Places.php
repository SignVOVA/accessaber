<?php

/**
 * This is the model class for table "places".
 *
 * The followings are the available columns in table 'places':
 * @property integer $place_id
 * @property string $place_name_en
 * @property string $place_name_cy
 * @property string $place_description_en
 * @property string $place_description_cy
 * @property double $place_latitude
 * @property double $place_longitude
 * @property integer $place_has_disabled_entry
 * @property integer $place_has_step_free_access
 * @property integer $place_number_of_disabled_toilets
 * @property integer $place_has_wheelchair_lift
 * @property integer $place_has_lifts
 */
class Places extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Places';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('place_has_disabled_entry, place_has_step_free_access, place_number_of_disabled_toilets, place_has_wheelchair_lift, place_has_lifts', 'numerical', 'integerOnly'=>true),
			array('place_latitude, place_longitude', 'numerical'),
			array('place_name_en, place_name_cy, place_description_en, place_description_cy', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('place_id, place_name_en, place_name_cy, place_description_en, place_description_cy, place_latitude, place_longitude, place_has_disabled_entry, place_has_step_free_access, place_number_of_disabled_toilets, place_has_wheelchair_lift, place_has_lifts', 'safe', 'on'=>'search'),
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
			'place_id' => 'Place',
			'place_name_en' => 'Place Name En',
			'place_name_cy' => 'Place Name Cy',
			'place_description_en' => 'Place Description En',
			'place_description_cy' => 'Place Description Cy',
			'place_latitude' => 'Place Latitude',
			'place_longitude' => 'Place Longitude',
			'place_has_disabled_entry' => 'Place Has Disabled Entry',
			'place_has_step_free_access' => 'Place Has Step Free Access',
			'place_number_of_disabled_toilets' => 'Place Number Of Disabled Toilets',
			'place_has_wheelchair_lift' => 'Place Has Wheelchair Lift',
			'place_has_lifts' => 'Place Has Lifts',
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

		$criteria->compare('place_id',$this->place_id);
		$criteria->compare('place_name_en',$this->place_name_en,true);
		$criteria->compare('place_name_cy',$this->place_name_cy,true);
		$criteria->compare('place_description_en',$this->place_description_en,true);
		$criteria->compare('place_description_cy',$this->place_description_cy,true);
		$criteria->compare('place_latitude',$this->place_latitude);
		$criteria->compare('place_longitude',$this->place_longitude);
		$criteria->compare('place_has_disabled_entry',$this->place_has_disabled_entry);
		$criteria->compare('place_has_step_free_access',$this->place_has_step_free_access);
		$criteria->compare('place_number_of_disabled_toilets',$this->place_number_of_disabled_toilets);
		$criteria->compare('place_has_wheelchair_lift',$this->place_has_wheelchair_lift);
		$criteria->compare('place_has_lifts',$this->place_has_lifts);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Places the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function afterSave()
    {
    	$sql = 'SELECT * FROM Places';


    	$my_file = realpath(Yii::app()->basePath . '/../api/places.json');
    	$d = Yii::app()->db->createCommand($sql)->queryAll();

    	$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

    	$pending_data = array();

    	foreach ($d as $row) 
    	{
    		$user_logs_update = array(
    			"place_id" => $row['place_id'],
    			"place_name_en" => $row['place_name_en'],
				"place_name_cy" => $row['place_name_cy'],
				"place_description_en" => $row['place_description_en'],
				"place_description_cy" => $row['place_description_cy'],
				"place_latitude" => $row['place_latitude'],
				"place_longitude" => $row['place_longitude'],
				"place_has_disabled_entry" => $row['place_has_disabled_entry'],
				"place_has_step_free_access" => $row['place_has_step_free_access'],
				"place_number_of_disabled_toilets" => $row['place_number_of_disabled_toilets'],
				"place_has_wheelchair_lift" => $row['place_has_wheelchair_lift'],
				"place_has_lifts" => $row['place_has_lifts'],
    			);
    		array_push($pending_data, $user_logs_update);
    	}
    	$formatted_data = array(
            "results" => $pending_data,
            "success" => true
            );

    	$data = json_encode($formatted_data, 128);
    	fwrite($handle, "Ext.data.JsonP.callback1(" . $data . ");");
    	fclose($handle);
    }
}
