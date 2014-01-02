<?php
/* @var $this VerleihController */
/* @var $model Verleih */

$this->breadcrumbs=array(
	'Verleihs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Verleih', 'url'=>array('index')),
	array('label'=>'Manage Verleih', 'url'=>array('admin')),
);
?>

<h1>Create Verleih</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>