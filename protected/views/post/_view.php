<?php
/* @var $this PostController */
/* @var $data POST */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_POST')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_POST), array('view', 'id'=>$data->ID_POST)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_ONLY')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_ONLY); ?>
	<br />


</div>