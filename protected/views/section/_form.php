<?php
/* @var $this SectionController */
/* @var $model SECTION */
/* @var $form CActiveForm */
?>

<div class="well">
    <div class="form-horizontal">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'section-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        )); ?>

        <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'NAME', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model, 'NAME', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'DESCRIPTION', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model, 'DESCRIPTION', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
                <div class="checkbox">
                    <label>
                        <?php echo $form->checkBox($model, 'ACTIVE'); ?> Activo
                    </label>
                </div>
            </div>
            <?php echo $form->error($model, 'ACTIVE'); ?>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit"
                        class="btn btn-primary"><?php echo $model->isNewRecord ? 'Crear' : 'Guardar' ?></button>
            </div>
        </div>
        <?php $this->endWidget(); ?>

    </div>
</div>



