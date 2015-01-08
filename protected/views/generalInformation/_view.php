<?php
/* @var $this GeneralInformationController */
/* @var $data GeneralInformation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HISTORY')); ?>:</b>
	<?php echo CHtml::encode($data->HISTORY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WELCOME_MESSAGE')); ?>:</b>
	<?php echo CHtml::encode($data->WELCOME_MESSAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOCATION')); ?>:</b>
	<?php echo CHtml::encode($data->LOCATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONES')); ?>:</b>
	<?php echo CHtml::encode($data->PHONES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAX')); ?>:</b>
	<?php echo CHtml::encode($data->FAX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />


</div>