<?php
/* @var $this PostController */
/* @var $model POST */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->TITLE=>array('view','id'=>$model->ID_POST),
	'Update',
);

$this->menu=array(
	array('label'=>'List POST', 'url'=>array('index')),
	array('label'=>'Create POST', 'url'=>array('create')),
	array('label'=>'View POST', 'url'=>array('view', 'id'=>$model->ID_POST)),
	array('label'=>'Manage POST', 'url'=>array('admin')),
);
?>

<h1>Editar Publicación <?php echo $model->ID_POST; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'sections'=>$sections)); ?>