<?php echo $this->Html->script(array('tinymce/tinymce.min.js','tinymce/script'));?>

<div class="row">
<div class="contents col-md-9">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Edit Content'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('class'=>'form-control'));
		echo $this->Form->input('subtitle',array('class'=>'form-control'));
		echo $this->Form->input('description',array('class'=>'form-control'));
		echo $this->Form->input('Category.id',array('label'=>__('Category'),'default'=>$this->request->data['Category'][0]['id'],'options'=>$categories,'class'=>'form-control col-md-4'));

	?>
<?php echo $this->Form->input(__('Save'),array('class'=>'btn btn-success ','type'=>'submit','label'=>'<hr/>')); ?>


<?php echo $this->Form->postLink($this->Html->tag('span',__('Delete'),array('class'=>'btn btn-danger','alt'=>__('Remove'))), array('label'=>'<hr/>','action' => 'delete', $this->Form->value('Content.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Content.id'))); ?>

<?php echo $this->Form->end(); ?>
	</fieldset>

</div>
<div class="actions col-md-3">
	<ul>

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>