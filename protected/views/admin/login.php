<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div class="text-centered">
    <h1>Login</h1>
</div>

<div class="col-lg-4 col-lg-offset-4 well bs-component">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array('class' => 'form-horizontal')
    )); ?>

    <fieldset>
        <div class="col-lg-12">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-danger')); ?>
        </div>

        <div class="col-lg-12">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password', array('class' => 'text-danger')); ?>

        </div>

        <div class="col-lg-12 rememberMe">

            <div class="checkbox">
                <label><?php echo $form->checkBox($model, 'rememberMe'); ?><?php echo $form->label($model, 'rememberMe'); ?></label>
            </div>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="col-lg-12 buttons">
            <input class="btn btn-primary col-lg-10 col-lg-offset-1" type="submit" value="login"/>
        </div>
    </fieldset>

    <?php $this->endWidget(); ?>
</div><!-- form -->
