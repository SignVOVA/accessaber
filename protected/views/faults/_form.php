<?php
/* @var $this FaultsController */
/* @var $model Faults */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faults-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reported_by_name'); ?>
		<?php echo $form->textField($model,'reported_by_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reported_by_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reported_by_email_address'); ?>
		<?php echo $form->textField($model,'reported_by_email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reported_by_email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_of_fault'); ?>
		<?php echo $form->textField($model,'location_of_fault',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'location_of_fault'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_of_fault'); ?>
		<?php echo $form->textArea($model,'description_of_fault',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_of_fault'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resolved'); ?>
		<?php echo $form->textField($model,'resolved'); ?>
		<?php echo $form->error($model,'resolved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_known_issue'); ?>
		<?php echo $form->textField($model,'is_known_issue'); ?>
		<?php echo $form->error($model,'is_known_issue'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->