<?php
/* @var $this RoutesController */
/* @var $model Routes */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->route_id,
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Create Routes', 'url'=>array('create')),
	array('label'=>'Update Routes', 'url'=>array('update', 'id'=>$model->route_id)),
	array('label'=>'Delete Routes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->route_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>View Routes #<?php echo $model->route_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'route_id',
		'route_is_step_free',
		'start_latitude',
		'start_longitude',
		'start_place_name_en',
		'start_place_name_cy',
		'end_latitude',
		'end_longitude',
		'end_place_name_en',
		'end_place_name_cy',
		'route_name_en',
		'route_name_cy',
		'route_description_en',
		'route_description_cy',
		'travel_time',
		'topography_en',
		'topography_cy',
		'calories',
		'route_components',
	),
)); ?>
