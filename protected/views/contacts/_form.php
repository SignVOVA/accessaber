<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_cy'); ?>
		<?php echo $form->textField($model,'name_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonenumber'); ?>
		<?php echo $form->textField($model,'phonenumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'phonenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailaddress'); ?>
		<?php echo $form->textField($model,'emailaddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emailaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officehours_en'); ?>
		<?php echo $form->textField($model,'officehours_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'officehours_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webaddress'); ?>
		<?php echo $form->textField($model,'webaddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'webaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_en'); ?>
		<?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_cy'); ?>
		<?php echo $form->textArea($model,'description_cy',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_cy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officehours_cy'); ?>
		<?php echo $form->textField($model,'officehours_cy',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'officehours_cy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->