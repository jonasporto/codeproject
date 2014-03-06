<div class="row">
<div class="col-md-9">
<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('description',array('class'=>'form-control'));
		echo $this->Form->input('parent_id',array('options'=>array(''=>__('Select a category'),$parent),'type' => 'select','label'=>__('Parent Category'),'class'=>'form-control'));

	?>
	
	<?php echo $this->Form->input(__('Save'),array('class'=>'col-md-2 btn btn-success ','type'=>'submit','label'=>'')); ?>
		
	<?php echo $this->Form->end(); ?>

	</fieldset>

</div>
</div>

<div class="col-md-2">
<div class="actions">
	
	<ul>

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>