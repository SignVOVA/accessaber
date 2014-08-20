<?php
/* @var $this FaultsController */
/* @var $model Faults */

$this->breadcrumbs=array(
	'Faults'=>array('index'),
	$model->fault_id,
);

$this->menu=array(
	array('label'=>'List Faults', 'url'=>array('index')),
	array('label'=>'Create Faults', 'url'=>array('create')),
	array('label'=>'Update Faults', 'url'=>array('update', 'id'=>$model->fault_id)),
	array('label'=>'Delete Faults', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fault_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faults', 'url'=>array('admin')),
);
?>

<h1>View Faults #<?php echo $model->fault_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fault_id',
		'reported_by_name',
		'reported_by_email_address',
		'location_of_fault',
		'description_of_fault',
		'datetime',
		'resolved',
		'is_known_issue',
	),
)); ?>
