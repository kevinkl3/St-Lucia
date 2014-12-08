<?php
/* @var $this PostController */
/* @var $model POST */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->TITLE,
);

$this->menu=array(
	array('label'=>'List POST', 'url'=>array('index')),
	array('label'=>'Create POST', 'url'=>array('create')),
	array('label'=>'Update POST', 'url'=>array('update', 'id'=>$model->ID_POST)),
	array('label'=>'Delete POST', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_POST),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage POST', 'url'=>array('admin')),
);
?>

<h1>View POST #<?php echo $model->ID_POST; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_POST',
		'TITLE',
		'CONTENT',
		'FILE_ONLY',
	),
)); ?>
