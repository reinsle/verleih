<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'verleih-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'artikel_id'); ?>
		<?php echo $form->dropDownList($model, 'artikel_id', GxHtml::listDataEx(Artikel::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'artikel_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'verleih'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'verleih',
			'value' => $model->verleih,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'verleih'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rueckgabe'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'rueckgabe',
			'value' => $model->rueckgabe,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'rueckgabe'); ?>
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