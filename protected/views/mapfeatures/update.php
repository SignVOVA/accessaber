<?php
/* @var $this MapfeaturesController */
/* @var $model Mapfeatures */

$this->breadcrumbs=array(
	'Mapfeatures'=>array('index'),
	$model->map_feature_id=>array('view','id'=>$model->map_feature_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mapfeatures', 'url'=>array('index')),
	array('label'=>'Create Mapfeatures', 'url'=>array('create')),
	array('label'=>'View Mapfeatures', 'url'=>array('view', 'id'=>$model->map_feature_id)),
	array('label'=>'Manage Mapfeatures', 'url'=>array('admin')),
);
?>

<h1>Update Mapfeatures <?php echo $model->map_feature_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>