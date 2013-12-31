<?php
/* @var $this ArtikelTypController */
/* @var $model ArtikelTyp */

$this->breadcrumbs=array(
	'Artikel Typs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtikelTyp', 'url'=>array('index')),
	array('label'=>'Manage ArtikelTyp', 'url'=>array('admin')),
);
?>

<h1>Create ArtikelTyp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>