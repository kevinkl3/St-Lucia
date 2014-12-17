<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="page-header">
    <h3>USUARIOS</h3>
</div>


<div>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'user-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'ID_USER',
            'NAME',
            'USERNAME',
            'PASSWORD',
            'CREATION_DATE',
            'LAST_LOGIN',
            /*
            'EMAIL',
            'ACTIVE',
            */
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    )); ?>
</div>