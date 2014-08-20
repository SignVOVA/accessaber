<?php
/* @var $this FaultsController */
/* @var $model Faults */

$this->breadcrumbs=array(
	'Faults'=>array('index'),
	$model->fault_id=>array('view','id'=>$model->fault_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Faults', 'url'=>array('index')),
	array('label'=>'Create Faults', 'url'=>array('create')),
	array('label'=>'View Faults', 'url'=>array('view', 'id'=>$model->fault_id)),
	array('label'=>'Manage Faults', 'url'=>array('admin')),
);
?>

<h1>Update Faults <?php echo $model->fault_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>