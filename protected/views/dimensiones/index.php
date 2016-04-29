<?php
/* @var $this DimensionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dimensiones',
);

$this->menu=array(
	array('label'=>'Crear Dimension', 'url'=>array('create')),
);
?>

<h1>Dimensiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dimensiones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
