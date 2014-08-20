<?php

/**
 * This is the model class for table "routes".
 *
 * The followings are the available columns in table 'routes':
 * @property integer $route_id
 * @property integer $route_is_step_free
 * @property double $start_latitude
 * @property double $start_longitude
 * @property string $start_place_name_en
 * @property string $start_place_name_cy
 * @property double $end_latitude
 * @property double $end_longitude
 * @property string $end_place_name_en
 * @property string $end_place_name_cy
 * @property string $route_name_en
 * @property string $route_name_cy
 * @property string $route_description_en
 * @property string $route_description_cy
 * @property double $travel_time
 * @property string $topography_en
 * @property string $topography_cy
 * @property integer $calories
 * @property string $route_components
 */
class Routes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Routes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('route_is_step_free, calories', 'numerical', 'integerOnly'=>true),
			array('start_latitude, start_longitude, end_latitude, end_longitude, travel_time', 'numerical'),
			array('start_place_name_en, start_place_name_cy, end_place_name_en, end_place_name_cy, route_name_en, route_name_cy, route_description_en, route_description_cy, topography_en, topography_cy', 'length', 'max'=>255),
			array('route_components', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('route_id, route_is_step_free, start_latitude, start_longitude, start_place_name_en, start_place_name_cy, end_latitude, end_longitude, end_place_name_en, end_place_name_cy, route_name_en, route_name_cy, route_description_en, route_description_cy, travel_time, topography_en, topography_cy, calories, route_components', 'safe', 'on'=>'search'),
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
			'route_id' => 'Route',
			'route_is_step_free' => 'Route Is Step Free',
			'start_latitude' => 'Start Latitude',
			'start_longitude' => 'Start Longitude',
			'start_place_name_en' => 'Start Place Name En',
			'start_place_name_cy' => 'Start Place Name Cy',
			'end_latitude' => 'End Latitude',
			'end_longitude' => 'End Longitude',
			'end_place_name_en' => 'End Place Name En',
			'end_place_name_cy' => 'End Place Name Cy',
			'route_name_en' => 'Route Name En',
			'route_name_cy' => 'Route Name Cy',
			'route_description_en' => 'Route Description En',
			'route_description_cy' => 'Route Description Cy',
			'travel_time' => 'Travel Time',
			'topography_en' => 'Topography En',
			'topography_cy' => 'Topography Cy',
			'calories' => 'Calories',
			'route_components' => 'Route Components',
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

		$criteria->compare('route_id',$this->route_id);
		$criteria->compare('route_is_step_free',$this->route_is_step_free);
		$criteria->compare('start_latitude',$this->start_latitude);
		$criteria->compare('start_longitude',$this->start_longitude);
		$criteria->compare('start_place_name_en',$this->start_place_name_en,true);
		$criteria->compare('start_place_name_cy',$this->start_place_name_cy,true);
		$criteria->compare('end_latitude',$this->end_latitude);
		$criteria->compare('end_longitude',$this->end_longitude);
		$criteria->compare('end_place_name_en',$this->end_place_name_en,true);
		$criteria->compare('end_place_name_cy',$this->end_place_name_cy,true);
		$criteria->compare('route_name_en',$this->route_name_en,true);
		$criteria->compare('route_name_cy',$this->route_name_cy,true);
		$criteria->compare('route_description_en',$this->route_description_en,true);
		$criteria->compare('route_description_cy',$this->route_description_cy,true);
		$criteria->compare('travel_time',$this->travel_time);
		$criteria->compare('topography_en',$this->topography_en,true);
		$criteria->compare('topography_cy',$this->topography_cy,true);
		$criteria->compare('calories',$this->calories);
		$criteria->compare('route_components',$this->route_components,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Routes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

			public function afterSave()
    {
    	$sql = 'SELECT * FROM Routes';


    	$my_file = realpath(Yii::app()->basePath . '/../api/routes.json');
    	$d = Yii::app()->db->createCommand($sql)->queryAll();

    	$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

    	$pending_data = array();

    	foreach ($d as $row) 
    	{
    		$user_logs_update = array(
    			"route_id" => $row['route_id'],
    			"route_is_step_free" => $row['route_is_step_free'],
				"start_latitude" => $row['start_latitude'],
				"start_longitude" => $row['start_longitude'],
				"start_place_name_en" => $row['start_place_name_en'],
				"start_place_name_cy" => $row['start_place_name_cy'],
				"end_latitude" => $row['end_latitude'],
				"end_longitude" => $row['end_longitude'],
				"end_place_name_en" => $row['end_place_name_en'],
				"end_place_name_cy" => $row['end_place_name_cy'],
				"route_name_en" => $row['route_name_en'],
				"route_name_cy" => $row['route_name_cy'],
				"route_description_en" => $row['route_description_en'],
				"route_description_cy" => $row['route_description_cy'],
				"travel_time" => $row['travel_time'],
				"topography_en" => $row['topography_en'],
				"topography_cy" => $row['topography_cy'],
				"calories" => $row['calories'],
				"route_components" => json_decode($row['route_components']),
    			);
    		array_push($pending_data, $user_logs_update);
    	}

    	$formatted_data = array(
            "results" => $pending_data,
            "success" => true
            );

    	$data = json_encode($formatted_data, 128);
    	fwrite($handle, "Ext.data.JsonP.callback2(" . $data . ");");
    	fclose($handle);
    }
}
