<?php
/* @var $this VerleihController */
/* @var $model Verleih */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css');
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'verleih-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'artikel_id'); ?>
        <?php echo $form->dropDownList($model, 'artikel_id', CHtml::listData(
                Artikel::model()->findAll(), 'id', 'name'),
            array('prompt' => 'Select a Artikel')
        ); ?>
        <?php echo $form->error($model, 'artikel_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'verleih'); ?>
        <?php echo $form->textField($model, 'verleih', array('readonly' => true)); ?>
        <?php echo $form->error($model, 'verleih'); ?>
    </div>

    <script>
        $(function () {
            $('#Verleih_verleih').datepicker({'dateFormat': 'yy-mm-dd'});
        });
    </script>

    <div class="row">
        <?php echo $form->labelEx($model, 'rueckgabe'); ?>
        <?php echo $form->textField($model, 'rueckgabe', array('readonly' => true)); ?>
        <?php echo $form->error($model, 'rueckgabe'); ?>
    </div>

    <script>
        $(function () {
            $('#Verleih_rueckgabe').datepicker({'dateFormat': 'yy-mm-dd'});
        });
    </script>

    <div class="row">
        <?php echo $form->labelEx($model, 'bemerkung'); ?>
        <?php echo $form->textArea($model, 'bemerkung', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'bemerkung'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->