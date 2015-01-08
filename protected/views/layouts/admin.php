<?php /* @var $this Controller */
$bu = Yii::app()->baseUrl;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="es"/>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top st-nav">
    <div class="container">
        <div class="navbar-header">
            <a href="<?php echo $this->createUrl('site/index'); ?>" class="navbar-brand">
                <img data-0="width:170px; margin-top:-7px" data-200="width:117px" class="st-logo" src="<?php echo $bu; ?>/images/st-logo.png"/>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => 'ADMIN', 'url' => array('/admin/index')),
                    array('label' => 'USUARIOS', 'url' => array('/user/index')),
                    array('label' => 'PUBLICACIONES', 'url' => array('/post/index')),
                    array('label' => 'SECCIONES', 'url' => array('/section/index')),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/admin/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
                'htmlOptions' => array('class' => 'nav navbar-nav navbar-right')
            )); ?>
        </div>
    </div>
</div>
<!-- mainmenu -->

<div class="st-admin-container">

    <div class="container" >
        <?php echo $content; ?>
    </div>

    <div class="clear"></div>
    <div class="st-footer">
        Copyright &copy; <?php echo date('Y'); ?> by A Team<br/>
    </div>
    <!-- footer -->

</div>
<!-- page -->


</body>
</html>
