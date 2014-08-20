<?php
/* @var $this PlacesController */
/* @var $model Places */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'places-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'place_name_en'); ?>
		<?php echo $form->textField($model,'place_name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_name_cy'); ?>
		<?php echo $form->textField($model,'place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_name_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_description_en'); ?>
		<?php echo $form->textField($model,'place_description_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_description_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_description_cy'); ?>
		<?php echo $form->textField($model,'place_description_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_description_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_latitude'); ?>
		<?php echo $form->textField($model,'place_latitude'); ?>
		<?php echo $form->error($model,'place_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_longitude'); ?>
		<?php echo $form->textField($model,'place_longitude'); ?>
		<?php echo $form->error($model,'place_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_has_disabled_entry'); ?>
		<?php echo $form->textField($model,'place_has_disabled_entry'); ?>
		<?php echo $form->error($model,'place_has_disabled_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_has_step_free_access'); ?>
		<?php echo $form->textField($model,'place_has_step_free_access'); ?>
		<?php echo $form->error($model,'place_has_step_free_access'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_number_of_disabled_toilets'); ?>
		<?php echo $form->textField($model,'place_number_of_disabled_toilets'); ?>
		<?php echo $form->error($model,'place_number_of_disabled_toilets'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_has_wheelchair_lift'); ?>
		<?php echo $form->textField($model,'place_has_wheelchair_lift'); ?>
		<?php echo $form->error($model,'place_has_wheelchair_lift'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_has_lifts'); ?>
		<?php echo $form->textField($model,'place_has_lifts'); ?>
		<?php echo $form->error($model,'place_has_lifts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->