<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */

$this->breadcrumbs=array(
	'Productos Ingredientes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductosIngredientes', 'url'=>array('index')),
	array('label'=>'Create ProductosIngredientes', 'url'=>array('create')),
	array('label'=>'View ProductosIngredientes', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage ProductosIngredientes', 'url'=>array('admin')),
);
?>

<h1>Update ProductosIngredientes <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>