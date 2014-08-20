<?php
/* @var $this MapfeaturesController */
/* @var $data Mapfeatures */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('map_feature_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->map_feature_id), array('view', 'id'=>$data->map_feature_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('map_feature_type')); ?>:</b>
	<?php echo CHtml::encode($data->map_feature_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_en')); ?>:</b>
	<?php echo CHtml::encode($data->description_en); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description_cy')); ?>:</b>
	<?php echo CHtml::encode($data->description_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floor')); ?>:</b>
	<?php echo CHtml::encode($data->floor); ?>
	<br />

	*/ ?>

</div>