<?php
/* @var $this ArtikelTypController */
/* @var $model ArtikelTyp */

$this->breadcrumbs=array(
	'Artikel Typs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ArtikelTyp', 'url'=>array('index')),
	array('label'=>'Create ArtikelTyp', 'url'=>array('create')),
	array('label'=>'Update ArtikelTyp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtikelTyp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtikelTyp', 'url'=>array('admin')),
);
?>

<h1>View ArtikelTyp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
