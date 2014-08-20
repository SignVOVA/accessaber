<?php
/* @var $this FaultsController */
/* @var $model Faults */

$this->breadcrumbs=array(
	'Faults'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Faults', 'url'=>array('index')),
	array('label'=>'Manage Faults', 'url'=>array('admin')),
);
?>

<h1>Create Faults</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>