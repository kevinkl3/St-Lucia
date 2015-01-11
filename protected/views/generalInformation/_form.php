<?php
/* @var $this GeneralInformationController */
/* @var $model GeneralInformation */
/* @var $form CActiveForm */
$bu = Yii::app()->baseUrl;
?>

<script src="<?php echo $bu;?>/ckeditor/ckeditor.js"></script>

<div class="well">
	<div class="form-horizontal">

		<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'post-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// There is a call to performAjaxValidation() commented in generated controller code.
			// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation' => false,
		)); ?>

		<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'HISTORY', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->textArea($model, 'HISTORY', array('rows' => 9, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'HISTORY'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'WELCOME_MESSAGE', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->textArea($model, 'WELCOME_MESSAGE', array('rows' => 2, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'WELCOME_MESSAGE'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'LOCATION', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->textArea($model, 'LOCATION', array('rows' => 2, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'LOCATION'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'PHONES', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->textArea($model, 'PHONES', array('rows' => 2, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'PHONES'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'FAX', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->textArea($model, 'FAX', array('rows' => 2, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'FAX'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'EMAIL', array('class' => 'col-lg-2 control-label')); ?>
			<div class="col-lg-10">
				<?php echo $form->emailField($model, 'EMAIL', array('rows' => 2, 'cols' => 50, 'class' => 'form-control')); ?>
			</div>
			<?php echo $form->error($model, 'EMAIL'); ?>
		</div>

		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<button type="submit"
				class="btn btn-primary"><?php echo $model->isNewRecord ? 'Crear' : 'Guardar' ?></button>
			</div>
		</div>

		<?php $this->endWidget(); ?>
	</div>

</div><!-- form -->
<script type="text/javascript">

$(document).ready(function(){
	CKEDITOR.replace( 'GeneralInformation_HISTORY' );
});
</script>
