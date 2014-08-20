<?php
/* @var $this FaultsController */
/* @var $data Faults */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fault_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fault_id), array('view', 'id'=>$data->fault_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reported_by_name')); ?>:</b>
	<?php echo CHtml::encode($data->reported_by_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reported_by_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->reported_by_email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_of_fault')); ?>:</b>
	<?php echo CHtml::encode($data->location_of_fault); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_of_fault')); ?>:</b>
	<?php echo CHtml::encode($data->description_of_fault); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resolved')); ?>:</b>
	<?php echo CHtml::encode($data->resolved); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_known_issue')); ?>:</b>
	<?php echo CHtml::encode($data->is_known_issue); ?>
	<br />

	*/ ?>

</div>