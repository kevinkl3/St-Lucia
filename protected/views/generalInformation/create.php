<?php
/* @var $this GeneralInformationController */
/* @var $model GeneralInformation */

$this->breadcrumbs=array(
	'General Informations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GeneralInformation', 'url'=>array('index')),
	array('label'=>'Manage GeneralInformation', 'url'=>array('admin')),
);
?>

<h1>Create GeneralInformation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>