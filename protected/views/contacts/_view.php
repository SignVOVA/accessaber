<?php
/* @var $this ContactsController */
/* @var $data Contacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_id), array('view', 'id'=>$data->contact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phonenumber')); ?>:</b>
	<?php echo CHtml::encode($data->phonenumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailaddress')); ?>:</b>
	<?php echo CHtml::encode($data->emailaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officehours_en')); ?>:</b>
	<?php echo CHtml::encode($data->officehours_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webaddress')); ?>:</b>
	<?php echo CHtml::encode($data->webaddress); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description_en')); ?>:</b>
	<?php echo CHtml::encode($data->description_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_cy')); ?>:</b>
	<?php echo CHtml::encode($data->description_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officehours_cy')); ?>:</b>
	<?php echo CHtml::encode($data->officehours_cy); ?>
	<br />

	*/ ?>

</div>