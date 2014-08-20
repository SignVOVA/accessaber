<?php
/* @var $this MapfeaturesController */
/* @var $model Mapfeatures */

$this->breadcrumbs=array(
	'Mapfeatures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mapfeatures', 'url'=>array('index')),
	array('label'=>'Manage Mapfeatures', 'url'=>array('admin')),
);
?>

<h1>Create Mapfeatures</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>