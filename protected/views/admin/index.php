<?php
/* @var $this AdminController */

$this->breadcrumbs = array(
    'Admin',
);
?>
<div class="page-header">
    <h3>PANEL DE ADMINISTRACIÓN.</h3>
</div>


<div class="well col-lg-12">
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i>&nbsp;USUARIOS</h3>
            </div>
            <div class="panel-body">
                <p class="st-section-desc text-centered">
                    Administración de los usuarios autorizados para el manejo del contenido del sitio.
                </p>

                <div class="text-centered">
                    <a href="<?php echo Yii::app()->createUrl('user');?>" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-newspaper-o"></i>&nbsp;PUBLICACIONES</h3>
            </div>
            <div class="panel-body">
                <p class="st-section-desc text-centered">
                    Administración del contenido del sitio, creacion y edición de publicaciones para las
                    distintas secciones de contenido.
                </p>

                <div class="text-centered">
                    <a href="<?php echo Yii::app()->createUrl('post');?>" class="btn btn-warning">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-cubes"></i>&nbsp;SECCIONES</h3>
            </div>
            <div class="panel-body">
                <p class="st-section-desc text-centered">Administración de las secciones de contenido disponibles en el sitio.</p>

                <div class="text-centered">
                    <a href="<?php echo Yii::app()->createUrl('section');?>" class="btn btn-success">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i>&nbsp;INFORMACIÓN GENERAL</h3>
            </div>
            <div class="panel-body">
                <p class="st-section-desc text-centered">Administración de la información general mostrada en la pantalla princiapl del sitio.</p>

                <div class="text-centered">
                    <a href="<?php echo $this->createUrl('editgeneralinfo');?>" class="btn btn-info">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
