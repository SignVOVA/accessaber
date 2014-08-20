<?php
/* @var $this RoutesController */
/* @var $model Routes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'routes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'route_is_step_free'); ?>
		<?php echo $form->textField($model,'route_is_step_free'); ?>
		<?php echo $form->error($model,'route_is_step_free'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_latitude'); ?>
		<?php echo $form->textField($model,'start_latitude'); ?>
		<?php echo $form->error($model,'start_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_longitude'); ?>
		<?php echo $form->textField($model,'start_longitude'); ?>
		<?php echo $form->error($model,'start_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_place_name_en'); ?>
		<?php echo $form->textField($model,'start_place_name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'start_place_name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_place_name_cy'); ?>
		<?php echo $form->textField($model,'start_place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'start_place_name_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_latitude'); ?>
		<?php echo $form->textField($model,'end_latitude'); ?>
		<?php echo $form->error($model,'end_latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_longitude'); ?>
		<?php echo $form->textField($model,'end_longitude'); ?>
		<?php echo $form->error($model,'end_longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_place_name_en'); ?>
		<?php echo $form->textField($model,'end_place_name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'end_place_name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_place_name_cy'); ?>
		<?php echo $form->textField($model,'end_place_name_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'end_place_name_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_name_en'); ?>
		<?php echo $form->textField($model,'route_name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route_name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_name_cy'); ?>
		<?php echo $form->textField($model,'route_name_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route_name_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_description_en'); ?>
		<?php echo $form->textField($model,'route_description_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route_description_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_description_cy'); ?>
		<?php echo $form->textField($model,'route_description_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route_description_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_time'); ?>
		<?php echo $form->textField($model,'travel_time'); ?>
		<?php echo $form->error($model,'travel_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topography_en'); ?>
		<?php echo $form->textField($model,'topography_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'topography_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topography_cy'); ?>
		<?php echo $form->textField($model,'topography_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'topography_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calories'); ?>
		<?php echo $form->textField($model,'calories'); ?>
		<?php echo $form->error($model,'calories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_components'); ?>
		<?php echo $form->textArea($model,'route_components',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route_components'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->