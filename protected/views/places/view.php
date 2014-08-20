<?php
/* @var $this PlacesController */
/* @var $model Places */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->place_id,
);

$this->menu=array(
	array('label'=>'List Places', 'url'=>array('index')),
	array('label'=>'Create Places', 'url'=>array('create')),
	array('label'=>'Update Places', 'url'=>array('update', 'id'=>$model->place_id)),
	array('label'=>'Delete Places', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->place_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Places', 'url'=>array('admin')),
);
?>

<h1>View Places #<?php echo $model->place_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'place_id',
		'place_name_en',
		'place_name_cy',
		'place_description_en',
		'place_description_cy',
		'place_latitude',
		'place_longitude',
		'place_has_disabled_entry',
		'place_has_step_free_access',
		'place_number_of_disabled_toilets',
		'place_has_wheelchair_lift',
		'place_has_lifts',
	),
)); ?>
