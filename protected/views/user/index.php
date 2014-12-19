<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="page-header">
    <h3>USUARIOS</h3>
</div>

<div class="col-lg-12 st-div">
    <a href="<?php echo $this->createUrl('create'); ?>" class="btn btn-success" style="float:right;">Crear nuevo
        Usuario</a>
</div>

<div class="col-lg-12">
    <div class="well">
        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'user-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'ID_USER',
                'NAME',
                'USERNAME',
                'CREATION_DATE',
                'LAST_LOGIN',
                'EMAIL',
                'ACTIVE',

                array(
                    'class' => 'CButtonColumn',
                ),
            ),
        )); ?>
    </div>

</div>