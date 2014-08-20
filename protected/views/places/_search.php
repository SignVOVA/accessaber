<?php
/* @var $this PlacesController */
/* @var $model Places */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'place_id'); ?>
		<?php echo $form->textField($model,'place_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_name_en'); ?>
		<?php echo $form->textField($model,'place_name_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_name_cy'); ?>
		<?php echo $form->textField($model,'place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_description_en'); ?>
		<?php echo $form->textField($model,'place_description_en',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_description_cy'); ?>
		<?php echo $form->textField($model,'place_description_cy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_latitude'); ?>
		<?php echo $form->textField($model,'place_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_longitude'); ?>
		<?php echo $form->textField($model,'place_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_has_disabled_entry'); ?>
		<?php echo $form->textField($model,'place_has_disabled_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_has_step_free_access'); ?>
		<?php echo $form->textField($model,'place_has_step_free_access'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_number_of_disabled_toilets'); ?>
		<?php echo $form->textField($model,'place_number_of_disabled_toilets'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_has_wheelchair_lift'); ?>
		<?php echo $form->textField($model,'place_has_wheelchair_lift'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_has_lifts'); ?>
		<?php echo $form->textField($model,'place_has_lifts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->