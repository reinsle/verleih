<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('artikel')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->artikel)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('verleih')); ?>:
	<?php echo GxHtml::encode($data->verleih); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rueckgabe')); ?>:
	<?php echo GxHtml::encode($data->rueckgabe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bemerkung')); ?>:
	<?php echo GxHtml::encode($data->bemerkung); ?>
	<br />

</div>