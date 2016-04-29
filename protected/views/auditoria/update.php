<?php
/* @var $this AuditoriaController */
/* @var $model Auditoria */

$this->breadcrumbs=array(
	'Auditorias'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Auditoria', 'url'=>array('index')),
	array('label'=>'Create Auditoria', 'url'=>array('create')),
	array('label'=>'View Auditoria', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Auditoria', 'url'=>array('admin')),
);
?>

<h1>Update Auditoria <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>