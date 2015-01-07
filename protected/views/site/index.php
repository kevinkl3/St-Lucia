<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$bu = Yii::app()->baseUrl;
?>

<!-- Header Image -->
<div class="st-landing">
    <div class="st-welcome-message">
       Bienvenido a la pagina de la municipalidad de santa lucia, porque santalucia es de todos!
    </div>
</div>

<div class="st-section" id="historia">
    <div class="col-lg-12">
        <div class="col-lg-4">
            <img src="<?php echo $bu;?>/images/santa-lucia.png">
        </div>

        <div class="col-lg-8">
            <h2>HISTORIA</h2>
            <p>
                Su nombre primitivo fue "Surcagura" (Surcagua) que significa "Lugar de ranas".
            </p>
            <p align="justify">
                No se tiene datos exactos de fundación, aunque se sabe que es uno de los municipios más antiguos, los indígenas fueron los primeros pobladores allá por el año 1500, posteriormente los españoles trabajaron sus ricas minas, prueba de ello es la reliquia histórica que se encuentra en la iglesia “Cristo Señor de las Mercedes de Santa Lucía” que le obsequió el Rey Felipe II el 15 de enero de 1572, lo que consta en los libros respectivos; su creación como municipio fue el 12 de noviembre de 1820; del Departamento de Tegucigalpa. En 1943 el departamento de Tegucigalpa pasó a llamarse 'Francisco Morazán'.
            </p>
        </div>
    </div>
</div>

<div class="st-section" id="como-llegar">
    <h1>CÓMO LLEGAR</h1>
    <div id="map-canvas"></div>
</div>

<div class="st-section" id="contactanos">
    <h1>CONTACTANOS</h1>
</div>
