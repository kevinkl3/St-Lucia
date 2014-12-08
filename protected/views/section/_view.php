<?php
/* @var $this SectionController */
/* @var $data SECTION */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SECTION')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SECTION), array('view', 'id'=>$data->ID_SECTION)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>