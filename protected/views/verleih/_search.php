<?php
/* @var $this VerleihController */
/* @var $model Verleih */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artikel_id'); ?>
		<?php echo $form->textField($model,'artikel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verleih'); ?>
		<?php echo $form->textField($model,'verleih'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rueckgabe'); ?>
		<?php echo $form->textField($model,'rueckgabe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bemerkung'); ?>
		<?php echo $form->textArea($model,'bemerkung',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->