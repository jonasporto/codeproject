<div class="contents view col-md-9">
<h2><?php echo __('Content'); ?></h2>
	<div class="panel panel-info">
		<div class="panel-heading"><?php echo __('Id'); ?></div>
		<div class="panel-body">
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Title'); ?></div>
		<div class="panel-body">
			<?php echo h($content['Content']['title']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Subtitle'); ?></div>
		<div class="panel-body">
			<?php echo h($content['Content']['subtitle']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Description'); ?></div>
		<div class="panel-body">
			<?php echo $content['Content']['description']; ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Created'); ?></div>
		<div class="panel-body">
			<?php echo h($content['Content']['created']); ?>
			&nbsp;
		</div>
		<div class="panel-heading"><?php echo __('Modified'); ?></div>
		<div class="panel-body">
			<?php echo h($content['Content']['modified']); ?>
			&nbsp;
		</div>
	</div>
</div>
<div class="actions col-md-3">
	
	<ul>
		<li class="glyphicon glyphicon-edit"><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li class="glyphicon glyphicon-remove"><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li class="glyphicon glyphicon-plus"><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
	</ul>
</div>
