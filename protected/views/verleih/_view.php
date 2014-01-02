<?php
/* @var $this VerleihController */
/* @var $data Verleih */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('artikel_id')); ?>:</b>
    <?php echo CHtml::encode($data->artikel_id); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('verleih')); ?>:</b>
    <?php echo CHtml::encode($data->verleih); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('rueckgabe')); ?>:</b>
    <?php echo CHtml::encode($data->rueckgabe); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('bemerkung')); ?>:</b>
    <?php echo CHtml::encode($data->bemerkung); ?>
    <br/>


</div>