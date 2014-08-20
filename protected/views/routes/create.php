<?php
/* @var $this RoutesController */
/* @var $model Routes */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Create Routes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>