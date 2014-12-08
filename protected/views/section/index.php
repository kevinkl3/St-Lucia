<?php
/* @var $this SectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sections',
);

$this->menu=array(
	array('label'=>'Create SECTION', 'url'=>array('create')),
	array('label'=>'Manage SECTION', 'url'=>array('admin')),
);
?>

<h1>Sections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
