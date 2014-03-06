<div class="categories col-md-9">
	<h2><?php echo __('Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('parent'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Substr->limit($category['Category']['description']); ?>&nbsp;</td>
		<td><?php echo $this->Time->format($category['Category']['created'], '%d/%m/%Y - %H:%M:%S'); ?>&nbsp;</td>
		<td><?php echo $this->Time->format($category['Category']['modified'], '%d/%m/%Y - %H:%M:%S'); ?>&nbsp;</td>
		<td><?php echo h($category['Parent']['name']); ?>&nbsp;</td>
	

		<td class="actions">
			<?php echo $this->Html->link($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open','alt'=>__('View'))),array('action' => 'view', $category['Category']['id']),array('escape'=>false)); ?>
			<?php echo $this->Html->link($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-edit','alt'=>__('Edit'))), array('action' => 'edit', $category['Category']['id']),array('escape'=>false)); ?>
		
			<?php echo $this->Form->postLink($this->Html->tag('span','',array('class'=>'glyphicon glyphicon-remove','alt'=>__('Remove'))), array('action' => 'delete', $category['Category']['id'],), array('escape'=>false), __('Are you sure you want to delete category # %s?', $category['Category']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		if($this->Paginator->hasNext()){
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	}
	?>
	</div>
</div>
<div class="actions col-md-3">
	
	<ul>
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
		
		<li class="glyphicon glyphicon-plus-sign"><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	

		<li class="glyphicon glyphicon-list"><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		</ul>
</div>
