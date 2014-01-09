<?php

$this->breadcrumbs = array(
	Verleih::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Verleih::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Verleih::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Verleih::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 