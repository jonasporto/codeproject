<div class="categories view col-md-9">
<h2><?php echo __('Category'); ?></h2>

	<div class="panel panel-info">
		<div class="panel-heading"><?php echo __('Id'); ?></div>
		<div class="panel-body">
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Name'); ?></div>
			<div class="panel-body">
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Description'); ?></div>
			<div class="panel-body">
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Created'); ?></div>
			<div class="panel-body">
			<?php echo $this->Time->format($category['Category']['created'], '%d/%m/%Y - %H:%M:%S'); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Modified'); ?></div>
			<div class="panel-body">
			<?php echo $this->Time->format($category['Category']['modified'], '%d/%m/%Y - %H:%M:%S');  ?>
			&nbsp;
		</div>
	</div>
</div>
<div class="actions col-md-3">
	<ul>
		<li class="glyphicon glyphicon-edit"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li class="glyphicon glyphicon-remove"><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li class="glyphicon glyphicon-plus"><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		</ul>
</div>
