<?php

class UKPhoneValidator extends CValidator
{

	/**
	 * @var boolean whether the attribute value can be null or empty. Defaults to true,
	 * meaning that if the attribute is empty, it is considered valid.
	 */
	public $allowEmpty = true;

	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object,$attribute)
	{
		$value=$object->$attribute;
		if($this->allowEmpty && ($value===null || $value===''))
			return true;
		elseif(!$this->allowEmpty && ($value===null || $value==='')) {
			$message=$this->message!==null?$this->message:Yii::t('yii','{attribute} is empty');
			$this->addError($object,$attribute,$message);
		}
		// Don't allow country codes to be included (assumes a leading "+") 
		if (preg_match('/^(\+)[\s]*(.*)$/',$value)) {
		   $message=Yii::t('yii','{attribute} without the country code, please');
		   $this->addError($object,$attribute,$message);
		}		
		// Now check that all the characters are digits
	    if (!preg_match('/^[0-9]{10,11}$/',$value)) {
	        $message=Yii::t('yii','{attribute} should contain 10 or 11 digits');
			$this->addError($object,$attribute,$message);
	    }
	    // Now check that the first digit is 0
	    if (!preg_match('/^0[0-9]{9,10}$/',$value)) {
	        $message=Yii::t('yii','{attribute} should start with a 0');
			$this->addError($object,$attribute,$message);
	    }
	    // Check the string against the numbers allocated for dramas
	    // Expression for numbers allocated to dramas
	    $tnexp[0] =  '/^(0113|0114|0115|0116|0117|0118|0121|0131|0141|0151|0161)(4960)[0-9]{3}$/';
	    $tnexp[1] =  '/^02079460[0-9]{3}$/';
	    $tnexp[2] =  '/^01914980[0-9]{3}$/';
	    $tnexp[3] =  '/^02890180[0-9]{3}$/';
	    $tnexp[4] =  '/^02920180[0-9]{3}$/';
	    $tnexp[5] =  '/^01632960[0-9]{3}$/';
	    $tnexp[6] =  '/^07700900[0-9]{3}$/';
	    $tnexp[7] =  '/^08081570[0-9]{3}$/';
	    $tnexp[8] =  '/^09098790[0-9]{3}$/';
	    $tnexp[9] =  '/^03069990[0-9]{3}$/';
	    foreach ($tnexp as $regexp) {
	        if (preg_match($regexp,$value, $matches)) {
	          $message=Yii::t('yii','{attribute} is either invalid or inappropriate');
			  $this->addError($object,$attribute,$message);	
	          }
	    }
	    // Finally, check that the telephone number is appropriate.
	    if (!preg_match('/^(01|02|03|05|070|071|072|073|074|075|07624|077|078|079)[0-9]+$/',$value)) {
	        $message=Yii::t('yii','{attribute} is either invalid or inappropriate');
			$this->addError($object,$attribute,$message);
	    }
	}
}