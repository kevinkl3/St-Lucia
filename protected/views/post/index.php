<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="page-header">
    <h3>PUBLICACIONES</h3>
</div>

<div class="col-lg-12 st-div">
    <a href="<?php echo $this->createUrl('create'); ?>" class="btn btn-success" style="float:right;">Crear nueva
        publicación</a>
</div>

<div class="col-lg-12">
    <div class="well">
        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'user-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'ID_POST',
                'TITLE',
                array(
                    'header'=>'Autor',
                    'type'=>'raw',
                    'value'=>'$data->USER->NAME',
                    'filter'=>CHtml::activeDropDownList($model,'USER_ID_USER',CHtml::listData($users, 'ID_USER', 'USERNAME'),array('empty'=>'Cualquiera'))
                ),
                array(
                    'header'=>'Sección',
                    'type'=>'raw',
                    'value'=>'$data->SECTION->NAME',
                    'filter'=>CHtml::activeDropDownList(
                            $model,
                            'SECTION_ID_SECTION',
                            CHtml::listData($sections, 'ID_SECTION', 'NAME'),
                            array(
                                'empty'=>'Todas'
                            ) 
                        )
                ),
                array(
                    'header'=>'Solo Archivo',
                    'type'=>'raw',
                    'name'=>'FILE_ONLY',
                    'value'=>'$data->FILE_ONLY ? "SI" : "NO" ',
                    'filter'=>CHtml::activeDropDownList($model,'FILE_ONLY',CHtml::listData($yesno, 'OPTION', 'NAME'),array('empty'=>'Todos'))
                ),
                //'CONTENT',
                //'FILE_ONLY',
                //'USER_ID_USER',
                //'SECTION_ID_SECTION',

                array(
                    'class' => 'CButtonColumn',
                    'updateButtonUrl' =>'Yii::app()->createUrl("post/update",array("id"=>$data->ID_POST))',
                    'viewButtonUrl' => 'Yii::app()->createUrl("post/view",array("id"=>$data->ID_POST))',
                    'deleteButtonUrl' => 'Yii::app()->createUrl("post/delete",array("id"=>$data->ID_POST))'
                ),
            ),
        )); ?>
    </div>

</div>