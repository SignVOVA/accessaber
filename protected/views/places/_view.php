<?php
/* @var $this PlacesController */
/* @var $data Places */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->place_id), array('view', 'id'=>$data->place_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_name_en')); ?>:</b>
	<?php echo CHtml::encode($data->place_name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->place_name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_description_en')); ?>:</b>
	<?php echo CHtml::encode($data->place_description_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_description_cy')); ?>:</b>
	<?php echo CHtml::encode($data->place_description_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_latitude')); ?>:</b>
	<?php echo CHtml::encode($data->place_latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_longitude')); ?>:</b>
	<?php echo CHtml::encode($data->place_longitude); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('place_has_disabled_entry')); ?>:</b>
	<?php echo CHtml::encode($data->place_has_disabled_entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_has_step_free_access')); ?>:</b>
	<?php echo CHtml::encode($data->place_has_step_free_access); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_number_of_disabled_toilets')); ?>:</b>
	<?php echo CHtml::encode($data->place_number_of_disabled_toilets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_has_wheelchair_lift')); ?>:</b>
	<?php echo CHtml::encode($data->place_has_wheelchair_lift); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_has_lifts')); ?>:</b>
	<?php echo CHtml::encode($data->place_has_lifts); ?>
	<br />

	*/ ?>

</div>