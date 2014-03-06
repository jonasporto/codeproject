<?php echo $this->Html->script(array('tinymce/tinymce.min.js','tinymce/script'));?>

<div class="contents row">

<div class="col-md-9">
<fieldset>


<legend><?php echo __('Add Content'); ?></legend>

<?php echo $this->Form->create('Content',array('enctype' => 'multipart/form-data')); ?>

<?php echo $this->Form->input(__('title'),array('class'=>'form-control'));
      echo $this->Form->input(__('subtitle'),array('class'=>'form-control')); ?>

<?php echo $this->Form->input(__('description'),array('class'=>'form-control')); ?>


<div class="col-md-4">

<?php echo $this->Form->input(__('Category.id'),array('label'=>__('Category'),'default'=>'Content','options'=>$categories,'class'=>'form-control col-md-4'));?>

<?php echo $this->Form->input(__('Save'),array('class'=>'col-md-3 btn btn-success ','type'=>'submit','label'=>'<hr/>')); ?>

</div>

	
<?php echo $this->Form->end(); ?>

</fieldset>
</div>

<div class="actions col-md-2">
	
	<ul>

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		

		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>

		

		</ul>
</div>

</div>
