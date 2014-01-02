<?php
/* @var $this VerleihController */
/* @var $model Verleih */

$this->breadcrumbs=array(
	'Verleihs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Verleih', 'url'=>array('index')),
	array('label'=>'Create Verleih', 'url'=>array('create')),
	array('label'=>'Update Verleih', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Verleih', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Verleih', 'url'=>array('admin')),
);
?>

<h1>View Verleih #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'artikel_id',
		'verleih',
		'rueckgabe',
		'bemerkung',
	),
)); ?>
