<?php

/**
 * This is the model class for table "faults".
 *
 * The followings are the available columns in table 'faults':
 * @property integer $fault_id
 * @property string $reported_by_name
 * @property string $reported_by_email_address
 * @property string $location_of_fault
 * @property string $description_of_fault
 * @property string $datetime
 * @property integer $resolved
 * @property integer $is_known_issue
 */
class Faults extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Faults';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('resolved, is_known_issue', 'numerical', 'integerOnly'=>true),
			array('reported_by_name, reported_by_email_address, location_of_fault', 'length', 'max'=>255),
			array('description_of_fault, datetime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fault_id, reported_by_name, reported_by_email_address, location_of_fault, description_of_fault, datetime, resolved, is_known_issue', 'safe', 'on'=>'search'),
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
			'fault_id' => 'Fault',
			'reported_by_name' => 'Reported By Name',
			'reported_by_email_address' => 'Reported By Email Address',
			'location_of_fault' => 'Location Of Fault',
			'description_of_fault' => 'Description Of Fault',
			'datetime' => 'Datetime',
			'resolved' => 'Resolved',
			'is_known_issue' => 'Is Known Issue',
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

		$criteria->compare('fault_id',$this->fault_id);
		$criteria->compare('reported_by_name',$this->reported_by_name,true);
		$criteria->compare('reported_by_email_address',$this->reported_by_email_address,true);
		$criteria->compare('location_of_fault',$this->location_of_fault,true);
		$criteria->compare('description_of_fault',$this->description_of_fault,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('resolved',$this->resolved);
		$criteria->compare('is_known_issue',$this->is_known_issue);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Faults the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterSave()
    {
    	$sql = 'SELECT * FROM Faults';


    	$my_file = realpath(Yii::app()->basePath . '/../api/faults.json');
    	$d = Yii::app()->db->createCommand($sql)->queryAll();

    	$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

    	$pending_data = array();

    	foreach ($d as $row) 
    	{
    		$user_logs_update = array(
    			"fault_id" => $row['fault_id'],
    			"reported_by_name" => $row['reported_by_name'],
				"reported_by_email_address" => $row['reported_by_email_address'],
				"location_of_fault" => $row['location_of_fault'],
				"description_of_fault" => $row['description_of_fault'],
				"datetime" => $row['datetime'],
				"resolved" => $row['resolved'],
				"is_known_issue" => $row['is_known_issue'],
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
