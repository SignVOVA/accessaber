<?php
/* @var $this RoutesController */
/* @var $data Routes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->route_id), array('view', 'id'=>$data->route_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_is_step_free')); ?>:</b>
	<?php echo CHtml::encode($data->route_is_step_free); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_latitude')); ?>:</b>
	<?php echo CHtml::encode($data->start_latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_longitude')); ?>:</b>
	<?php echo CHtml::encode($data->start_longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_place_name_en')); ?>:</b>
	<?php echo CHtml::encode($data->start_place_name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_place_name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->start_place_name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_latitude')); ?>:</b>
	<?php echo CHtml::encode($data->end_latitude); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('end_longitude')); ?>:</b>
	<?php echo CHtml::encode($data->end_longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_place_name_en')); ?>:</b>
	<?php echo CHtml::encode($data->end_place_name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_place_name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->end_place_name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_name_en')); ?>:</b>
	<?php echo CHtml::encode($data->route_name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_name_cy')); ?>:</b>
	<?php echo CHtml::encode($data->route_name_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_description_en')); ?>:</b>
	<?php echo CHtml::encode($data->route_description_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_description_cy')); ?>:</b>
	<?php echo CHtml::encode($data->route_description_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('travel_time')); ?>:</b>
	<?php echo CHtml::encode($data->travel_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topography_en')); ?>:</b>
	<?php echo CHtml::encode($data->topography_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topography_cy')); ?>:</b>
	<?php echo CHtml::encode($data->topography_cy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calories')); ?>:</b>
	<?php echo CHtml::encode($data->calories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_components')); ?>:</b>
	<?php echo CHtml::encode($data->route_components); ?>
	<br />

	*/ ?>

</div>