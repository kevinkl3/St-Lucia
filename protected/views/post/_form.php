<?php
/* @var $this PostController */
/* @var $model POST */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTENT'); ?>
		<?php echo $form->textArea($model,'CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CONTENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_ONLY'); ?>
		<?php echo $form->textField($model,'FILE_ONLY'); ?>
		<?php echo $form->error($model,'FILE_ONLY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->