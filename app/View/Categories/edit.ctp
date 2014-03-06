<div class="row">
<div class="col-md-9">
<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>

		<legend><?php echo __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('description',array('class'=>'form-control'));
		echo $this->Form->input('Parent.parent_id',array('default'=>$this->request->data['Parent']['id'],'options'=>array(''=>__('Select a category'),$parent),'type' => 'select','label'=>__('Parent Category'),'class'=>'form-control'));

	?>

	<?php echo $this->Form->input(__('Save'),array('class'=>'btn btn-success ','type'=>'submit','label'=>'<hr/>')); ?>
	

<?php echo $this->Form->postLink($this->Html->tag('span',__('Delete'),array('class'=>'btn btn-danger','alt'=>__('Remove'))), array('label'=>'<hr/>','action' => 'delete', $this->Form->value('Contegory.id')), array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Category.name'))); ?>


	<?php echo $this->Form->end(); ?>

	</fieldset>

</div>
</div>
<div class="actions col-md-3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>