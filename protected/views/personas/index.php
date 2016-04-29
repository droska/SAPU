<?php
/* @var $this PersonasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Create Personas', 'url'=>array('create')),
);
?>

<h1>Personas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
<div class="search-form" style="display:none">
 <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<?php
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'personas-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id_persona',
			'cedula',
			'rif',
			'nombre',
			'direccion',
			'telefono',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); 
?>

