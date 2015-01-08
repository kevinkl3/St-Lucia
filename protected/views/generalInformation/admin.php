<?php
/* @var $this GeneralInformationController */
/* @var $model GeneralInformation */

$this->breadcrumbs=array(
	'General Informations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GeneralInformation', 'url'=>array('index')),
	array('label'=>'Create GeneralInformation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#general-information-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage General Informations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'general-information-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'HISTORY',
		'WELCOME_MESSAGE',
		'LOCATION',
		'PHONES',
		'FAX',
		/*
		'EMAIL',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
