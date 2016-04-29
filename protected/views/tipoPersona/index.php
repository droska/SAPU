<?php
/* @var $this TipoPersonaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Personas',
);

$this->menu=array(
	array('label'=>'Crear TipoPersona', 'url'=>array('create')),
	array('label'=>'Manage TipoPersona', 'url'=>array('admin')),
);
?>

<h1>Tipo Personas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
