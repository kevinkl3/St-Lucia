<?php
/* @var $this GeneralInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'General Informations',
);

$this->menu=array(
	array('label'=>'Create GeneralInformation', 'url'=>array('create')),
	array('label'=>'Manage GeneralInformation', 'url'=>array('admin')),
);
?>

<h1>General Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
