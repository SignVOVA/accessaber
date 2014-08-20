<?php
/* @var $this FaultsController */
/* @var $model Faults */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fault_id'); ?>
		<?php echo $form->textField($model,'fault_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reported_by_name'); ?>
		<?php echo $form->textField($model,'reported_by_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reported_by_email_address'); ?>
		<?php echo $form->textField($model,'reported_by_email_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location_of_fault'); ?>
		<?php echo $form->textField($model,'location_of_fault',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description_of_fault'); ?>
		<?php echo $form->textArea($model,'description_of_fault',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resolved'); ?>
		<?php echo $form->textField($model,'resolved'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_known_issue'); ?>
		<?php echo $form->textField($model,'is_known_issue'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->