<?php
/* @var $this RoutesController */
/* @var $model Routes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'route_id'); ?>
		<?php echo $form->textField($model,'route_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_is_step_free'); ?>
		<?php echo $form->textField($model,'route_is_step_free'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_latitude'); ?>
		<?php echo $form->textField($model,'start_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_longitude'); ?>
		<?php echo $form->textField($model,'start_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_place_name_en'); ?>
		<?php echo $form->textField($model,'start_place_name_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_place_name_cy'); ?>
		<?php echo $form->textField($model,'start_place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_latitude'); ?>
		<?php echo $form->textField($model,'end_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_longitude'); ?>
		<?php echo $form->textField($model,'end_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_place_name_en'); ?>
		<?php echo $form->textField($model,'end_place_name_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_place_name_cy'); ?>
		<?php echo $form->textField($model,'end_place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_name_en'); ?>
		<?php echo $form->textField($model,'route_name_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_name_cy'); ?>
		<?php echo $form->textField($model,'route_name_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_description_en'); ?>
		<?php echo $form->textField($model,'route_description_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_description_cy'); ?>
		<?php echo $form->textField($model,'route_description_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'travel_time'); ?>
		<?php echo $form->textField($model,'travel_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topography_en'); ?>
		<?php echo $form->textField($model,'topography_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topography_cy'); ?>
		<?php echo $form->textField($model,'topography_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calories'); ?>
		<?php echo $form->textField($model,'calories'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_components'); ?>
		<?php echo $form->textArea($model,'route_components',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->