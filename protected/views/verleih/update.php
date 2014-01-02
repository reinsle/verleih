<?php
/* @var $this VerleihController */
/* @var $model Verleih */

$this->breadcrumbs = array(
    'Verleihs' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Verleih', 'url' => array('index')),
    array('label' => 'Create Verleih', 'url' => array('create')),
    array('label' => 'View Verleih', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Verleih', 'url' => array('admin')),
);
?>

    <h1>Update Verleih <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>