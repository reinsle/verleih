<?php
/* @var $this VerleihController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Verleihs',
);

$this->menu=array(
	array('label'=>'Create Verleih', 'url'=>array('create')),
	array('label'=>'Manage Verleih', 'url'=>array('admin')),
);
?>

<h1>Verleihs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
