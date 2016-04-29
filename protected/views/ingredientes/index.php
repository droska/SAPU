<?php
/* @var $this IngredientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ingredientes',
);

$this->menu=array(
	array('label'=>'Create Ingredientes', 'url'=>array('create')),
	array('label'=>'Manage Ingredientes', 'url'=>array('admin')),
);
?>

<h1>Ingredientes</h1>

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
	'id'=>'ingredientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'descripcion',
		'cantidad',
		'tipo',
		'und_codigo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>