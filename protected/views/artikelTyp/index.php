<?php
/* @var $this ArtikelTypController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artikel Typs',
);

$this->menu=array(
	array('label'=>'Create ArtikelTyp', 'url'=>array('create')),
	array('label'=>'Manage ArtikelTyp', 'url'=>array('admin')),
);
?>

<h1>Artikel Typs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
