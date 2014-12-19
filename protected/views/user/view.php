<?php
/* @var $this UserController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Create USER', 'url'=>array('create')),
	array('label'=>'Update USER', 'url'=>array('update', 'id'=>$model->ID_USER)),
	array('label'=>'Delete USER', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_USER),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>Usuario <?php echo $model->NAME; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_USER',
		'NAME',
		'USERNAME',
		'CREATION_DATE',
		'LAST_LOGIN',
		'EMAIL',
		array(
            'name'=>'ACTIVE',
            'header'=>'Activo',
            'value'=>(($model->ACTIVE===0)?"No":"Si")
        )
	),
)); ?>
