<?php

/**
 * This is the model class for table "mapfeatures".
 *
 * The followings are the available columns in table 'mapfeatures':
 * @property integer $map_feature_id
 * @property string $map_feature_type
 * @property double $latitude
 * @property double $longitude
 * @property string $name_en
 * @property string $name_cy
 * @property string $description_en
 * @property string $description_cy
 * @property string $floor
 */
class Mapfeatures extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'MapFeatures';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('map_feature_type, latitude, longitude, name_en, name_cy, description_en, description_cy', 'required'),
			array('latitude, longitude', 'numerical'),
			array('map_feature_type', 'length', 'max'=>21),
			array('name_en, name_cy, description_en, description_cy', 'length', 'max'=>255),
			array('floor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('map_feature_id, map_feature_type, latitude, longitude, name_en, name_cy, description_en, description_cy, floor', 'safe', 'on'=>'search'),
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
			'map_feature_id' => 'Map Feature',
			'map_feature_type' => 'Map Feature Type',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'name_en' => 'Name En',
			'name_cy' => 'Name Cy',
			'description_en' => 'Description En',
			'description_cy' => 'Description Cy',
			'floor' => 'Floor',
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

		$criteria->compare('map_feature_id',$this->map_feature_id);
		$criteria->compare('map_feature_type',$this->map_feature_type,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('name_cy',$this->name_cy,true);
		$criteria->compare('description_en',$this->description_en,true);
		$criteria->compare('description_cy',$this->description_cy,true);
		$criteria->compare('floor',$this->floor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mapfeatures the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterSave()
    {
    	$sql = 'SELECT * FROM MapFeatures';


    	$my_file = realpath(Yii::app()->basePath . '/../api/mapfeatures.json');
    	$d = Yii::app()->db->createCommand($sql)->queryAll();

    	$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

    	$pending_data = array();

    	foreach ($d as $row) 
    	{
    		$user_logs_update = array(
    			"map_feature_id" => $row['map_feature_id'],
    			"map_feature_type" => $row['map_feature_type'],
				"latitude" => $row['latitude'],
				"longitude" => $row['longitude'],
				"name_en" => $row['name_en'],
				"name_cy" => $row['name_cy'],
				"description_en" => $row['description_en'],
				"description_cy" => $row['description_cy'],
				"floor" => $row['floor'],
    			);
    		array_push($pending_data, $user_logs_update);
    	}

    	$formatted_data = array(
            "results" => $pending_data,
            "success" => true
            );

    	$data = json_encode($formatted_data, 128);
    	fwrite($handle, "Ext.data.JsonP.callback4(" . $data . ");");
    	fclose($handle);
    }
}
