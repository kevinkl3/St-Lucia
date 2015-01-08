<?php
/* @var $this GeneralInformationController */
/* @var $model GeneralInformation */

$this->breadcrumbs=array(
	'General Informations'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List GeneralInformation', 'url'=>array('index')),
	array('label'=>'Create GeneralInformation', 'url'=>array('create')),
	array('label'=>'Update GeneralInformation', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete GeneralInformation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GeneralInformation', 'url'=>array('admin')),
);
?>

<h1>View GeneralInformation #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'HISTORY',
		'WELCOME_MESSAGE',
		'LOCATION',
		'PHONES',
		'FAX',
		'EMAIL',
	),
)); ?>
