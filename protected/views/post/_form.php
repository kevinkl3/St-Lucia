<?php
/* @var $this PostController */
/* @var $model POST */
/* @var $form CActiveForm */
$bu = Yii::app()->baseUrl;
?>

<script src="<?php echo $bu;?>/ckeditor/ckeditor.js"></script>

<div class="well">
    <div class="form-horizontal">

        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'post-form',
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        )); ?>

        <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Sección</label>
            <div class="col-lg-10">
                <?php echo $form->dropDownList($model, 'SECTION_ID_SECTION',CHtml::listData($sections, 'ID_SECTION', 'NAME'),array('class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'TITLE', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model, 'TITLE', array('size' => 60, 'maxlength' => 256, 'class' => 'form-control')); ?>
            </div>
            <?php echo $form->error($model, 'TITLE'); ?>
        </div>

        <div class="form-group pcontent">
            <?php echo $form->labelEx($model, 'CONTENT', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textArea($model, 'CONTENT', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            </div>
            <?php echo $form->error($model, 'CONTENT'); ?>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                 <div class="checkbox">
                    <label>
                        <?php echo $form->checkBox($model, 'FILE_ONLY'); ?> Publicar únicamente archivo(s)
                    </label>
                    <?php echo $form->error($model, 'FILE_ONLY'); ?>
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <div class="files">
                <div>
                    <?php echo $form->labelEx($fileModel, 'ARCHIVOS', array('class' => 'col-lg-2 control-label')); ?>
                    <div class="col-lg-8">
                        <?php echo $form->fileField($fileModel,'FILES',array('class' => 'form-control', 'name'=>'FILES[0][file]')) ?>
                    </div>
                    <div class="col-lg-2">
                        <?php echo $form->dropDownList($fileModel, 'FILETYPE_ID_FILETYPE',CHtml::listData($types, 'ID_FILETYPE', 'NAME'),array('class'=>'form-control','name'=>'FILES[0][FILETYPE_ID_FILETYPE]')); ?>
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-2">
                    <br>
                    <button class="btn btn-success" type="button">Mas</button>
                </div>
            </div>
        </div>
    
        <hr/>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary"><?php echo $model->isNewRecord ? 'Crear' : 'Guardar' ?></button>
            </div>
        </div>

        <?php $this->endWidget(); ?>
    </div>

</div><!-- form -->


<script type="text/javascript">
    $(document).ready(function(){
        CKEDITOR.replace( 'POST_CONTENT' );

        $('input[name="POST[FILE_ONLY]"]').change(function(){
            var val = +$('input[name="POST[FILE_ONLY]"]:checked').val();
            if(val == 1){
                $('div.pcontent').fadeOut();
            }else{
                $('div.pcontent').fadeIn();
            }
        });

    });
</script>