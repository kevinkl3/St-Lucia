<?php
/* @var $this SectionController */
/* @var $model SECTION */

$this->breadcrumbs=array(
	'Sections'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List SECTION', 'url'=>array('index')),
	array('label'=>'Create SECTION', 'url'=>array('create')),
	array('label'=>'Update SECTION', 'url'=>array('update', 'id'=>$model->ID_SECTION)),
	array('label'=>'Delete SECTION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_SECTION),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SECTION', 'url'=>array('admin')),
);
?>

<h1>View SECTION #<?php echo $model->ID_SECTION; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_SECTION',
		'NAME',
		'DESCRIPTION',
	),
)); ?>
