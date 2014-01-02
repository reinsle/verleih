<?php
/* @var $this ArtikelController */
/* @var $model Artikel */

$this->breadcrumbs = array(
    'Artikels' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Artikel', 'url' => array('index')),
    array('label' => 'Create Artikel', 'url' => array('create')),
    array('label' => 'Update Artikel', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Artikel', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Artikel', 'url' => array('admin')),
);
?>

<h1>View Artikel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'artikel_typ_id',
        'name',
        'bemerkung',
    ),
)); ?>

<br />
<h2>Verleihliste:</h2>
<table class="detail-view" id="yw1">
    <tr class="odd"><td><b>id</b></td><td><b>Verleih</b></td><td><b>Rückgabe</b></td><td><b>Bemerkung</b></td></tr>
<?php
foreach($model->verleih as $ver) {
    echo '<tr class="even"><td>'.$ver->id.'</td><td>'.$ver->verleih.'</td><td>'.$ver->rueckgabe.'</td><td>'.$ver->bemerkung.'</td></tr>';
}
?>
</table>
