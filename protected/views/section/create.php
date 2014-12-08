<?php
/* @var $this SectionController */
/* @var $model SECTION */

$this->breadcrumbs=array(
	'Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SECTION', 'url'=>array('index')),
	array('label'=>'Manage SECTION', 'url'=>array('admin')),
);
?>

<h1>Create SECTION</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>