<?php
/* @var $this TipoPersonaController */
/* @var $model TipoPersona */

$this->breadcrumbs=array(
	'Tipo Personas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoPersona', 'url'=>array('index')),
	array('label'=>'Manage TipoPersona', 'url'=>array('admin')),
);
?>

<h1>Create TipoPersona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>