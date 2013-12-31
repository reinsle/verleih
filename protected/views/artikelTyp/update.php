<?php
/* @var $this ArtikelTypController */
/* @var $model ArtikelTyp */

$this->breadcrumbs=array(
	'Artikel Typs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtikelTyp', 'url'=>array('index')),
	array('label'=>'Create ArtikelTyp', 'url'=>array('create')),
	array('label'=>'View ArtikelTyp', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtikelTyp', 'url'=>array('admin')),
);
?>

<h1>Update ArtikelTyp <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>