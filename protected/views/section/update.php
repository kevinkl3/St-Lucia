<?php
/* @var $this SectionController */
/* @var $model SECTION */

$this->breadcrumbs=array(
	'Sections'=>array('index'),
	$model->NAME=>array('view','id'=>$model->ID_SECTION),
	'Update',
);

$this->menu=array(
	array('label'=>'List SECTION', 'url'=>array('index')),
	array('label'=>'Create SECTION', 'url'=>array('create')),
	array('label'=>'View SECTION', 'url'=>array('view', 'id'=>$model->ID_SECTION)),
	array('label'=>'Manage SECTION', 'url'=>array('admin')),
);
?>

<h1>Update SECTION <?php echo $model->ID_SECTION; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>