<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'artikel-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'artikel_typ_id'); ?>
		<?php echo $form->dropDownList($model, 'artikel_typ_id', GxHtml::listDataEx(ArtikelTyp::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'artikel_typ_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'bemerkung'); ?>
		<?php echo $form->textArea($model, 'bemerkung'); ?>
		<?php echo $form->error($model,'bemerkung'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->