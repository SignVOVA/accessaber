<?php
/* @var $this MapfeaturesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mapfeatures',
);

$this->menu=array(
	array('label'=>'Create Mapfeatures', 'url'=>array('create')),
	array('label'=>'Manage Mapfeatures', 'url'=>array('admin')),
);
?>

<h1>Mapfeatures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
