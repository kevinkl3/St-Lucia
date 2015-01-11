<?php
/* @var $this PostController */
/* @var $model POST */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List POST', 'url'=>array('index')),
	array('label'=>'Manage POST', 'url'=>array('admin')),
);
?>

<h1>Crear Publicación</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'sections'=>$sections, 'types'=>$types, 'fileModel'=>$fileModel)); ?>