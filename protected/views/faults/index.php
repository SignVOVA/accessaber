<?php
/* @var $this FaultsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faults',
);

$this->menu=array(
	array('label'=>'Create Faults', 'url'=>array('create')),
	array('label'=>'Manage Faults', 'url'=>array('admin')),
);
?>

<h1>Faults</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
