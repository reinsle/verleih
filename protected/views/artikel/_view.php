<?php
/* @var $this ArtikelController */
/* @var $data Artikel */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('artikel_typ_id')); ?>:</b>
    <?php echo CHtml::encode($data->artikelTyp->name); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('bemerkung')); ?>:</b>
    <?php echo CHtml::encode($data->bemerkung); ?>
    <br/>

</div>