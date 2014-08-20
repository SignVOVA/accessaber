<?php
/* @var $this MapfeaturesController */
/* @var $model Mapfeatures */

$this->breadcrumbs=array(
	'Mapfeatures'=>array('index'),
	$model->map_feature_id,
);

$this->menu=array(
	array('label'=>'List Mapfeatures', 'url'=>array('index')),
	array('label'=>'Create Mapfeatures', 'url'=>array('create')),
	array('label'=>'Update Mapfeatures', 'url'=>array('update', 'id'=>$model->map_feature_id)),
	array('label'=>'Delete Mapfeatures', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->map_feature_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mapfeatures', 'url'=>array('admin')),
);
?>

<h1>View Mapfeatures #<?php echo $model->map_feature_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'map_feature_id',
		'map_feature_type',
		'latitude',
		'longitude',
		'name_en',
		'name_cy',
		'description_en',
		'description_cy',
		'floor',
	),
)); ?>
